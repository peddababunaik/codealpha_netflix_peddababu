document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Perform CAPTCHA validation
    const response = grecaptcha.getResponse();
    if (response.length === 0) {
        alert('Please complete the CAPTCHA.');
        return;
    }

    // Proceed with form submission
    const formData = new FormData(this);
    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message);
    });
});
