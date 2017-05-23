<?php get_header(); ?>

<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Lägg till skådespelare</title>
</head>
<body>

<form method="POST">
  <h1>Lägg till skådespelare</h1><br>
  <label for="f_namn">Förnamn:</label>
  <input type="text" name="f_namn" id="f_namn"><br>
  <label for="e_namn">Efternamn:</label>
  <input type="text" name="e_namn" id="e_namn"><br>
  <label for="birthdate">Födelsedag:</label>
  <input type="date" name="birthdate" id="birthdate"><br>
  <label for="url">Url till bild:</label>
  <input type="url" name="url" id="url"><br>

  <label for="role">Välj Roller:</label><ul>
  <?php foreach ($roles as $role) :?>
    <input type="checkbox" name="role[]" value="<?php echo $role->id ?>"> <?php echo $role->roll ?><br>
  <?php endforeach; ?></ul><br>


  <label for="info">Biografi:</label><br>
  <textarea name="info" id="info" rows="10" cols="70"></textarea><br>
  <input type="submit" value="Spara">
</form>

</body>
</html>
<pre>

<?php get_footer(); ?>
