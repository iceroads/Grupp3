<?php get_header('Movie Staff');?>
<h1>Movie Staff</h1>

<h3>Stars/Writers/Directors/Producers</h3>

<ol>
    <?php foreach($users as $user) : ?>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/user/show/<?php echo $user->id; ?>"> <?php echo $user->name() ?></a></li>
    <?php endforeach; ?>
</ol>
<?php get_footer();?>