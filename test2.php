<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Result for Multiple Text Areas</title>
</head>
<body>
    <textarea id="answer1" rows="4" cols="50" placeholder="Type something in the first box..."></textarea>
    <br />
    <textarea id="answer2" rows="4" cols="50" placeholder="Type something in the second box..."></textarea>
    <br />
    <button onclick="checkText()">Check</button>
    <p id="result"></p>

    <script>
        function checkText() {
            // Get the input from all text areas
            const answer1 = document.getElementById("answer1").value.toLowerCase();
            const answer2 = document.getElementById("answer2").value.toLowerCase();

            // Combine all input texts into one string
            const combinedText = answer1 + " " + answer2;

            // Words for detection
            const greetings = ["sad", "happy", "care"];
            const farewells = ["bye", "goodbye", "see you"];
            const gratitude = ["thanks", "thank you", "appreciate"];

            let result = "";

            // Check for greetings
            if (greetings.some(word => combinedText.includes(word))) {
                result += "You greeted me! ";
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

            document.getElementById("result").innerText = result;
        }
    </script>
</body>
</html>
