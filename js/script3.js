
    let currentQuestion = 1; // Keep track of the current question index
    const totalQuestions = 5;


    // Function to show the next question
    function nextQuestion(questionIndex) {
        document.getElementById(`question${questionIndex}`).style.display = "none";
        currentQuestion = questionIndex + 1;

        if (currentQuestion <= totalQuestions) {
            document.getElementById(`question${currentQuestion}`).style.display = "block";
        }
    }

    // Function to show the previous question
    function previousQuestion(questionIndex) {
        document.getElementById(`question${questionIndex}`).style.display = "none";
        currentQuestion = questionIndex - 1;

        if (currentQuestion > 0) {
            document.getElementById(`question${currentQuestion}`).style.display = "block";
        }
    }

    // Function to submit the answers and show the results
    function submitAnswers() {
        const answers = [
            document.getElementById("answer1").value,
            document.getElementById("answer2").value,
            document.getElementById("answer3").value,
            document.getElementById("answer4").value,
            document.getElementById("answer5").value
        ];

        let score = 0;
        let result = [];

        answers.forEach((answer, index) => {
            if (answer) {
                if (answer === correctAnswers[index]) {
                    score++;
                    result.push(`Question ${index + 1}: Correct! Your answer: <p style="color:green;">${answer}</p>`);
                } else {
                    result.push(`Question ${index + 1}: Incorrect. Your answer: <p style="color:red;">${answer}</p>`);
                }
            } else {
                result.push(`Question ${index + 1}: No answer selected.`);
            }
        });

        // Prepare the final result message
        const resultElement = document.getElementById("result");
        resultElement.innerHTML = result.join("<br/>") + `<br/><br/>Total Score: ${score}/${totalQuestions}`;
        document.getElementById("modal").style.display = "block"; // Show the modal
    }

    // Function to close the modal
    function closeModal() {
        document.getElementById("modal").style.display = "none";
    }


// Store the correct answers in an array
const correctAnswers = ["True", "False", "False", "True", "True"];
let userAnswers = [];

// Function to check the answers
function checkText() {
    // Collect the answers from the form
    userAnswers[0] = document.querySelector('select[name="answer1"]').value;
    userAnswers[1] = document.querySelector('select[name="answer2"]').value;
    userAnswers[2] = document.querySelector('select[name="answer3"]').value;
    userAnswers[3] = document.querySelector('select[name="answer4"]').value;
    userAnswers[4] = document.querySelector('select[name="answer5"]').value;

    // Validate that all questions are answered
    if (userAnswers.includes(undefined) || userAnswers.includes("")) {
        alert("Please answer all questions before submitting.");
        return;
    }

    // Calculate the score
    let score = 0;
    for (let i = 0; i < correctAnswers.length; i++) {
        if (userAnswers[i] === correctAnswers[i]) {
            score++;
        }
    }

    // Display the result in the modal
    const resultText = `Great job! Remember, empathy is a skill that can be developed further. Keep practicing to enhance your ability to connect with others and navigate social situations with understanding and compassion.


    You answered ${score} out of ${correctAnswers.length} questions correctly.
    
    
    Thank you for participating! `;
    document.getElementById("result").innerText = resultText;

    // Show the modal
    document.getElementById("modal").style.display = "block";
}

// Function to close the modal
function closeModal() {
    document.getElementById("modal").style.display = "none";
}

// Optional: If you want to submit the form after showing the modal
document.getElementById("submitButton").addEventListener("click", function() {
    // If you want to submit the form after validation, uncomment the line below
    // document.forms[0].submit();
});

