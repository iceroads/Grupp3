<h1> Topp 10 av våra favorit filmer </h1>
<ol>
<?php foreach($data as $film) : ?>
    <li><?php echo $film["titel"]; ?></li>
<?php endforeach; ?>
</ol>