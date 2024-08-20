<?php


?>


<!DOCTYPE html>
<html>
    <body>
        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <title> PSYC WEB </title>
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    
    <a href="start.php" class="w3-bar-item w3-button w3-padding-large w3-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/></svg>
    </a>

    <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About (optional)</a> -->
  </div>

   <!-- Navbar on small screens -->
   <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <!-- <a href="#" class="w3-bar-item w3-button w3-padding-large">About</a> -->
  </div>
</div> 

<!-- Header -->
<header class="w3-container w3-black w3-center" style="padding:120px 16px">
</header>

<div class= 'container'>
<div class="container_content">
<div class="container_content_inner">
<div class="title">
    <br>
  <h1 class="none">EXAMPLE: SCENARIO BASED LEARNING (SBL)</h1>
</div>
<div class="par">
</div>

<form action="/action_page.php">
    <div class="mb-3">
    <label for="answer1" class="form-label"><p class="slideup">One of your classmates, Alex, has been noticeably quiet and has missed several group activities lately. You’re concerned because Alex was usually very involved. Today, you see Alex sitting alone in the library, looking distressed.
    <br><br><b>Prompt:</b> Write a response for how you would approach Alex to offer support and show empathy. Consider starting the conversation, listening to their concerns, and offering support.</p></label>
    <textarea  placeholder="Enter your answer here!" class="form-control" id="answer1" aria-describedby="emailHelp" rows="4" cols="50"></textarea>
    <div id="emailHelp" class="form-text">Please answer the questions above.</div>
    </div>
     <br>
    <input class="btn btn-secondary" type="submit" value="Submit">
    </form>

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
<header class="w3-container w3-black w3-center" style="padding:120px 16px">
</header>

<!-- Footer -->
 <center>
<div class="container copyright text-center mt-4">
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

