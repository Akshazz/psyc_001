<?php
include "ip_check.php";
include "connections/connection.php";
if (isset($_POST["submit"])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $answer1 = $_POST['answer1'];
  $answer2 = $_POST['answer2'];
  $answer3 = $_POST['answer3'];
  $answer4 = $_POST['answer4'];
  $answer5 = $_POST['answer5'];

  $sql = "INSERT INTO `questions`(`id`, `fname`,`lname`,`answer1`, `answer2`,`answer3`,`answer4`,`answer5`) VALUES (NULL,'$fname','$lname','$answer1','$answer2','$answer3','$answer4','$answer5')";

 $result = mysqli_query($conn, $sql);

  if ($result) {
     header("Location: ?msg=Hello there! Your form has been successfully submitted. Thank you, and have a wonderful day!");
  } 
  else {
     echo "Failed to load!" . mysqli_error($conn);
  }
  }

?>

<?php
include "include/header.php";
?>

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
<header class="w3-container w3-black w3-center" style="padding:100px 16px"><fieldset class="field"> <p class="tab1"> Home > Get Started > <b>Social Skills (Scenario Based Learning)</b> > </p></fieldset>
</header>


<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: lightgrey;">
  <p style="font-size: 20px; margin-top: 20px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">SOCIAL SKILLS - SCENARIO BASED LEARNING (SBL)</p>
  </nav>

  <div class= 'container'>
<div class="container_content">
<div class="container_content_inner">
<div class="title">


<?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><p style="max-width: 50%; text-align: center;">
    <div id="success"></div></p>
      ' . $msg . '
    </div>';
    }
    ?>
<br>

  <p class="none"> <b>Directions:</b> You have five (5) questions to answer. Before you submit, please take a moment to carefully review your answers to ensure they are complete and accurate. </p>
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
      <p class="no-class"> <b style="color: red;">Question #1:</b> Imagine you're the new kid at school and you don't know anyone. How would you feel? What would you want other kids to do to make you feel welcome? </p>
    </label>
    <textarea class="form-control" name="answer1" id="answer1" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer2" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #2:</b> In the story, why did the character react that way to the loss of their pet?  How would you feel if you experienced a similar loss? </p>
    </label>
    <textarea class="form-control" name="answer2" id="answer2" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer3" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #3:</b> After volunteering at the homeless shelter, what did you learn about the challenges faced by people experiencing homelessness? How did this experience change your perspective, and what actions could you take to support them in the future? </p>
    </label>
    <textarea class="form-control" name="answer3" id="answer3" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer4" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #4:</b> The documentary showed the impact of climate change on indigenous communities. How does understanding their experiences inform your understanding of climate change as a global issue? What are the ethical implications of inaction in the face of such suffering? </p>
    </label>
    <textarea class="form-control" name="answer4" id="answer4" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>

  <div class="question-slide" style="display: none;">
    <label for="answer5" class="form-label">
      <p class="no-class"> <b style="color: red;">Question #5:</b> During the conflict simulation, you were assigned to mediate a disagreement between two employees.  How did you approach the situation, considering the emotional needs of both individuals? What strategies did you use to build understanding and find a solution? </p>
    </label>
    <textarea class="form-control" name="answer5" id="answer5" rows="4" cols="50" placeholder="Enter your answer here!" required></textarea>
    <div class="form-text">Please answer the question above.</div>
  </div>
  
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

  
    <img style="display: block; margin-left: auto; margin-right: auto; width: 40%;" src="logo/logo.png" height="30%">&nbsp;&nbsp;&nbsp;
    <div class="dot-container">
    
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <br>
    <div class="container">
        <h4 style="font-size: 15px; text-align: justify;" id="result"></h4>
    </div><hr>

    <!-- animated type text js -->
    <script>
        const text = "This is the text to display.";
        const speed = 100;  // typing speed in milliseconds
        let index = 0;

        function typeWriter() {
            if (index < text.length) {
                document.getElementById("typing").textContent += text.charAt(index);
                index++;
                setTimeout(typeWriter, speed);
            }
        }

        window.onload = typeWriter;
    </script>

    <input type="hidden" name="submitted" value="1">
    <button type="submit" value="submit" name="submit" class="btn btn-secondary" id="submitButton" onclick="validateForm()">Submit</button>
    
    
    
    <!-- <button id="modal" type="submit" value="submit" name="submit" class="btn btn-secondary" onclick="validateForm()"
> Continue </button> -->
    
    </div>
    </div>   
    </div>
    </div>

    <style>
.modal-content {
    background-color: #fefefe;
    margin: 5% auto; /* Center modal vertically */
    padding: 20px;
    border: 1px solid #888;
    width: 10%; /* Adjust width to fit the screen */
    max-height: 80%; /* Max height of the modal */
    overflow-y: auto; /* Enable vertical scroll if content exceeds */
    word-wrap: break-word; /* Allow long words to break and wrap */
}

#result {
    white-space: normal; /* Allow text to wrap */
    overflow-wrap: break-word; /* Ensures words break if they are too long */
}

      </style>

   
    <!-- <script src="js/restriction.js" defer></script> -->
    <script src="js/alert.js" defer></script>


</form>

</div>
<br>
<br>


  <!-- Header -->
<header class="w3-container w3-black w3-center" style="padding:35px 16px">
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

