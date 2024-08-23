<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Detection in Textarea with JavaScript</title>
</head>
<body>
    <textarea id="inputText" rows="4" cols="50" placeholder="Type something..."></textarea>
    <br />
    <button onclick="checkText()">Check</button>
    <p id="result"></p>

    <script>
        function checkText() {
            const inputText = document.getElementById("inputText").value.toLowerCase();
            let result = "";

            if (inputText.includes("money","notes")) {
                result = "Effective Emotional Validation: You effectively recognized and validated emotions in most scenarios. This includes acknowledging feelings and providing encouragement in situations of joy, sadness, and embarrassment.";
            } else if (inputText.includes("bye")) {
                result = "Goodbye!";
            } else {
                result = "I don't recognize that word.";
            }

            document.getElementById("result").innerText = result;
        }
    </script>
</body>
</html>
