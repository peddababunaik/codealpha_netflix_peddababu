let currentPage = 1;
const form = document.getElementById('survey-form');

function nextPage() {
    document.getElementById(`page${currentPage}`).style.display = 'none';
    currentPage++;
    document.getElementById(`page${currentPage}`).style.display = 'block';
}

function prevPage() {
    document.getElementById(`page${currentPage}`).style.display = 'none';
    currentPage--;
    document.getElementById(`page${currentPage}`).style.display = 'block';
}

form.addEventListener('submit', function(event) {
    // You can use JavaScript to save data between pages (e.g., to a JSON object)

    // Prevent the form from submitting normally
    event.preventDefault();
    const formData = new FormData(form);
    
    // Send data to the server using AJAX or fetch
    // Example: 
    // fetch('submit.php', {
    //     method: 'POST',
    //     body: formData
    // })
    // .then(response => response.json())
    // .then(data => console.log(data))
});
