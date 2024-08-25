
function checkText() {
    // Get the input from all text areas
    const answer1 = document.getElementById("answer1").value.toLowerCase();
    const answer2 = document.getElementById("answer2").value.toLowerCase();
    const answer3 = document.getElementById("answer3").value.toLowerCase();
    const answer4 = document.getElementById("answer4").value.toLowerCase();
    const answer5 = document.getElementById("answer5").value.toLowerCase();
    const answer6 = document.getElementById("answer6").value.toLowerCase();
    const answer7 = document.getElementById("answer7").value.toLowerCase();
    const answer8 = document.getElementById("answer8").value.toLowerCase();
    const answer9 = document.getElementById("answer9").value.toLowerCase();
    const answer10 = document.getElementById("answer10").value.toLowerCase();

    // Combine all input texts into one string
    const combinedText = answer1 + " " + answer2;

    // Words for detection
    const emotions = ["sad", "happy", "care"];
    const farewells = ["bye", "goodbye", "see you"];
    const gratitude = ["thanks", "thank you", "appreciate"];

    let result = "";

    // Check for emotions
    if (emotions.some(word => combinedText.includes(word))) {
        result += `
        <p style="color: black;"> This is the result for ('Sad, Happy, Care' users input!) </p>`;
    }

    // Check for farewells
    if (farewells.some(word => combinedText.includes(word))) {
        result += `
        <p style="color: black;"> This is the result for ('Bye!, Goodbye!, See you!' users input!) </p>`;
    }

    // Check for gratitude
    if (gratitude.some(word => combinedText.includes(word))) {
        result += `
        <p style="color: black;"> This is the result for ('Thanks!, Thank you!, Appreciate!' users input!) </p>`;
    }

    // If no words detected
   // If no words detected
   if (!result) {
    result = `
        <p style="color: black;"> Undefine/No words input by the users!  </p>`;
}


    // Update result and show the modal
    const resultElement = document.getElementById("result");
    resultElement.innerText = result;
    document.getElementById("modal").style.display = "block";
    document.getElementById("result").innerHTML = result;

}

// Function to close the modal
function closeModal() {
    document.getElementById("modal").style.display = "none";
}

