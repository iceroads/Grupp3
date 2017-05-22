<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
	<div class="container">
		<a class="navbar-brand" href="#">Movie</a>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="http://<?php echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/toplist">Toplist</a>
				<a class="nav-item nav-link" href="http://<?php echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/user">Actors</a>
				<a class="nav-item nav-link" href="http://<?php echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/movie">Movies</a>
				<a class="nav-item nav-link" href="http://<?php echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/form">+ skådespelare</a>
				<a class="nav-item nav-link" href="http://<?php echo $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/film">+ film</a>
			</div>
		</div>
	</div><!-- /.container -->
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
</nav>