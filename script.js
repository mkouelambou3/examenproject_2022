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
