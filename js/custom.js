// Main JS using UmbrellaJS framework



// DOM is ready

// Code here

// .DOM is ready


// haven't figured out a way to check if dom is ready in UmbrellaJS

u(".hamburger").on("click", function (e) {
    e.preventDefault();
    u(this).toggleClass("nav-is-visible");
    u("body").toggleClass("noscroll");
    u("#masthead").toggleClass("nav-is-visible");
    u(".main-navigation").toggleClass("nav-is-visible");
    u(".site").toggleClass("nav-is-visible");
});

// When nav is visible, clicking content will also close the menu
u(".overlay").on("click", function (e) {
    e.preventDefault();
    u("body").toggleClass("noscroll");
    u("#masthead").toggleClass("nav-is-visible");
    u(".hamburger").toggleClass("nav-is-visible");
    u(".main-navigation").toggleClass("nav-is-visible");
    u(".site").toggleClass("nav-is-visible");
});


var headerElement = document.getElementById("masthead");

function headerBGOpacity() {
    var scrolledFromTheTop = (document.body.scrollTop / 100) / 2;
    var targetOpacity = 0.9;
    //console.log(scrolledFromTheTop); 

    scrolledFromTheTop <= targetOpacity ? (opacityNumber = scrolledFromTheTop) : (opacityNumber = targetOpacity);
    headerElement.style.backgroundColor = 'rgba(49, 75, 136, ' + opacityNumber + ')';
}

window.addEventListener("scroll", function () {
    headerBGOpacity();
}, false);
