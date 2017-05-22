<?php get_header(); ?>
<h1><?php echo $user->f_namn . " ". $user->e_namn ?></h1>

<img src="<?php echo $user->bild ?>">

<h3>Birthdate</h3>
<p><?php echo $user->birthdate ?></p>

<h3>Biography</h3>
<p><?php echo $user->info ?></p>

<h3>Filmography</h3>
<ol>
    <?php foreach($user->movies as $movie) : ?>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/movie/show/<?php echo $movie->id; ?>"> <?php echo $movie->titel ?></a></li>
    <?php endforeach; ?>
    <?php 
    foreach($moviesByRoles as $movie) : ?>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/movie/show/<?php echo $movie->id; ?>"> <?php echo $movie->titel ?></a></li>
    <?php endforeach; ?>
</ol>

<h3>Profession</h3>
<ol>
    <?php foreach($user->roles as $role) : ?>
        <li><?php echo $role->roll; ?></li>
    <?php endforeach; ?>
</ol>
<?php get_footer();?>