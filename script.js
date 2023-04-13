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


