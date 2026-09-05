
function checkText() {
    // Get the input from all text areas
    const answer1 = document.getElementById("answer1").value.toLowerCase();
    const answer2 = document.getElementById("answer2").value.toLowerCase();
    const answer3 = document.getElementById("answer3").value.toLowerCase();
    const answer4 = document.getElementById("answer4").value.toLowerCase();
    const answer5 = document.getElementById("answer5").value.toLowerCase();

    // Combine all input texts into one string
    const combinedText = answer1 + " " + answer2 + " " + answer3 + " " + answer4 + " " + answer5;

    // Words for detection
    const emotions = ["empathy", "comforting", "emotional support", "compassion", "friendship", "sadness", "reassurance", "understanding", "caring gesture", "supportive relationship", "crying", "console", "angry", "anger", "happy"];

    const emotions2 = ["losing", "pet", "family member", "sadness", "grief", "anger", "companionship", "love", "loyalty", "painful", "heartbroken", "miss", "presence", "playful nature", "big loss"];

    const emotions3 = ["Complex issue", "Contributing factors", "Poverty", "Mental health", "Affordable housing", "Resilient", "Resourceful", "Obstacles", "emotions3", "Roof over head", "Food on the table", "Compassion", "Understanding", "Less fortunate", "Volunteer", "Donate", "Organizations", "Support", "Advocate", "Policies", "Root causes", "Positive impact"];

    const emotions4 = ["front lines", "climate change", "Acute impacts", "Urgency", "Consequences of inaction", "Human suffering", "Displacement", "Advocate", "Ethically wrong", "Responsibility to act", "Ignoring suffering", "Vulnerable populations", "Human rights"];

    const emotions5 = ["listen to perspectives", "employees' perspectives", "without judgment", "acknowledging feelings", "concerns", "finding common ground", "understanding root cause", "conflict", "active listening", "Paraphrasing", "ensure understanding", "clarifying questions", "encouraging expression", "work together", "find solution", "address needs"];

    let result = "";

    // Check for emotions
    if (emotions.some(word => combinedText.includes(word))) {
        result += `
        <p style="color: black;"> • Your insights emphasize the crucial role of empathy and compassion in nurturing supportive relationships. By acknowledging the emotions of those around you, especially in moments of distress, you can help create a safe and welcoming space. This approach not only benefits others but also promotes your own emotional well-being, fostering a deeper connection with the community. </p>`;
    }

    // Check for emotions2
    if (emotions2.some(word => combinedText.includes(word))) {
        result += `
        <p style="color: black;"> • Your insights emphasize the crucial role of empathy and compassion in nurturing supportive relationships. By acknowledging the emotions of those around you, especially in moments of distress, you can help create a safe and welcoming space. This approach not only benefits others but also promotes your own emotional well-being, fostering a deeper connection with the community. </p>`;
    }

    // Check for emotions3
    if (emotions3.some(word => combinedText.includes(word))) {
        result += `
        <p style="color: black;"> • Your insights emphasize the crucial role of empathy and compassion in nurturing supportive relationships. By acknowledging the emotions of those around you, especially in moments of distress, you can help create a safe and welcoming space. This approach not only benefits others but also promotes your own emotional well-being, fostering a deeper connection with the community. </p>`;
    }

        // Check for emotions4
        if (emotions4.some(word => combinedText.includes(word))) {
            result += `
            <p style="color: black;"> • Your insights emphasize the crucial role of empathy and compassion in nurturing supportive relationships. By acknowledging the emotions of those around you, especially in moments of distress, you can help create a safe and welcoming space. This approach not only benefits others but also promotes your own emotional well-being, fostering a deeper connection with the community. </p>`;
        }

        // Check for emotions5
        if (emotions5.some(word => combinedText.includes(word))) {
            result += `
            <p style="color: black;"> • Your insights emphasize the crucial role of empathy and compassion in nurturing supportive relationships. By acknowledging the emotions of those around you, especially in moments of distress, you can help create a safe and welcoming space. This approach not only benefits others but also promotes your own emotional well-being, fostering a deeper connection with the community. </p>`;
        }

    // If no words detected
   if (!result) {
    result = `
        <p style="color: black;"> • Your responses show a strong understanding of the emotional challenges faced in each scenario. You effectively express empathy for the feelings of others, whether it’s the nervousness of a new kid at school or the grief of losing a pet.
        <br><br>
        • You demonstrate significant growth in your perspective, moving from basic understandings to a deeper awareness of complex social issues like homelessness and climate change. This insight empowers you to take action in your community, reflecting a commitment to compassion and social responsibility.
        <br><br>
        • As you continue to engage with these topics, think about ways to deepen your connection and explore additional actions you can take to create positive change. Your willingness to learn and grow is commendable.  </p>`;
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

