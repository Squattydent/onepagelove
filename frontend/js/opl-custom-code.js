// ------------------------------------------------------------------------
// Smooth Scrolling
// https://codepen.io/HZaccaro/pen/zvrgLb
// ------------------------------------------------------------------------

$(function smoothScrollYo() {
  // This will select everything with the class smoothScroll
  // This should prevent problems with carousel, scrollspy, etc...
  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000); // The number here represents the speed of the scroll in milliseconds
        return false;
      }
    }
  });
});

// Change the speed to whatever you want
// Personally i think 1000 is too much
// Try 800 or below, it seems not too much but it will make a difference

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
};

// ------------------------------------------------------------------------
// Media Modals
// ------------------------------------------------------------------------

$(function() {

  // Feedback For Coffee
  $('.modal-msg').click(function() {
    $.modal('<audio controls autoplay controlsList="nodownload"><source src="http://onepagelove.com/wp-content/themes/onepagelove/media/f4c.mp4" type="audio/mp4"></p><p>Your user agent does not support the HTML5 Audio element.</p></audio>');
  });

  // Form (example)
  $('.modal-form').click(function () {
    var form = '<form>'+
            '<input type="text" name="username" placeholder="username" /><br>'+
            '<input type="text" name="password" placeholder="password" /><br>'+
            '<div class="btn submitBtn">Submit</div>'+
          '</form>';
    $.modal(form);
  });
  
  // Feedback (video)
  $('.modal-vid').click(function () {
    $.modal('<iframe width="560" height="315" src="https://www.youtube.com/embed/aQcXTZxJlZc?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>');
  });

});
