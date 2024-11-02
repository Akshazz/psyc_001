function validateForm() {
    const answer1 = document.getElementById('answer1');
    const answer2 = document.getElementById('answer2');
    const answer3 = document.getElementById('answer3');
    const answer4 = document.getElementById('answer4');
    const answer5 = document.getElementById('answer5');
    

    // Clear previous alerts
    answer1.classList.remove('alert');
    answer2.classList.remove('alert');
    answer3.classList.remove('alert');
    answer4.classList.remove('alert');
    answer5.classList.remove('alert');

    let hasError = false;

    if (!answer1.value.trim()) {
      answer1.classList.add('alert');
        hasError = true;
    }

    if (!answer2.value.trim()) {
        answer2.classList.add('alert');
        hasError = true;
    }

    if (!answer3.value.trim()) {
        answer3.classList.add('alert');
        hasError = true;
    }

    if (!answer4.value.trim()) {
        answer4.classList.add('alert');
        hasError = true;
    }

    if (!answer5.value.trim()) {
        answer5.classList.add('alert');
        hasError = true;
    }

    if (hasError) {
        alert('Please fill in all required fields.');
    }
}