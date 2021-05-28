<?php

include('header.php');
include('functions.php');

  $query = "SELECT name, cvr, segment, phone, address, web, branch FROM accounts WHERE id=16";
  $results = mysqli_query($conn, $query);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/account.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kunde</title>
  </head>
  <body>
    <?php
    if($results) {
      while($row=mysqli_fetch_assoc($results)) {
        ?> <div id = "name_div"><h1> <?php echo $row['name'] . '<br>'; ?></h1></div> <?php
        ?> <div id = "details_div"><h3>Detaljer</h3></div> <?php
        ?> <div id = "activities_div"><h3>Aktiviteter</h3></div> <?php
        ?> <div id = "block_div"> </div> <?php
        ?> <div id = "cvr_div"><h3> <?php echo 'CVR: ' . '<br>' . $row['cvr'] . '<br>'; ?></h3></div> <?php
        ?> <div id = "segment_div"><h3> <?php echo 'Segment: ' . '<br>' . $row['segment'] . '<br>'; ?></h3></div> <?php
        ?> <div id = "phone_div"><h3> <?php echo 'Tlf: ' . '<br>' . $row['phone'] . '<br>'; ?></h3></div> <?php
        ?> <div id = "address_div"><h3> <?php echo 'Adresse: ' . '<br>' . $row['address'] . '<br>'; ?></h3></div> <?php
        ?> <div id = "web_div"><h3> <?php echo 'Hjemmeside: ' . '<br>' . $row['web'] . '<br>'; ?></h3></div> <?php
        ?> <div id = "branch_div"><h3> <?php echo 'Branche: ' . '<br>' . $row['branch'] . '<br>'; ?></h3></div> <?php
        }
      }
    ?>

    <div id = contacts_div>
      <h3>Kontaktpersoner</h3>
    </div>

    <div class="contacts">
      <a class = "name">Lars Tyndskid</a>
      <a class = "number">58570000</a>
      <a class = "mail" href="mailto:Tynd@tarmair.dk">Tynd@tarmair.dk</a><br>
      <a class = "name">Janus Blindstrøm</a>
      <a class = "number">58570001</a>
      <a class = "mail" href="mailto:Blind@tarmair.dk">Blind@tarmair.dk</a><br>
      <a class = "name">Britta Flad</a>
      <a class = "number">58570002</a>
      <a class = "mail" href="mailto:Flad@tarmair.dk">Flad@tarmair.dk</a><br>
      <a class = "name">Gitte Rask</a>
      <a class = "number">58570003</a>
      <a class = "mail" href="mailto:Rask@tarmair.dk">Rask@tarmair.dk</a><br>
    </div>

  </body>
</html>
