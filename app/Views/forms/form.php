<?php get_header("Add Movie Staff"); ?>

<form method="POST">
  <h1>Add movie staff</h1><br>
  <label for="f_namn">Förnamn:</label>
  <input type="text" name="f_namn" id="f_namn"><br>
  <label for="e_namn">Efternamn:</label>
  <input type="text" name="e_namn" id="e_namn"><br>
  <label for="birthdate">Födelsedag:</label>
  <input type="date" name="birthdate" id="birthdate"><br>
  <label for="url">Url till bild:</label>
  <input type="url" name="bild" id="url"><br>

  <label for="role">Välj Roller:</label><ul>
  <?php foreach ($roles as $role) :?>
    <input type="checkbox" name="role[]" value="<?php echo $role->id ?>"> <?php echo $role->roll ?><br>
  <?php endforeach; ?></ul><br>


  <label for="info">Biografi:</label><br>
  <textarea name="info" id="info" rows="10" cols="70"></textarea><br>
  <input type="submit" name="submit" value="Spara">
</form>
<div>
      <?php if (!empty($errors)){
        echo '<div class="container jumbotron alert alert-danger">';
        echo "Kunde inte skapa skådespelare!<br>Du har inte valt;<br>";
        $error = implode(", ", $errors);
        echo $error;
        echo '</div>';
      } ?>
  </div>

<?php get_footer(); ?>
