
<?php get_header(); ?>
<style>

</style>
<h1 class="my-4 text-center"> 10 great movies to see while you are hangover </h1>
<?php $i=1; foreach($toplist as $movie): ?>
       <div class="toplist_box mb-3 border-1">
            <div class="alert alert-success">
                <span class="float-left h2">#<?php echo $i; ?></span>
                <h4 class="text-center"><a class="h4" href="http://<?php echo BASE_PATH; ?>/movie/show/<?php echo $movie->id; ?>"><?php echo $movie->titel; ?></a></h4>
            </div>
            <a href="http://<?php echo BASE_PATH ?>/movie/show/<?php echo $movie->id; ?>">
                <img class="float-left mr-2" src="<?php echo $movie->bild; ?>">
            </a>
            <p><?php echo $movie->info; ?>
                <div class="mt-5 text-center h2">
                <?php for($j=1; $j<=5; $j++): ?>
                    <?php if($j <= $movie->rate): ?>
                        ★
                    <?php else: ?>
                        ☆
                    <?php endif; ?>
                <?php endfor; ?>
                </div>
            </p>
            <div class="clearfix"></div>
        </div>
<?php $i++; endforeach; ?>
<?php get_footer();?>