jQuery(function ($) {
    $('.ghostly').animate({
        opacity: '1'
    }, 3000);
   
        $.when($("body").fadeOut(4000).promise(), $.ajax({
            url: "home.html",
            type: 'get',
            dataType: 'html'
        })).done(function (_html) {
            $("body").fadeOut(1000, function(){redirectPage("home.html")});
            $("body").css({
                display: "none"
            });
            $("body").fadeIn(4000);
        });

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