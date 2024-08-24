<script>
function showModalWithLoading() {
    // Show the modal and loading spinner
    document.getElementById("modal").style.display = "block";
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
    document.getElementById("modal").style.display = "none";
}
</script>
