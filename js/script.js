
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
        result += `
        <p style="color: black;">Supportive Responses: Your ability to offer support and practical help was notable, especially when dealing with positive or negative emotions.</p>
        <p>Tips to Enhance:</p>
        <ul>
            <li>Keep providing support that is both emotional and practical. Offering specific ways to help can deepen your empathetic interactions.</li>
            <li>Engage in role-playing exercises to practice different supportive responses.</li>
        </ul>
    `;
}

    // Check for gratitude
    if (gratitude.some(word => combinedText.includes(word))) {
        result += "You expressed gratitude! ";
    }

    // If no words detected
   // If no words detected
   if (!result) {
    result = `
        <p style="color: black;">Providing More Nuanced Emotional Support: In scenarios involving frustration, anxiety, and stress, your responses sometimes lacked depth. Rather than offering general reassurance, a more tailored approach addressing the specific concerns would be beneficial.</p>
        <p>Tips for Improvement:</p>
        <ul>
            <li>Active Listening: Engage more deeply with the individual's concerns by asking open-ended questions to better understand their feelings.</li>
            <li>Personalized Support: Offer practical solutions or assistance relevant to their specific situation. For instance, if someone is stressed about a deadline, help them plan or manage their tasks.</li>
        </ul>
    `;
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

