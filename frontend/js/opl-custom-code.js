// ------------------------------------------------------------------------
// FitVids.js integration
// ------------------------------------------------------------------------

$(document).ready(function(){
  // Target your .container, .wrapper, .post, etc.
  $("#content .single-container").fitVids();
});


// ------------------------------------------------------------------------
// Mobile Navigation: Menu Button
// ------------------------------------------------------------------------

function toggleNav() {
	var ele = document.getElementById("mobile-navigation-toggle");
	var text = document.getElementById("mobile-nav-button-link");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
  	}
	else {
		ele.style.display = "block";
	}
}

// ------------------------------------------------------------------------
// Smooth Scrolling - https://css-tricks.com/snippets/jquery/smooth-scrolling/
// ------------------------------------------------------------------------

$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});