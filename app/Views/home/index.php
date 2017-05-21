<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Best movies ever</title>
</head>
<body>
        <h1> The topplist </h1>
        <ol>
            <?php foreach($toplist as $movie) : ?>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/movie/<?php echo $movie->id; ?>"> <?php echo $movie->titel; ?></a> </li>
            <?php endforeach; ?>
        </ol>
</body>
</html>
<pre>