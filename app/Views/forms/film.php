<?php get_header("Add Movie"); ?>

<form method="POST">
  <h1>Add movie</h1><br>
  <label for="titel">Titel:</label>
  <input type="text" name="titel" id="titel"><br>

<label for="star">Stars:</label>
<input type="text" id="starInput" name="autocomplete" class="starInput" placeholder="Actor">
  <button class="btn addStar">Lägg till</button><br>
<ul class="starList">
</ul>


  <label for="producer">Producer:</label>
  <select name="producer" id="producer">
    <option value="0">--   Välj  --</option>
    <?php foreach ($producers as $producer) : ?>
      <option value="<?php echo $producer->id; ?>"><?php echo $producer->name(); ?></option>
    <?php endforeach; ?>
  </select><br>

  <label for="writer">Writer:</label>
  <select name="writer" id="writer">
    <option value="0">--   Välj  --</option>
    <?php foreach ($writers as $writer) : ?>
      <option value="<?php echo $writer->id; ?>"><?php echo $writer->name(); ?></option>
    <?php endforeach; ?>
  </select><br>

  <label for="rate">Rating:</label>
  <select name="rates" id="rate">
  <option value="0">--  Välj  --</option>
  <option value="1">1 Stjärna</option>
  <option value="2">2 Stjärnor</option>
  <option value="3">3 Stjärnor</option>
  <option value="4">4 Stjärnor</option>
  <option value="5">5 Stjärnor</option>
  </select><br>

  <label for="trailer">Trailer:</label>
  <input type="text" name="trailer" id="trailer"><br>
  <label for="release_year">Släppt år:</label>
  <input type="date" name="release_year" id="release_year"><br>
  <label for="url">Url till bild:</label>
  <input type="text" name="bild" id="url"><br>

  <label for="genre">Genre:</label>
  <select name="genres" id="genre">
  <option value="">--  Välj  --</option>
  <option value="Action">Action</option>
  <option value="Adventure">Adventure</option>
  <option value="Comedy">Comedy</option>
  <option value="Crime">Crime</option>
  <option value="Drama">Drama</option>
  <option value="Fantasy">Fantasy</option>
  <option value="Horror">Horror</option>
  <option value="Mystery">Mystery</option>
  <option value="Romantic">Romantic</option>
  <option value="Sci-fi">Sci-fi</option>
  <option value="Thriller">Thriller</option>
  <option value="War">War</option>
  <option value="Western">Western</option>
  </select><br>

  <label for="info">Info:</label><br>
  <textarea name="info" id="info" rows="10" cols="70"></textarea><br>

  <input type="submit" name="submit" value="Spara">
</form>
  <div>
      <?php if (!empty($errors)){
        echo '<div class="container jumbotron alert alert-danger">';
        echo "Kunde inte skapa film!<br>Du har inte valt;<br>";
        $error = implode(", ", $errors);
        echo $error;
        echo '</div>';
      } ?>
  </div>
</div>

<?php get_footer(); ?>
  