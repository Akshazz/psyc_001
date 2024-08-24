
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
        result = "Hindi kapa qualified sa taas!";
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

