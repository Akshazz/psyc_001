document.addEventListener('DOMContentLoaded', function() {
    var currentSlide = 0;
    var slides = document.querySelectorAll('.slide');
    var form = document.querySelector('form');
    var submitButton = document.getElementById('submitButton');
    var resultDiv = document.getElementById('result');
    var successDiv = document.getElementById('success');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
    }

    function nextSlide() {
        if (currentSlide < slides.length - 1) {
            currentSlide++;
            showSlide(currentSlide);
        }
    }

    function prevSlide() {
        if (currentSlide > 0) {
            currentSlide--;
            showSlide(currentSlide);
        }
    }

    document.getElementById('nextButton').addEventListener('click', nextSlide);
    document.getElementById('prevButton').addEventListener('click', prevSlide);

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Disable the submit button
        submitButton.disabled = true;
        submitButton.innerText = "Submitting...";

        // Create a FormData object from the form
        var formData = new FormData(form);

        // Send the form data using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'test.php', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 400) {
                // Parse JSON response
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    // Display success message
                    successDiv.innerHTML = response.message;
                    resultDiv.innerHTML = ''; // Clear any previous error message
                } else {
                    // Display error message
                    resultDiv.innerHTML = response.message;
                    successDiv.innerHTML = ''; // Clear any previous success message
                }
            } else {
                resultDiv.innerHTML = 'An error occurred.';
                successDiv.innerHTML = ''; // Clear any previous success message
            }
            // Re-enable the submit button
            submitButton.disabled = false;
            submitButton.innerText = "Submit";
        };
        xhr.send(formData);
    });

    // Show the first slide initially
    showSlide(currentSlide);
});