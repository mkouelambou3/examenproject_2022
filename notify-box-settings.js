var modal = document.querySelector('.notify-icon');
var notify = document.getElementById('open-modal');
var close = document.getElementById("close-modal");

function openModal() {
    modal.style.display = 'block';
}

function closeModal() {
    modal.style.display = 'none';
}

// Click event for the "Berichten" button
notify.addEventListener('click', function () {
    openModal();
});


// Additional functions or modifications can be added as needed
