function showModalWithLoading() {
    // Show the modal and loading spinner
    const modal = document.getElementById("modal");
    modal.classList.add("show");
    document.getElementById("loading").style.display = "flex";
    document.getElementById("result").style.display = "none";
    
    // Simulate a delay (e.g., data processing) and then show the result
    setTimeout(() => {
        document.getElementById("loading").style.display = "none";
        document.getElementById("result").style.display = "block";
        document.getElementById("result").innerText = "Your result goes here!";
    }, 2000); // Adjust the delay as needed
}

function closeModal() {
    const modal = document.getElementById("modal");
    modal.classList.remove("show");
    modal.classList.add("hide");
    
    // Hide the modal after animation
    setTimeout(() => {
        modal.style.display = "none";
        modal.classList.remove("hide");
    }, 300); // Match the transition duration in CSS
}