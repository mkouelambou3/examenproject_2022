$(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
  });


// navbar togglemenu start
var navLinks = document.getElementById("navLinks");

function showMenu() {
    navLinks.style.right = "0";
}

function hideMenu() {
    navLinks.style.right = "-200px";
}
// navbar togglemenu end