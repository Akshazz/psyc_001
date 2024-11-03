<?php

include "../connections/connection.php";
?>


<!DOCTYPE html>
<html>
    <body>
        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <title> PSYC WEB </title>
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="admin_dashboard.php" class="w3-bar-item w3-button w3-padding-large w3-white" style="transition: 1.0s;">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/></svg>
    </a>

    <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About (optional)</a> -->
  </div>

   <!-- Navbar on small screens -->
   <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <!-- <a href="#" class="w3-bar-item w3-button w3-padding-large">About</a> -->
  </div>
</div> 

<!-- Header -->
<header class="w3-container w3-black w3-center" style="padding:100px 16px"><fieldset class="field"> <p class="tab1"> Home > <b>Admin Panel</b> > </p></fieldset>
</header>


<nav class="fs-3 mb-5" style="background-color: lightgrey; padding: 10px 10px;"> 
  <a style="text-align: left; color: red;" class="btn btn-dark" href="admin_dashboard.php"> SBL </a>
  <a style="text-align: left; color: red;" class="btn btn-dark" href="qa_admin_dashboard.php"> QA </a>
  <a style="text-align: left; color: red;" class="btn btn-dark" href="er_admin_dashboard.php"> ER </a>
  <b style="font-size: 20px;"> | ADMIN - SBL Databases</b>
  </nav>

  <div class="container">

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col"><p style="font-size: 15px; padding: 12px 45px;">Full Name</p></th>
          <th scope="col">
          <p style="font-size: 10px; text-align: justify;"> <b>Questions #1:</b></p></th>
          <th scope="col">
          <p style="font-size: 10px; text-align: justify;"> <b>Questions #2:</b></th>
          <th scope="col">
          <p style="font-size: 10px; text-align: justify;"> <b>Questions #3:</b></th>
          <th scope="col">
          <p style="font-size: 10px; text-align: justify;"> <b>Questions #4:</b></th>
          <th scope="col">
          <p style="font-size: 10px; text-align: justify;"> <b>Questions #5:</b></th>
          <th scope="col">
          <p style="font-size: 15px; padding: 15px 10px;">Action</p></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `questions`";
        $result = mysqli_query($conn, $sql);
        $count=$result->num_rows;
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><b><p style="font-size: 10px; padding: 50px 50px;"> <?php echo $row["fname"] ?> <?php echo $row["lname"] ?></b></p></td>
            <td><?php echo $row["answer1"] ?></td>
            <td><?php echo $row["answer2"] ?></td>
            <td><?php echo $row["answer3"] ?></td>
            <td><?php echo $row["answer4"] ?></td>
            <td><?php echo $row["answer5"] ?></td>
            <td>
          
            <!-- Working buttons!
            <a href="edit.php?ref=<?php echo $row["id"] ?>" class="btn btn-dark"></a>
            <a href="delete.php?ref=<?php echo $row["id"] ?>" class="btn btn-dark"></a>
            -->

              <a href="#" class="btn btn-dark"> View </a>
              <a href="#" class="btn btn-dark"> Delete </a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

</div>
<br>
<br>
</div>
</div>
  </div>
<br>
<br>
</div>
</div>
  </div>

  <!-- Header -->
<header class="w3-container w3-black w3-center" style="padding:200px 16px">
</header>

<!-- Footer -->
<center>
  <br>
<div>
      <p>© <span>Copyright</span> <strong class="px-1 sitename"> Aron N. </strong> <span>All Rights Reserved 2024</span></p>
    </div>
</center>


<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
        
</html>
</body>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

