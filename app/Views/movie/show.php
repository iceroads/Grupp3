<?php get_header($movie->titel); ?>
        <h1> Movies </h1>
     <h3><?php echo $movie->titel; ?></h3>
     <br/>
     <p> Release Year<br/><?php echo $movie->release_year; ?></p>
     <br/>
     <p> Genre<br/><?php echo $movie->genre; ?></p>
     <br/>
     <img src="<?php echo $movie->bild; ?>">
     <br/>

     <h4> Producer: <a href="http://<?php echo BASE_PATH;?>/user/show/<?php echo $movie->producer; ?>"><?php echo $users->find($movie->producer)->f_namn." ".$users->find($movie->producer)->e_namn; ?></a></h4>
     <br/>
     <h4> Writer: <a href="http://<?php echo BASE_PATH;?>/user/show/<?php echo $movie->writer; ?>">
    <?php echo $users->find($movie->writer)->f_namn." ".$users->find($movie->writer)->e_namn; ?></a></h4>
     <br/>
     <p><?php echo $movie->info; ?></p>
     <br/>
     <?php echo $movie->trailer; ?>
     <ul>
     <?php foreach ($movie->users as $user) : ?>
    	<li><a href="http://<?php echo BASE_PATH; ?>/user/show/<?php echo $user->id; ?>"><?php echo $user->name(); ?></a></li>
	<?php
        endforeach;
	?>
	</ul>


<?php get_footer(); ?>