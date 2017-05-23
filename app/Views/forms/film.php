<?php get_header(); ?>
     
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Lägg till film</title>
</head>
<body>

<form method="POST">
  <h1>Lägg till film</h1><br>
  <label for="titel">Titel:</label>
  <input type="text" name="titel" id="titel"><br>

  <label for="producer">Producer:</label>
  <select name="producer" id="producer">
    <option value="0">--   Välj  --</option>
    <?php foreach ($producers as $producer) : ?>
      <option id="<?php echo $producer->id; ?>"><?php echo $producer->name(); ?></option>
    <?php endforeach; ?>
  </select>

  <label for="writer">Writer:</label>
  <select name="writer" id="writer">
    <option value="0">--   Välj  --</option>
    <?php foreach ($writers as $writer) : ?>
      <option id="<?php echo $writer->id; ?>"><?php echo $writer->name(); ?></option>
    <?php endforeach; ?>
  </select>

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

</body>
</html>
<pre>

<?php get_footer(); ?>
  