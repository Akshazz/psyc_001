<?php

include "connections/connection.php";
if (isset($_POST["submit"])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $answer1 = $_POST['answer1'];
  $answer2 = $_POST['answer2'];
  $answer3 = $_POST['answer3'];
  $answer4 = $_POST['answer4'];
  $answer5 = $_POST['answer5'];
  $answer6 = $_POST['answer6'];
  $answer7 = $_POST['answer7'];
  $answer8 = $_POST['answer8'];
  $answer9 = $_POST['answer9'];
  $answer10 = $_POST['answer10'];

  $sql = "INSERT INTO `questions`(`id`, `fname`,`lname`,`answer1`, `answer2`,`answer3`,`answer4`,`answer5`,`answer6`,`answer7`,`answer8`,`answer9`,`answer10`) VALUES (NULL,'$fname','$lname','$answer1','$answer2','$answer3','$answer4','$answer5','$answer6','$answer7','$answer8','$answer9','$answer10')";

 $result = mysqli_query($conn, $sql);

  if ($result) {
     header("Location: modal2.php?msg=Your Results!");
  } 
  else {
     echo "Failed to load!" . mysqli_error($conn);
  }
  }
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
            <script src="js/spinner.js" defer></script>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="start.php" class="w3-bar-item w3-button w3-padding-large w3-white" style="transition: 1.0s;">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/></svg>
    </a>

    <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About (optional)</a> -->
  </div>

   <!-- Navbar on small screens
   <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
   <a href="#" class="w3-bar-item w3-button w3-padding-large">About</a> -->
  </div>
</div> 

<!-- Header -->
<header class="w3-container w3-black w3-center" style="padding:100px 16px"><fieldset class="field"> <p class="tab1"> Home > Get Started > <b>Empathy (Emotional Recognation)</b> ></p></fieldset>
</header>


<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: lightgrey;">
<p style="font-size: 20px; margin-top: 20px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">EMPATHY - EMOTIONAL RECOGNATION (ER)</p>
  </nav>

  <div class= 'container'>
<div class="container_content">
<div class="container_content_inner">
<div class="title">
  <p class="none"> <b>Directions:</b> You have ten (10) questions to answer. Before you submit, please take a moment to carefully review your answers to ensure they are complete and accurate. </p>
</div>
<div class="par">
</div>


<div class="mb-2">
 <form action="" method="post">
  <br>
  <div class="input-group">
    <span class="input-group-text" style="opacity: 80%;"> <b>What is your name?</b> </span>
    <input type="text" name="fname" placeholder="Enter your First Name" aria-label="First name" class="form-control" required>
    <input type="text" name="lname" placeholder="Enter your Last Name" aria-label="Last name" class="form-control" required>
  </div>
  <br>

  <div class="question-slide">
    <label for="answer1" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #1:</b> Example question 1 here! </p>
    </label>
    <div>
    <img style="width: 200px; height: 200px" src="images/image1.png"/>
    </div>
    <br>
    <textarea class="form-control" name="answer1" id="answer1" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer2" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #2:</b> Example question 2 here!</p>
    </label>
    <div>
    <img style="width: 200px; height: 200px" src="images/image2.jpg"/>
    </div>
    <br>
    <textarea class="form-control" name="answer2" id="answer2" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer3" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #3:</b> Example question 3 here!</p>
    </label>
    <div>
    <img style="width: 200px; height: 200px" src="images/image3.jpg"/>
    </div>
    <br>
    <textarea class="form-control" name="answer3" id="answer3" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer4" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #4:</b> Example question 4 here!</p>
    </label>
    <div>
    <img style="width: 200px; height: 200px" src="images/image4.jpg"/>
    </div>
    <br>
    <textarea class="form-control" name="answer4" id="answer4" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer5" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #5:</b> Example question 5 here!</p>
    </label>
    <div>
    <img style="width: 200px; height: 200px" src="images/image5.jpg"/>
    </div>
    <br>
    <textarea class="form-control" name="answer5" id="answer5" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer6" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #6:</b> Example question 6 here!</p>
    </label>
    <div>
    <img style="width: 200px; height: 200px" src="images/image6.jpg"/>
    </div>
    <br>
    <textarea class="form-control" name="answer6" id="answer6" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer7" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #7:</b> Example question 7 here!</p>
    </label>
    <div>
    <img style="width: 200px; height: 200px" src="images/image7.jpg"/>
    </div>
    <br>
    <textarea class="form-control" name="answer7" id="answer7" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer8" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #8:</b> Example question 8 here!</p>
    </label>
    <div>
    <img style="width: 200px; height: 200px" src="images/image8.jpg"/>
    </div>
    <br>
    <textarea class="form-control" name="answer8" id="answer8" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer9" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #9:</b> Example question 9 here!</p>
    </label>
    <div>
    <img style="width: 200px; height: 200px" src="images/image9.png"/>
    </div>
    <br>
    <textarea class="form-control" name="answer9" id="answer9" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer10" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #10:</b> Example question 10 here!</p>
    </label>
    <div>
    <img style="width: 200px; height: 200px" src="images/image10.jpg"/>
    </div>
    <br>
    <textarea class="form-control" name="answer10" id="answer10" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <!--
  <div class="question-slide" style="display: none;">
    <label for="answer2" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #3:</b> Example question 3 here!</p>
    </label>
    <textarea class="form-control" id="answer2" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div> -->

  <!-- Repeat for the other questions -->
  
  <div id="navigation"><br>
    <button type="button" class="btn btn-secondary" id="prevBtn" onclick="showPrev()">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
    </svg>
    Back</button>
    <button type="button" class="btn btn-secondary" id="nextBtn" onclick="showNext()">&nbsp; Next
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z"/>
    </svg>
    </button>
    &nbsp;&nbsp;&nbsp;  <button type="button" class="btn btn-dark" id="submitBtn" onclick="checkText()"> Submit Now! </button>


</div>
</div>
</div>
</div>
</div>
</div>

    <div id="modal" class="modal">
    <div class="modal-content">
    <span class="close-button" onclick="closeModal()">&times;</span>
    <div id="loading" class="loading"><div class="spinner"></div> <hr>

    <h4 style="color: black; text-align: justify; padding: 3% 5%; font-size: 15px;" id="result"></h4>
    <hr>
    <button id="modal" type="submit" name="submit" class="btn btn-secondary" onclick="validateForm()"> Continue </button>
    
    </div>
    </div>   
    </div>
    </div>

    <script src="js/alert.js" defer></script>


</form>

</div>
<br>
<br>


  <!-- Header -->
<header class="w3-container w3-black w3-center" style="padding: 35px 16px">
</header>

<!-- Footer -->
<?php
  echo '<br>';
  include "include/footer.php";
  ?>


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

