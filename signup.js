function validateForm() {
       var x = document.forms["MyForm"]["naam"].value;
       if (x == "" || x == null) {
              alert("Voer uw naam in alstublieft.");
              return false;
       }
       
}

function validateEmail() {
       var y = document.forms["MyForm"]["email"].value;
       if (y == "" || y == null) {
              alert("Voer uw email in alstublieft.");
              return false;
       }
}
