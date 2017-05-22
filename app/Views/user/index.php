<?php get_header();?>
<h1>Folk</h1>

<ol>
    <?php foreach($user as $user) : ?>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/user/show/<?php echo $user->id; ?>"> <?php echo $user->f_namn . " ". $user->e_namn ?></a></li>
    <?php endforeach; ?>
</ol>
<?php get_footer();?>