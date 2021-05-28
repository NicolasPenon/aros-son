<?php
  include('header.php');
  include('functions.php');

  $query = "SELECT name, surname, position FROM employees WHERE id=34";
  $employee = mysqli_query($conn, $query);
  $query2 = "SELECT name, surname FROM employees WHERE id=16";
  $employee2 = mysqli_query($conn, $query2);
  $row2 = mysqli_fetch_assoc($employee2);

?>
<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Min profil</title>
     <link rel="stylesheet" href="css/emp.css">
   </head>
   <body>
<?php
 if($employee) {
   while($row=mysqli_fetch_assoc($employee)) { ?>
<div id="box1">
 <img src="img/profile.png" class="pb"
 <img align="left">
 <h1> <?php echo $row['name']; echo $row['surname']; ?></h1>
 <p> <?php echo $row['position']; ?>
 <br>
 Tlf 20202020
  </p>
</div>

<div id="box2">
  <center>
    Aktiviteter
  </center>

</div>
    <div id="box3">
      <a href="emp_page.php"><?php echo $row['name']; echo $row['surname']; ?> </a> har genforhandlet 2-årig kontrakt med @Kunde700. </p>
    </div>

    <div id="box4">
      <a class="a_yellow" href="emp_page.php"><?php echo $row['name']; echo $row['surname']; ?> </a>: <br>
      Holder 5 års jubilæum hos Aros & Søn!
    </div>

    <div id="box5">
      <a href="emp_page.php"><?php echo $row['name']; echo $row['surname']; ?> </a>: <br>
      Hej <?php echo $row2['name']; echo $row2['surname']; ?>, til info så er @Kunde3 utilfreds med nuværende løsning.
    </div>

    <div id="box6">
      @Gruppe3 <br>
      En begivenhed er blevet tilføjet til d.30/6-21 (@Sommerfest)
    </div>

    <div id="box7">
      @Medarbejder2 <br>
      Hej <a href="emp_page.php"><?php echo $row['name']; echo $row['surname']; ?> </a>, @Bo fra @Kunde7 savner et opkald fra dig.
    </div>

      <div id="box8">
        <a class="a_yellow" href="emp_page.php"><?php echo $row['name']; echo $row['surname']; ?> </a>, tilføjede @Karsten som primær kontaktperson til @Kunde38.
      </div>

        <div id="box9">
          Planlagte møder for <a href="emp_page.php"><?php echo $row['name']; echo $row['surname']; ?> </a>:  <br>
          @Kunde503 - 2/8-2021 - Kl 12:00 <br>
          @Kunde708 - 15/8-2021 - Kl 10:00<br>
          @Kunde2399 - 30/8-2021 - Kl 14:00
    </div>
<?php
  }
} ?>
   </body>
 </html>
