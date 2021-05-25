<?php


include('functions.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<link rel="stylesheet" href="css/frontpage.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forside</title>
  </head>

  <body>
    <?php
    include('header.php');
    ?>

    <div id="forside_div">
      <h1>Forside</h1>
    </div>

    <div id="sager_div">
      <h2>Igangværende sager</h2>
    </div>

    <div id="scrollmenu">
      <div id="opgaver_div">
        <h3>Opgave 1</h3>
        <h3>Kunde 1</h3>
        <p>Info om denne <br>opgave</p>
      </div>

      <div id="opgaver_div">
        <h3>Opgave 2</h3>
        <h3>Kunde 2</h3>
        <p>Info om denne <br>opgave</p>
      </div>

      <div id="opgaver_div">
        <h3>Opgave 3</h3>
        <h3>Kunde 3</h3>
        <p>Info om denne <br>opgave</p>
      </div>

      <div id="opgaver_div">
        <h3>Opgave 4</h3>
        <h3>Kunde 4</h3>
        <p>Info om denne <br>opgave</p>
      </div>

      <style>
      ::-webkit-scrollbar {
        width: 10px;
      }
      ::-webkit-scrollbar-track {
        background: yellow;
      }
      ::-webkit-scrollbar-thumb {
        background: yellow;
      }
      </style>



    </div>






    </div>
  </body>
</html>
