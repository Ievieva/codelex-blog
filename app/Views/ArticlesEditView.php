<h3><?php echo $article->title(); ?></h3>
<p><?php echo $article->content(); ?></p>
<small><?php echo $article->createdAt(); ?></small>
<hr/>
<form method="post" action="/articles/<?php echo $article->id(); ?>">
    <input type="hidden" name="_method" value="PUT">
    <div>
        <label for="title">Title:</label>
        <input
                type="text"
                id="title"
                name="title"
                value="<?php echo $article->title(); ?>"
                style="display: block;"
        />
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea
                name="content"
                id="content"
                cols="30"
                rows="4"
                style="display: block;"
        ><?php echo $article->content(); ?></textarea>
    </div>

    <button type="submit">Submit</button>
</form>

