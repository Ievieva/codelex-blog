<a href="/">Back</a>
<h1>Comments</h1>

<?php if (! empty($comments)): ?>
    <ul>
    <?php foreach ($comments as $comment): ?>
        <li>
            <p><strong><?php echo $comment->name(); ?></strong> <?php echo $comment->content(); ?></p>
            <p>
                <small>
                    <?php echo $comment->createdAt(); ?>
                </small>
            </p>
        <form method="post" action="/articles/<?php echo $comment->articleId(); ?>/comments/<?php echo $comment->id(); ?>">
            <input type="hidden" name="_method" value="DELETE" />
            <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
        </form>
        </li>
    <?php endforeach; ?>
    </ul>
<?php else: ?>
    <strong>No comments.</strong>
<?php endif; ?>