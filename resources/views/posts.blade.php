<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Star Wars Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <?php foreach 
    ($posts as $post): ?>
    <article>
        <?= $post; ?>
    </article>
    <?php endforeach; ?>

</body>
</html>