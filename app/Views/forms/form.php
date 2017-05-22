<?php get_header(); ?>

<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Lägg till skådespelare</title>
</head>
<body>

<form method="POST">
  <h1>Lägg till skådespelare</h1><br>
  <label for="f_name">Förnamn:</label>
  <input type="text" name="f_name" id="f_name"><br>
  <label for="e_name">Efternamn:</label>
  <input type="text" name="e_name" id="e_name"><br>
  <label for="birthdate">Födelsedag:</label>
  <input type="date" name="birthdate" id="birthdate"><br>
  <label for="url">Url till bild:</label>
  <input type="url" name="url" id="url"><br>
  <label for="info">Biografi:</label><br>
  <textarea name="info" id="info" rows="17" cols="70"></textarea><br>
  <input type="submit" value="Spara">
</form>

</body>
</html>
<pre>

<?php get_footer(); ?>
