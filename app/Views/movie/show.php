<?php get_header(); ?>
        <h1> Movies </h1>
     <h3><?php echo $movie->titel; ?></h3>
     <br/>
     <p> Release Year<br/><?php echo $movie->release_year; ?></p>
     <br/>
     <p> Genre<br/><?php echo $movie->genre; ?></p>
     <br/>
     <img src="<?php echo $movie->bild; ?>">
     <br/>

     <h4> Producer: <?php echo $users->find($movie->producer)->f_namn." ".$users->find($movie->producer)->e_namn; ?></h4>
     <br/>
     <h4> Writer: <?php echo $users->find($movie->writer)->f_namn." ".$users->find($movie->writer)->e_namn; ?></h4>
     <br/>
     <p><?php echo $movie->info; ?></p>
     <br/>
     <?php echo $movie->trailer; ?>
     <ul>
     <?php foreach ($movie->users as $user) {
    	echo "<li>$user->f_namn $user->e_namn</li>";
	}
	?>
	</ul>


<?php get_footer(); ?>