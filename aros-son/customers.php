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

      $output .= '<a href="account.php>"<div class="name_div"> '.$name.'</div><div class="cvr_div"> '.$cvr.'</div><div class="segment_div">'.$segment.'</div></a>';

    }
  }
}
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


    <div id="kunder">
      <h1>Kunder</h1>
    </div>

    <div id="checkboxes">
      <form method="post" action="/test/">
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
  </div>

<?php print("$output");?>

<div id="customer1">
</div>

<div id="customer2">
</div>

<div id="customer3">
</div>

<div id="customer4">
</div>

<div id="customer5">
</div>

<div id="customer6">
</div>

<div id="customer7">
</div>

<div id="customer8">
</div>

<div id="customer9">
</div>

<div id="customer10">
</div>

<div id="customer11">
</div>

<div id="customer12">
</div>

<div id="customer13">
</div>

<div id="customer14">
</div>

<div id="customer15">
</div>

<div id="customer16">
</div>

  </body>
</html>
