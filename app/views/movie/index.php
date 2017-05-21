<h1> Alla våra filmer </h1>
<ul>
<?php foreach($data["movie"] as $film) : ?>
    <li><?php echo $film["titel"]; ?> - skriven av: <?php echo $film["producer"] ?></li>
<?php endforeach; ?>
</ul>