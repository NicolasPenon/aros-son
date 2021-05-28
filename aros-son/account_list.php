<?php

include('header.php');
include('functions.php');
$output='';

if(isset($_POST['search'])) {
  $searchq = $_POST['search'];

  $query = mysqli_query($conn,"SELECT * FROM accounts WHERE name LIKE '%$searchq%'");
  $count = mysqli_num_rows($query);
  if($count==0) {
    $output='';
  }else{
    while($row=mysqli_fetch_array($query)) {
      $name=$row['name'];
      $cvr=$row['cvr'];
      $segment=$row['segment'];

      $output .= '<a href="account.php"><div class="name_div"> '.$name.'</div><div class="cvr_div"> '.$cvr.'</div><div class="segment_div">'.$segment.'</div></a>';

    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/accountlist.css">
    <title>Kunder</title>
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
    <?php print("$output");?>

  </body>
</html>
