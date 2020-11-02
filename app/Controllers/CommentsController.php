<?php

namespace App\Controllers;

use App\Models\Comment;

class CommentsController
{
    public function store(array $vars)
    {
        $articleId = (int) $vars['id'];

        query()
            ->insert('comments')
            ->values([
                'article_id' => ':articleId',
                'name' => ':name',
                'content' => ':content'
            ])
            ->setParameters([
                'articleId' => $articleId,
                'name' => $_POST['name'],
                'content' => $_POST['content'],
            ])
            ->execute();

        header('Location: /articles/' . $articleId);
    }

    public function edit(array $vars)
    {
        $commentsQuery = query()
            ->select('*')
            ->from('comments')
            ->where('article_id = :articleId')
            ->setParameter('articleId', (int) $vars['id'])
            ->execute()
            ->fetchAllAssociative();

        $comments = [];

        foreach ($commentsQuery as $comment)
        {
            $comments[] = new Comment(
                $comment['id'],
                $comment['article_id'],
                $comment['name'],
                $comment['content'],
                $comment['created_at'],
            );
        }

        return require_once __DIR__  . '/../Views/CommentsView.php';
    }

    public function delete(array $vars)
    {
        query()
            ->delete('comments')
            ->where('id = :id', 'article_id = :article_id')
            ->setParameters(['id'=> (int) $vars['id'],
                'article_id' => (int) $vars['article_id']])
            ->execute();

        header('Location: /articles/' . $vars['article_id']);
    }
}