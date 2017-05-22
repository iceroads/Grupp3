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
  <input type="number" name="producer" id="producer"><br>
  <label for="writer">Writer:</label>
  <input type="number" name="writer" id="writer"><br>
  <label for="rate">Rating:</label>
  <input type="number" name="rate" id="rate"><br>
  <label for="trailer">Trailer:</label>
  <input type="text" name="trailer" id="trailer"><br>
  <label for="release_year">Släppt år:</label>
  <input type="date" name="release_year" id="release_year"><br>
  <label for="url">Url till bild:</label>
  <input type="text" name="bild" id="url"><br>
  <label for="genre">Genre:</label>
  <input type="text" name="genre" id="genre"><br>
  <label for="info">Info:</label><br>
  <textarea name="info" id="info" rows="17" cols="70"></textarea><br>

  <input type="submit" value="Spara">
</form>

</body>
</html>
<pre>

<?php get_footer(); ?>
  