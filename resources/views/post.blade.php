<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Star Wars Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <article>
     
    <h1>
          {{ $post->title }}

    </h1>
    <div>
       {!! $post->body !!}
    </div>
       
        
    </article>
    <a href="/">Go back</a>

</body>
</html>