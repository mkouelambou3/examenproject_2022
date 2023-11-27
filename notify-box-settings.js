let counterValue = 0;

function incrementCounter() {
    counterValue++;
    document.getElementById('counter').innerText = counterValue;
    document.getElementById('modalCounter').innerText = counterValue;
}

function openModal() {
    $('#berichtenModal').modal('show');
    // Reset the counter when the modal is opened
    counterValue = 0;
    document.getElementById('counter').innerText = counterValue;
}

function closeModal() {
    $('#berichtenModal').modal('hide');
}


