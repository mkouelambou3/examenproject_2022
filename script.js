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

var span = document.getElementById("category-type-text");
var btn = document.getElementById("submit-btn");

function vanFunction() {
  span.textContent = "Bestelauto";
  btn.textContent = "Bekijk bestelauto's";
}

function carFunction() {
  span.textContent = "auto";
  btn.textContent = "Bekijk auto's";
}

function luxeFunction() {
  span.textContent = "Luxe auto";
  btn.textContent = "Bekijk luxe auto's";
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
}


function setCheck3On() {
  var checkbox = document.getElementById("checkbox-luxeauto");
  var text = document.getElementById("vehicle_reset_btn");
  if (checkbox.checked == true) {
      text.style.display = "block";
  } else {
      text.style.display = "none";
  }

  if (checkbox.checked == false) {
    text.style.display = "none";
  } else {
    text.style.display = "block";
  }
}


