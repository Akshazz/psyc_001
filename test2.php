<?php
session_start();

// File to store IP and last submission timestamp
$file = 'submission_log.txt';

// Get the user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Check if the log file exists
if (file_exists($file)) {
    // Read the file content
    $log = file_get_contents($file);
    $log_data = json_decode($log, true);
} else {
    $log_data = [];
}

// Check if the IP address is in the log and if the time since the last submission is less than 10 seconds
if (isset($log_data[$user_ip]) && (time() - $log_data[$user_ip] < 10)) {
    if (isset($_POST['submitted'])) {
        // Restriction applied only if form was submitted
        echo 'You must wait 10 seconds before submitting again.';
        exit;
    }
}

// Update the log with the current timestamp if the form was submitted
if (isset($_POST['submitted'])) {
    $log_data[$user_ip] = time();
    file_put_contents($file, json_encode($log_data));
}

// Proceed with form processing (e.g., saving data to database)
if (isset($_POST['submitted'])) {
    echo 'Form submitted successfully!';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Questionnaire</title>
    <style>
        .slide {
            display: none;
        }
        .active {
            display: block;
        }
        .navigation-buttons {
            margin-top: 20px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var currentSlide = 0;
            var slides = document.querySelectorAll('.slide');
            var form = document.querySelector('form');
            var submitButton = document.getElementById('submitButton');

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle('active', i === index);
                });
            }

            function nextSlide() {
                if (currentSlide < slides.length - 1) {
                    currentSlide++;
                    showSlide(currentSlide);
                }
            }

            function prevSlide() {
                if (currentSlide > 0) {
                    currentSlide--;
                    showSlide(currentSlide);
                }
            }

            document.getElementById('nextButton').addEventListener('click', nextSlide);
            document.getElementById('prevButton').addEventListener('click', prevSlide);

            form.addEventListener('submit', function() {
                // Disable the submit button
                submitButton.disabled = true;
                submitButton.innerText = "Submitting...";
            });

            // Show the first slide initially
            showSlide(currentSlide);
        });
    </script>
</head>
<body>
    <form action="test.php" method="post">
        <div class="slide">
            <label for="text_area1">Text Area 1:</label><br>
            <textarea id="text_area1" name="text_area1" rows="4" cols="50"></textarea>
        </div>
        
        <div class="slide">
            <label for="text_area2">Text Area 2:</label><br>
            <textarea id="text_area2" name="text_area2" rows="4" cols="50"></textarea>
        </div>
        
        <div class="slide">
            <label for="text_area3">Text Area 3:</label><br>
            <textarea id="text_area3" name="text_area3" rows="4" cols="50"></textarea>
        </div>

        <div class="navigation-buttons">
            <button type="button" id="prevButton">Previous</button>
            <button type="button" id="nextButton">Next</button>
            <input type="hidden" name="submitted" value="1">
            <button id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</body>
</html>