<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>All the movies</title>
</head>
<body>
        <h1> Movies </h1>
        <ol>
            <?php foreach($movies as $movie) : ?>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/movie/show/<?php echo $movie->id; ?>"> <?php echo $movie->titel; ?></a> </li>
            <?php endforeach; ?>
        </ol>
</body>
</html>
<pre>