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
<header class="w3-container w3-black w3-center" style="padding:100px 16px"><fieldset class="field"> <p class="tab1"> Home > Get Started > <b>Scenario Based Learning</b> > </p></fieldset>
</header>


<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: lightgrey;">
    Test1 - Results and Feedback
  </nav>

  <div id="modal" class="modal">
    <div class="modal-content">
    <span class="close-button" onclick="closeModal()">&times;</span>
    <div id="loading" class="loading"><div class="spinner"></div> <hr>
    <h4 style="color: black; text-align: justify; padding: 3% 5%; font-size: 15px;" id="result"></h4>
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
  <input type="text" placeholder="Enter your First Name" aria-label="First name" class="form-control" required>
  <input type="text" placeholder="Enter your Last Name" aria-label="Last name" class="form-control" required>
  </div>
  <br>
  
    <label for="answer1" class="form-label"><p class="slideup"> <b style="color: red;">Questions #1:</b> Example question 1 here! </p>
    </label>
    <textarea class="form-control" id="answer1" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the questions above.</div>
    <br>

    <label for="answer2" class="form-label"><p class="slideup"> <b style="color: red;">Questions #2:</b> Example question 2 here!</p>
    </label>
    <textarea class="form-control" id="answer2" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the questions above.</div>
    <br>

    <label for="answer3" class="form-label"><p class="slideup"> <b style="color: red;">Questions #3:</b> Example question 3 here!</p>
    </label>
    <textarea class="form-control" id="answer3" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the questions above.</div>
    <br>

    <label for="answer4" class="form-label"><p class="slideup"> <b style="color: red;">Questions #4:</b> Example question 4 here!</p>
    </label>
    <textarea class="form-control" id="answer4" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the questions above.</div>
    <br>

    <label for="answer5" class="form-label"><p class="slideup"> <b style="color: red;">Questions #5:</b> Example question 5 here!</p>
    </label>
    <textarea class="form-control" id="answer5" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the questions above.</div>
    <br>

    <label for="answer6" class="form-label"><p class="slideup"> <b style="color: red;">Questions #6:</b> Example question 6 here!</p>
    </label>
    <textarea class="form-control" id="answer6" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the questions above.</div>
    <br>

    <label for="answer7" class="form-label"><p class="slideup"> <b style="color: red;">Questions #7:</b> Example question 7 here!</p>
    </label>
    <textarea class="form-control" id="answer7" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the questions above.</div>
    <br>

    <label for="answer8" class="form-label"><p class="slideup"> <b style="color: red;">Questions #8:</b> Example question 8 here!</p>
    </label>
    <textarea class="form-control" id="answer8" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the questions above.</div>
    <br>

    <label for="answer9" class="form-label"><p class="slideup"> <b style="color: red;">Questions #9:</b> Example question 9 here!</p>
    </label>
    <textarea class="form-control" id="answer9" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the questions above.</div>
    <br>

    <label for="answer10" class="form-label"><p class="slideup"> <b style="color: red;">Questions #10:</b> Example question 10 here!</p>
    </label>
    <textarea class="form-control" id="answer10" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
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

