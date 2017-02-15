// Main JS an important screw

// DOM is ready
jQuery(document).ready(function($){
    //move nav element position according to window width
    $(".hamburger").on('click', function(event){
        event.preventDefault();
        $(this).toggleClass('nav-is-visible');
        $('body').toggleClass('noscroll');
        $('header').toggleClass('nav-is-visible');
		$('.nav-wrap').toggleClass('nav-is-visible');
		$('.container-fluid').toggleClass('nav-is-visible');
        if (scrollDisabled) {
            enableScroll();
            scrollDisabled = false;
        } else {
            disableScroll();
            scrollDisabled = true;
        }
    });
    
    // When nav is visible, clicking content will also close the menu
    $(".overlay").on('click', function(event){
        event.preventDefault();
        $('body').toggleClass('noscroll');
        $('header').toggleClass('nav-is-visible');
        $('.hamburger').toggleClass('nav-is-visible');
		$('.nav-wrap').toggleClass('nav-is-visible');
		$('.container-fluid').toggleClass('nav-is-visible');
    });


var scrollDisabled = false;
// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault){
      e.preventDefault();
    }
    e.returnValue = false;  
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() {
    if (window.addEventListener){ // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
    }
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener){
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    }
    window.onmousewheel = document.onmousewheel = null; 
    window.onwheel = null; 
    window.ontouchmove = null;  
    document.onkeydown = null;  
}


    
}); // .DOM is ready