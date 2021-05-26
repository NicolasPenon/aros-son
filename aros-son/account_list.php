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
    <link rel="stylesheet" href="css/accountlist.css">
    <title></title>
  </head>
  <body>
    <div class="kundeliste">
      Kundeliste
    </div>
    <?php print("$output");?>

  </body>
</html>
