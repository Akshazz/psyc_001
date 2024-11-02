
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
    const emotions = ["nervous", "scared", "lonely", "hard", "not knowing", "new"];

    const emotions2 = ["losing", "pet", "family member", "sadness", "grief", "anger", "companionship", "love", "loyalty", "painful", "heartbroken", "miss", "presence", "playful nature", "big loss"];

    const emotions3 = ["complex issue", "Contributing factors", "Poverty", "Mental health", "Affordable housing", "Resilient", "Resourceful", "Obstacles", "emotions3", "Roof over head", "Food on the table", "Compassion", "Understanding", "Less fortunate", "Volunteer", "Donate", "Organizations", "Support", "Advocate", "Policies", "Root causes", "Positive impact"];

    const emotions4 = ["front lines", "climate change", "Acute impacts", "Urgency", "Consequences of inaction", "Human suffering", "Displacement", "Advocate", "Ethically wrong", "Responsibility to act", "Ignoring suffering", "Vulnerable populations", "Human rights"];

    const emotions5 = ["listen to perspectives", "employees' perspectives", "without judgment", "acknowledging feelings", "concerns", "finding common ground", "understanding root cause", "conflict", "active listening", "Paraphrasing", "ensure understanding", "clarifying questions", "encouraging expression", "work together", "find solution", "address needs"];

    let result = "";

    // Check for emotions
    if (emotions.some(word => combinedText.includes(word))) {
        result += `
        <p style="color: black;"> • Your reflections highlight the importance of empathy and kindness in social settings, especially for those who are new and vulnerable. By understanding and addressing these feelings and desired actions, you can create a more inclusive and welcoming environment for everyone, including yourself. </p>`;
    }

    // Check for emotions2
    if (emotions2.some(word => combinedText.includes(word))) {
        result += `
        <p style="color: black;"> • Your insights reveal the deep emotional impact that losing a pet can have, reflecting both the character's reaction and your personal feelings. This analysis emphasizes the importance of pets in our lives and the heartache that accompanies their loss, highlighting the need for support and understanding during such difficult times. </p>`;
    }

    // Check for emotions3
    if (emotions3.some(word => combinedText.includes(word))) {
        result += `
        <p style="color: black;"> • Your insights reveal a significant transformation in your understanding of homelessness, moving from a simplistic view to a comprehensive awareness of its complexities. This growth in perspective not only fosters empathy but also empowers you to take meaningful action to support those affected by homelessness. Your commitment to volunteering, donating, and advocating indicates a proactive approach to making a positive impact in your community. </p>`;
    }

        // Check for emotions4
        if (emotions4.some(word => combinedText.includes(word))) {
            result += `
            <p style="color: black;"> • Your insights reveal a significant transformation in your understanding of the relationship between Indigenous communities and climate change. This growth fosters a sense of urgency and responsibility, compelling you to advocate for ethical action and support for vulnerable populations. By recognizing the interconnectedness of environmental issues and human rights, you are equipped to engage more thoughtfully in discussions and actions regarding climate change and its far-reaching impacts. </p>`;
        }

        // Check for emotions5
        if (emotions5.some(word => combinedText.includes(word))) {
            result += `
            <p style="color: black;"> • Your approach and strategies demonstrate effective conflict resolution skills, underscoring the importance of empathy, active communication, and collaboration in managing workplace disputes. This not only resolves immediate issues but also contributes to a healthier workplace culture in the long term. </p>`;
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

