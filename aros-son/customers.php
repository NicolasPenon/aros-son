<?php

include('header.php');
include('functions.php');

  $query = "SELECT name, cvr, segment FROM accounts";
  $results = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="css/customers.css">
  </head>
  <body>


    <div id="customers">
      <h1>Kunder</h1>
</div>

  <div id="checkboxes">
    <form>
      <fieldset>
        <input type="checkbox" name="group" value="Alle">
        <label for="Alle">Alle</label>
        <input type="checkbox" name="group" value="Enterprise">
        <label for="Alle">Enterprise</label>
        <input type="checkbox" name="group" value="Large">
        <label for="Alle">Large</label>
        <br>
        <input type="checkbox" name="group" value="Medium">
        <label for="Alle">Medium</label>
        <input type="checkbox" name="group" value="Small">
        <label for="Alle">Small</label>
      </fieldset>
    </form>
  </div>
  <div class="titles">
    <a class="name">Virksomhedsnavn </a>
    <a class="cvr">CVR </a>
    <a class="segment">Segment </a>
  </div>
  <br>
<?php
  if($results) {
    while($row=mysqli_fetch_assoc($results)) {
      ?> <a href="account.php"> <div id = "name_div"> <?php echo $row['name']; ?></div> </a>
         <a href="account.php"> <div id ="cvr_div"> <?php echo $row['cvr']; ?></div> </a>
         <a href="account.php"> <div id ="segment_div"> <?php echo $row['segment'] . '<br>'; ?></div> </a> <?php
    }
  }
?>

  </body>
</html>
