<?php

include('header.php');
include('functions.php');

mysqli_select_db("aros-son");

$search = mysqli_real_escape_string($_GET['search']);

$results = mysqli_query("SELECT name FROM accounts WHERE name LIKE %$search%");
  while ($row = mysqli_fetch_assoc($results)) {
    echo $results;
  }
?>
