<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Check</title>
    <style>
        /* Basic styles for modal */
        #modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        #modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Text Checker</h1>
    <form id="textForm">
        <label for="answer1">Input 1:</label>
        <textarea id="answer1" rows="4" cols="50"></textarea>
        <br>
        <label for="answer2">Input 2:</label>
        <textarea id="answer2" rows="4" cols="50"></textarea>
        <br>
        <button type="button" onclick="checkText()">Check Text</button>
    </form>

    <!-- Modal -->
    <div id="modal">
        <div id="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p id="result"></p>
        </div>
    </div>

    <script>
        // JavaScript functions
        function checkText() {
            // Get the input from all text areas
            const answer1 = document.getElementById("answer1").value.toLowerCase();
            const answer2 = document.getElementById("answer2").value.toLowerCase();

            // Combine all input texts into one string
            const combinedText = answer1 + " " + answer2;

            // Words for detection
            const emotions = ["sad", "happy", "care"];
            const farewells = ["bye", "goodbye", "see you"];
            const gratitude = ["thanks", "thank you", "appreciate"];

            let result = "";

            // Check for emotions
            if (emotions.some(word => combinedText.includes(word))) {
                result += "Effective Emotional Validation: You effectively recognized and validated emotions in most scenarios. This includes acknowledging feelings and providing encouragement in situations of joy, sadness, and embarrassment. ";
            }

            // Check for farewells
            if (farewells.some(word => combinedText.includes(word))) {
                result += "You said goodbye! ";
            }

            // Check for gratitude
            if (gratitude.some(word => combinedText.includes(word))) {
                result += "You expressed gratitude! ";
            }

            // If no words detected
            if (!result) {
                result = "No specified words detected.";
            }

            // Update result and show the modal
            const resultElement = document.getElementById("result");
            resultElement.innerText = result;
            document.getElementById("modal").style.display = "block";
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById("modal").style.display = "none";
        }
    </script>
</body>
</html>
