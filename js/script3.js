let currentQuestion = 0; // Keep track of the current question index

// Define the correct answers
const correctAnswers = {
    answer1: "True",
    answer2: "False",
    answer3: "False",
    answer4: "True",
    answer5: "True"
};

// Define emotional results based on the answers
const emotionalResults = {
    True: "This answer reflects an understanding of empathy.",
    False: "This answer may indicate a misunderstanding of emotional concepts."
};

// Function to show the next question
function nextQuestion(questionIndex) {
    // Hide current question
    document.getElementById(`question${questionIndex}`).style.display = "none";
    currentQuestion = questionIndex;

    // Show the next question if it exists
    if (currentQuestion < 5) {
        currentQuestion++;
        document.getElementById(`question${currentQuestion}`).style.display = "block";
    } else {
        // If no more questions, submit answers
        submitAnswers();
    }
}

// Function to show the previous question
function previousQuestion(questionIndex) {
    // Hide current question
    document.getElementById(`question${questionIndex}`).style.display = "none";
    currentQuestion = questionIndex - 1; // Move to the previous question
    document.getElementById(`question${currentQuestion}`).style.display = "block"; // Show it
}

// Function to submit the answers and show the results
function submitAnswers() {
    // Get the selected values from each dropdown
    const answers = [
        document.getElementById("answer1").value,
        document.getElementById("answer2").value,
        document.getElementById("answer3").value,
        document.getElementById("answer4").value,
        document.getElementById("answer5").value
    ];

    // Initialize result array to hold messages
    let result = [];
    let score = 0; // Score to count correct answers

    // Check each answer and create corresponding messages
    answers.forEach((answer, index) => {
        if (answer) {
            result.push(`Question ${index + 1}: Your answer is ${answer}.`);
            if (answer === correctAnswers[`answer${index + 1}`]) {
                result.push("This answer is Correct!");
                score++;
            } else {
                result.push("This answer is Incorrect.");
            }

            // Add emotional analysis based on the answer
            result.push(emotionalResults[answer]);
        } else {
            result.push(`Question ${index + 1}: No answer selected.`);
        }
    });

    // Prepare the final result message with score
    result.push(`<br/>Your total score: ${score} out of ${answers.length}.`);
    const resultElement = document.getElementById("result");
    resultElement.innerHTML = result.join("<br/>"); // Display results line by line
    document.getElementById("modal").style.display = "block"; // Show the modal
}

// Function to close the modal
function closeModal() {
    document.getElementById("modal").style.display = "none";
}
