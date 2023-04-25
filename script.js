// navbar togglemenu start
var navLinks = document.getElementById("navLinks");

function showMenu() {
    navLinks.style.right = "0";
}

function hideMenu() {
    navLinks.style.right = "-200px";
}
// navbar togglemenu end
function doStuff (callback) {
    // do all app scripts here...
    callback();
  }
  
  doStuff(function () {
    document.body.className = 'visible';
  });

  function findCarButton() {
    var finderbtn = document.getElementById("submit-btn");
    var checktext = document.getElementById("alert-text-success");

   if (finderbtn.clicked == true) {
      checktext.style.display == "block";
   } else {
      checktext.style.display == "none";
   }
  }

var span = document.getElementById("category-type-text");
var btn = document.getElementById("submit-btn");

function vanFunction() {
  span.textContent = "Bestelauto";
  btn.textContent = "Bekijk bestelauto's";
  document.getElementById("selected-car-text").style.display = "none";
}

function carFunction() {
  span.textContent = "auto";
  btn.textContent = "Bekijk auto's";
  document.getElementById("selected-car-text").style.display = "block";
 
}

function luxeFunction() {
  span.textContent = "Luxe auto";
  btn.textContent = "Bekijk luxe auto's";
  document.getElementById("selected-car-text").style.display = "none";
}

function checkBoxCar() {
  var checkbox = document.getElementById("checkbox-personenauto");
  var text = document.getElementById("vehicle_reset_btn");
  var count = 0;
  if (checkbox.checked == true) {
      count++;
      text.style.display = "block";
      document.getElementById("vehicle-filter-count").innerHTML = count;
  } else {
      count--;
      text.style.display = "none";
      document.getElementById("vehicle-filter-count").innerHTML = 0;
  }

  let deleteinput = document.getElementById("vehicle_reset_btn");

  deleteinput.onclick = function() {
    if (checkbox.checked) {
       text.style.display = "none";
       document.getElementById("vehicle-filter-count").innerHTML = 0;
       checkbox.checked = false;
    }
  }
}

function checkBoxVan() {
  var checkbox = document.getElementById("checkbox-bestelauto");
  var text = document.getElementById('vehicle_reset_btn');
  var count = 0;

  if (checkbox.checked == true) {
    count++;
    text.style.display = "block";
    document.getElementById("vehicle-filter-count-van").innerHTML = count;
  } else {
    count--;
    text.style.display = "none";
    document.getElementById("vehicle-filter-count-van").innerHTML = 0;
  }

  let deleteinput = document.getElementById("vehicle_reset_btn");

  deleteinput.onclick = function() {
    if (checkbox.checked) {
       text.style.display = "none";
       document.getElementById("vehicle-filter-count-van").innerHTML = 0;
       checkbox.checked = false;
    }
  }
}


function checkBoxLuxeCar() {
  var checkbox = document.getElementById("checkbox-luxeauto");
  var text = document.getElementById("vehicle_reset_btn");
  var count = 0;
  if (checkbox.checked == true) {
      count++;
      text.style.display = "block";
      document.getElementById("vehicle-filter-count-luxury").innerHTML = count;
  } else {
      count--;
      text.style.display = "none";
      document.getElementById("vehicle-filter-count-luxury").innerHTML = 0;
  }

  let deleteinput = document.getElementById("vehicle_reset_btn");

  deleteinput.onclick = function() {
    if (checkbox.checked) {
       text.style.display = "none";
       document.getElementById("vehicle-filter-count-luxury").innerHTML = 0;
       checkbox.checked = false;
    }
  }
}


