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
// Email Octopus
// https://emailoctopus.com/bundles/emailoctopuslist/js/formEmbed.js
// Last updated 01 May 2017 
// ------------------------------------------------------------------------

var emailOctopus={successMessage:'Yay! You are subscribed. Check your inbox for gifts:)',missingEmailAddressMessage:'Slow down cowboy - your email address is required!',invalidEmailAddressMessage:'Your email address looks incorrect, please try again.',botSubmissionErrorMessage:'This doesn\'t look like a human submission.',invalidParametersErrorMessage:'This form has missing or invalid fields.',unknownErrorMessage:'Sorry, an unknown error has occurred. Please try again later.',isBotPost:function($form){return $form.find('.email-octopus-form-row-hp input').val();},basicValidateEmail:function(email){var regex=/\S+@\S+\.\S+/;return regex.test(email);},ajaxSuccess:function($form){$form.trigger('email-octopus.success');var $successRedirectUrl=$form.find('.email-octopus-success-redirect-url').val();if($successRedirectUrl&&$successRedirectUrl.trim()){window.location.href=$successRedirectUrl;}else{$('.email-octopus-success-message').text(emailOctopus.successMessage);$form.hide();}},ajaxError:function($form,textStatus){var response=$.parseJSON(textStatus.responseText);var $errorMessage=$form.siblings('.email-octopus-error-message');if(response&&response.error&&response.error.code){switch(response.error.code){case'INVALID_PARAMETERS':$errorMessage.text(emailOctopus.invalidParametersErrorMessage);return;case'BOT_SUBMISSION':$errorMessage.text(emailOctopus.botSubmissionErrorMessage);return;}}
$errorMessage.text(emailOctopus.unknownErrorMessage);},ajaxSubmit:function($form){$.ajax({type:$form.attr('method'),url:$form.attr('action'),data:$form.serialize(),success:function(){emailOctopus.ajaxSuccess($form);},error:function(textStatus){emailOctopus.ajaxError($form,textStatus);},});}}
$(function(){$('.email-octopus-form').submit(function(e){var $form=$(this);var $errorMessage=$form.siblings('.email-octopus-error-message');var emailAddress=$form.find('.email-octopus-email-address').val();$errorMessage.empty();if(emailOctopus.isBotPost($form)){$errorMessage.text(emailOctopus.botSubmissionErrorMessage);}else if(!$.trim(emailAddress)){$errorMessage.text(emailOctopus.missingEmailAddressMessage);}else if(!emailOctopus.basicValidateEmail(emailAddress)){$errorMessage.text(emailOctopus.invalidEmailAddressMessage);}else{emailOctopus.ajaxSubmit($form);}
return false;});});