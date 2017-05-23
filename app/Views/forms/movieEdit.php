<?php get_header("Edit Movie"); ?>

<form method="POST">
<?php foreach($movie->users as $user) : ?>
    <input type="hidden" class="star-<?php echo $user->id;?>" name="star[]" value="<?php echo $user->id; ?>">
<?php endforeach; ?>
  <h1>Edit Movie <?php echo $movie->titel; ?></h1><br>
  <label for="titel">Titel:</label>
  <input type="text" name="titel" size="80" id="titel" value="<?php echo $movie->titel; ?>"><br>

<label for="star">Stars:</label>
<input type="text" id="starInput" name="autocomplete" class="starInput" placeholder="Actor">
  <button class="btn addStar">Lägg till</button><br>
<ul class="starList">
<?php
  foreach($movie->users as $user) : ?>
    <li><?php echo $user->name(); ?> - <a href="#" class="star-remove" data-userid="<?php echo $user->id; ?>">&times;</a></li>
  <?php
  endforeach;
?>
</ul>


  <label for="producer">Producer:</label>
  <select name="producer" id="producer">
    <option value="0">--   Välj  --</option>
    <?php foreach ($producers as $producer) : ?>
      <?php $selected = ($movie->producer == $producer->id) ? 'selected' : ''; ?>
      <option value="<?php echo $producer->id; ?>" <?php echo $selected; ?>><?php echo $producer->name(); ?></option>
    <?php endforeach; ?>
  </select><br>

  <label for="writer">Writer:</label>
  <select name="writer" id="writer">
    <option value="0">--   Välj  --</option>
    <?php foreach ($writers as $writer) : ?>
      <?php $selected = ($movie->writer == $writer->id) ? 'selected' : ''; ?>
      <option value="<?php echo $writer->id; ?>" <?php echo $selected; ?>><?php echo $writer->name(); ?></option>
    <?php endforeach; ?>
  </select><br>

  <label for="rate">Rating:</label>
  <select name="rate" id="rate">
  <option value="0">--  Välj  --</option>
<?php for($i=1;$i<=5;$i++) : ?>
  <?php $selected = ($movie->rate == $i) ? 'selected' : ''; ?>
    <option value="<?php echo $i; ?>" <?php echo $selected; ?>><?php echo $i; ?> stjärnor</option>
<?php endfor; ?>
  </select><br>

  <label for="trailer">Trailer:</label>
  <input type="text" name="trailer" id="trailer" value="<?php echo htmlentities($movie->trailer); ?>"><br>
  <label for="release_year">Släppt år:</label>
  <input type="date" name="release_year" id="release_year" value="<?php echo $movie->release_year; ?>"><br>
  <label for="url">Url till bild:</label>
  <input type="text" name="bild" id="url" value="<?php echo htmlentities($movie->bild); ?>"><br>

  <label for="genre">Genre:</label>
  <select name="genre" id="genre">
  <option value="">--  Välj  --</option>
  <option value="Action" <?php echo $movie->genre == "Action" ? 'selected' : ''; ?>>Action</option>
  <option value="Adventure" <?php echo $movie->genre == "Adventure" ? 'selected' : ''; ?>>Adventure</option>
  <option value="Comedy" <?php echo $movie->genre == "Comedy" ? 'selected' : ''; ?>>Comedy</option>
  <option value="Crime" <?php echo $movie->genre == "Crime" ? 'selected' : ''; ?>>Crime</option>
  <option value="Drama" <?php echo $movie->genre == "Drama" ? 'selected' : ''; ?>>Drama</option>
  <option value="Fantasy" <?php echo $movie->genre == "Fantasy" ? 'selected' : ''; ?>>Fantasy</option>
  <option value="Horror" <?php echo $movie->genre == "Horror" ? 'selected' : ''; ?>>Horror</option>
  <option value="Mystery" <?php echo $movie->genre == "Mystery" ? 'selected' : ''; ?>>Mystery</option>
  <option value="Romantic" <?php echo $movie->genre == "Romantic" ? 'selected' : ''; ?>>Romantic</option>
  <option value="Sci-fi" <?php echo $movie->genre == "Sci-fi" ? 'selected' : ''; ?>>Sci-fi</option>
  <option value="Thriller" <?php echo $movie->genre == "Thriller" ? 'selected' : ''; ?>>Thriller</option>
  <option value="War" <?php echo $movie->genre == "War" ? 'selected' : ''; ?>>War</option>
  <option value="Western" <?php echo $movie->genre == "Western" ? 'selected' : ''; ?>>Western</option>
  </select><br>

  <label for="info">Info:</label><br>
  <textarea name="info" id="info" rows="10" cols="70"><?php echo $movie->info; ?></textarea><br>

  <input type="submit" name="submit" value="Spara">
</form>
  <div>
    <div class="container jumbotron alert alert-danger">
      <?php if (!empty($errors)){
        echo "Kunde inte skapa film!<br>Du har inte valt;<br>";
        $error = implode(", ", $errors);
        echo $error;
      } ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
  