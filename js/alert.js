function validateForm() {
    const answer1 = document.getElementById('answer1');
    const answer2 = document.getElementById('answer2');
    const answer3 = document.getElementById('answer3');
    const answer4 = document.getElementById('answer4');
    const answer5 = document.getElementById('answer5');
    const answer6 = document.getElementById('answer6');
    const answer7 = document.getElementById('answer7');
    const answer8 = document.getElementById('answer8');
    const answer9 = document.getElementById('answer9');
    const answer10 = document.getElementById('answer10');
    

    // Clear previous alerts
    answer1.classList.remove('alert');
    answer2.classList.remove('alert');
    answer3.classList.remove('alert');
    answer4.classList.remove('alert');
    answer5.classList.remove('alert');
    answer6.classList.remove('alert');
    answer7.classList.remove('alert');
    answer8.classList.remove('alert');
    answer9.classList.remove('alert');
    answer10.classList.remove('alert');

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

    if (!answer6.value.trim()) {
        answer6.classList.add('alert');
        hasError = true;
    }

    if (!answer7.value.trim()) {
        answer7.classList.add('alert');
        hasError = true;
    }

    if (!answer8.value.trim()) {
        answer8.classList.add('alert');
        hasError = true;
    }

    if (!answer9.value.trim()) {
        answer9.classList.add('alert');
        hasError = true;
    }

    if (!answer10.value.trim()) {
        answer10.classList.add('alert');
        hasError = true;
    }

    if (hasError) {
        alert('Please fill in all required fields.');
    }
}