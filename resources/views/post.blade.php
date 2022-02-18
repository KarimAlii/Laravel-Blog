<!DOCTYPE html>

<title> My Blog </title>
<link rel="stylesheet" href="/app.css">
<body>
    <article>
<h1><?= echo $post->title;?></h1>
<div> <?= echo $post->body;?></div>
    </article>
    <a href="/">Go Back</a>
</body>
