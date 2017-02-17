// Main JS using UmbrellaJS framework



// DOM is ready

// Code here

// .DOM is ready


// haven't figured out a way to check if dom is ready in UmbrellaJS


u(".hamburger").on("click", function(e){
    e.preventDefault();
    u(this).toggleClass("nav-is-visible");
    u("body").toggleClass("noscroll");
    u("header").toggleClass("nav-is-visible");
    u(".nav-wrap").toggleClass("nav-is-visible");
    u(".container-fluid").toggleClass("nav-is-visible");
});

// When nav is visible, clicking content will also close the menu
u(".overlay").on("click", function(e){
    e.preventDefault();
    u("body").toggleClass("noscroll");
    u("header").toggleClass("nav-is-visible");
    u(".hamburger").toggleClass("nav-is-visible");
    u(".nav-wrap").toggleClass("nav-is-visible");
    u(".container-fluid").toggleClass("nav-is-visible");
});