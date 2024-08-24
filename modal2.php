<?php

//include "connections/connection.php";
//if (isset($_POST["submit"])) {
//  $fname = $_POST['fname'];
//  $lname = $_POST['lname'];
//  $answer1 = $_POST['answer1'];
//  $answer2 = $_POST['answer2'];

//  $sql = "INSERT INTO `questions`(`id`, `fname`,`lname`,`answer1`, `answer2`) VALUES (NULL,'$fname','$lname','$answer1','$answer2')";

 // $result = mysqli_query($conn, $sql);

 // if ($result) {
 //    header("Location: modal2.php?msg=Your Results!");
 // } 
 // else {
 //    echo "Failed to load!" . mysqli_error($conn);
 // }
//}
?>

<!DOCTYPE html>
<html>
    <body>
        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <title> PSYC WEB </title>
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/style2.css">
            <script src="js/script2.js" defer></script>
            <script src="js/script.js" defer></script>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-white" style="transition: 1.0s;">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/></svg>
    </a>

    <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About (optional)</a> -->
  </div>

   <!-- Navbar on small screens
   <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
   <a href="#" class="w3-bar-item w3-button w3-padding-large">About</a> -->
  </div>
</div> 

<!-- Header -->
<header class="w3-container w3-black w3-center" style="padding:100px 16px"><fieldset class="field"> <p class="tab1"> Home > <b>Results & Feedback</b> > </p></fieldset>
</header>


<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: lightgrey;">
    Results and Feedback
  </nav>

  <div id="modal" class="modal">
    <div class="modal-content">
    <span class="close-button" onclick="closeModal()">&times;</span>
    <div id="loading" class="loading"><div class="spinner"></div> <hr>
    <h4 style="color: red; text-align: justify; padding: 3% 5%; font-size: 15px;" id="result"></h4>
    <hr>
    <button class="btn btn-secondary" onclick="checkText()"> Continue </button>
    </div>
</div>

        
    </div>
</div>


<script>
function showModalWithLoading() {
    // Show the modal and loading spinner
    const modal = document.getElementById("modal");
    modal.classList.add("show");
    document.getElementById("loading").style.display = "flex";
    document.getElementById("result").style.display = "none";
    
    // Simulate a delay (e.g., data processing) and then show the result
    setTimeout(() => {
        document.getElementById("loading").style.display = "none";
        document.getElementById("result").style.display = "block";
        document.getElementById("result").innerText = "Your result goes here!";
    }, 2000); // Adjust the delay as needed
}

function closeModal() {
    const modal = document.getElementById("modal");
    modal.classList.remove("show");
    modal.classList.add("hide");
    
    // Hide the modal after animation
    setTimeout(() => {
        modal.style.display = "none";
        modal.classList.remove("hide");
    }, 300); // Match the transition duration in CSS
}
</script>


  <div class= 'container'>
<div class="container_content">
<div class="container_content_inner">
<div class="title">
    <br>
  <h1 class="none">EXAMPLE: SCENARIO BASED LEARNING (SBL)</h1>
</div>
<div class="par">


</div>



<div class="mb-3">

<!-- <form action="" method="post"> -->


<form id="textForm">
<br>
  <div class="input-group">
  <span class="input-group-text" style="opacity: 80%;"> <b>Optional :</b> </span>
  <input type="text" placeholder="Enter your First Name" aria-label="First name" class="form-control" >
  <input type="text" placeholder="Enter your Last Name" aria-label="Last name" class="form-control" >
  </div>
  <br>
  
    <label for="answer1" class="form-label"><p class="slideup"> <b>Questions #1:</b> One of your classmates, Alex, has been noticeably quiet and has missed several group activities lately. You’re concerned because Alex was usually very involved. Today, you see Alex sitting alone in the library, looking distressed.
    <br><br><b>Prompt:</b> Write a response for how you would approach Alex to offer support and show empathy. Consider starting the conversation, listening to their concerns, and offering support.</p></label>

    <textarea class="form-control" id="answer1" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the questions above.</div>
    </div>

    <label for="answer2" class="form-label"><p class="slideup"> <b>Questions #2:</b> One of your classmates, Alex, has been noticeably quiet and has missed several group activities lately. You’re concerned because Alex was usually very involved. Today, you see Alex sitting alone in the library, looking distressed.
    <br><br><b>Prompt:</b> Write a response for how you would approach Alex to offer support and show empathy. Consider starting the conversation, listening to their concerns, and offering support.</p></label>
    <textarea class="form-control" id="answer2" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the questions above.</div>

    <br>
    <!-- <button class="btn btn-secondary" onclick="checkText()" type="submit" name="submit"> Submit </button> -->
    <button type="button" class="btn btn-secondary" onclick="checkText()"> Submit </button>

    </div>
     <br>

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
//function myFunction() {
//  var x = document.getElementById("navDemo");
//  if (x.className.indexOf("w3-show") == -1) {
//    x.className += " w3-show";
//  } else { 
//    x.className = x.className.replace(" w3-show", "");
//  }
//}
</script>
        
</html>
</body>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

