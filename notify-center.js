// script.js

var modal = document.querySelector('.notify-icon');
var notifyButton = document.getElementById('open-modal');

function openModal() {
    modal.style.display = 'block';
}

function closeModal() {
    modal.style.display = 'none';
}

// Click event for the "Berichten" button
notifyButton.addEventListener('click', function () {
    openModal();
});

// Additional functions or modifications can be added as needed
