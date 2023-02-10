function validate_password() {
    var pass = document.getElementById('password').value;
    var confirm_pass = document.getElementById('re-password').value;
    if (password != re-password) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML = '☒ Wachtwoorden moeten gelijk zijn.';
        document.getElementById('submit').disabled = true;
        document.getElementById('submit').style.opacity = (0.4);
    } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML = '🗹 Wachtwoorden zijn gelijk';
        document.getElementById('submit').disabled = false;
        document.getElementById('submit').style.opacity = (1);
    }
}

function wrong_pass_alert() {
    if (document.getElementById('password').value != "" &&
    document.getElementById('submit').value != "") {
        alert("Uw gegevens zijn opgeslagen.");
    } else {
        alert("Voer alle velden in alstublieft.")
    }
}