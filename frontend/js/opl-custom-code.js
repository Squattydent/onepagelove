// ------------------------------------------------------------------------
// Smooth Scrolling
// http://codepen.io/HZaccaro/pen/zvrgLb
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
// Last updated 01 Feb 2017
// ------------------------------------------------------------------------

var emailOctopus={successMessage:'Thanks for subscribing!',missingEmailAddressMessage:'Your email address is required.',invalidEmailAddressMessage:'Your email address looks incorrect, please try again.',botSubmissionErrorMessage:'This doesn\'t look like a human submission.',invalidParametersErrorMessage:'This form has missing or invalid fields.',unknownErrorMessage:'Sorry, an unknown error has occurred. Please try again later.',isBotPost:function($form){return $form.find('.email-octopus-form-row-hp input').val();},basicValidateEmail:function(email){var regex=/\S+@\S+\.\S+/;return regex.test(email);},ajaxSuccess:function($form){$form.trigger('email-octopus.success');var $successRedirectUrl=$form.find('.email-octopus-success-redirect-url').val();if($successRedirectUrl&&$successRedirectUrl.trim()){window.location.href=$successRedirectUrl;}else{$('.email-octopus-success-message').text(emailOctopus.successMessage);$form.hide();}},ajaxError:function($form,textStatus){var response=$.parseJSON(textStatus.responseText);var $errorMessage=$form.siblings('.email-octopus-error-message');if(response&&response.error&&response.error.code){switch(response.error.code){case'INVALID_PARAMETERS':$errorMessage.text(emailOctopus.invalidParametersErrorMessage);return;case'BOT_SUBMISSION':$errorMessage.text(emailOctopus.botSubmissionErrorMessage);return;}}
$errorMessage.text(emailOctopus.unknownErrorMessage);},ajaxSubmit:function($form){$.ajax({type:$form.attr('method'),url:$form.attr('action'),data:$form.serialize(),success:function(){emailOctopus.ajaxSuccess($form);},error:function(textStatus){emailOctopus.ajaxError($form,textStatus);},});}}
$(function(){$('.email-octopus-form').submit(function(e){var $form=$(this);var $errorMessage=$form.siblings('.email-octopus-error-message');var emailAddress=$form.find('.email-octopus-email-address').val();$errorMessage.empty();if(emailOctopus.isBotPost($form)){$errorMessage.text(emailOctopus.botSubmissionErrorMessage);}else if(!$.trim(emailAddress)){$errorMessage.text(emailOctopus.missingEmailAddressMessage);}else if(!emailOctopus.basicValidateEmail(emailAddress)){$errorMessage.text(emailOctopus.invalidEmailAddressMessage);}else{emailOctopus.ajaxSubmit($form);}
return false;});});

// ------------------------------------------------------------------------
// Template Download Modal - outsourced to Nic Appleby
// ------------------------------------------------------------------------


// Create an immediately invoked functional expression to wrap our code
(function templateModal() {

  // Define our constructor 
  this.Modal = function() {

    // Create global element references
    this.closeButton = null;
    this.modal = null;
    this.overlay = null;

    // Determine proper prefix
    this.transitionEnd = transitionSelect();

    // Define option defaults 
    var defaults = {
      autoOpen: false,
      className: 'fade-and-drop',
      closeButton: true,
      content: "",
      maxWidth: 640,
      minWidth: 280,
      overlay: true
    }

    // Create options by extending defaults with the passed in arugments
    if (arguments[0] && typeof arguments[0] === "object") {
      this.options = extendDefaults(defaults, arguments[0]);
    }

    if(this.options.autoOpen === true) this.open();

  }

  // Public Methods

  Modal.prototype.close = function() {
    var _ = this;
    this.modal.className = this.modal.className.replace(" hd-open", "");
    this.overlay.className = this.overlay.className.replace(" hd-open",
      "");
    this.modal.addEventListener(this.transitionEnd, function() {
      _.modal.parentNode.removeChild(_.modal);
    });
    this.overlay.addEventListener(this.transitionEnd, function() {
      if(_.overlay.parentNode) _.overlay.parentNode.removeChild(_.overlay);
    });
  }

  Modal.prototype.open = function() {
    buildOut.call(this);
    initializeEvents.call(this);
    window.getComputedStyle(this.modal).height;
    this.modal.className = this.modal.className +
      (this.modal.offsetHeight > window.innerHeight ?
        " hd-open hd-anchored" : " hd-open");
    this.overlay.className = this.overlay.className + " hd-open";
    setTimeout(function() {
      var url = document.getElementById("modal-content").getAttribute("data-download-url");
      var title = this.modal.modal.querySelectorAll("div.modal-title")[0];
      location.replace(url);
      title.innerHTML = "Your download has begun :)";
    }, 5000);
  }

  // Private Methods

  function buildOut() {

    var content, contentHolder, docFrag;

    /*
     * If content is an HTML string, append the HTML string.
     * If content is a domNode, append its content.
     */

    if (typeof this.options.content === "string") {
      content = this.options.content;
    } else {
      content = this.options.content.innerHTML;
    }

    // Create a DocumentFragment to build with
    docFrag = document.createDocumentFragment();

    // Create modal element
    this.modal = document.createElement("div");
    this.modal.className = "hd-modal " + this.options.className;
    this.modal.style.minWidth = this.options.minWidth + "px";
    this.modal.style.maxWidth = this.options.maxWidth + "px";

    // If closeButton option is true, add a close button
    if (this.options.closeButton === true) {
      this.closeButton = document.createElement("button");
      this.closeButton.className = "hd-close close-button";
      this.closeButton.innerHTML = "&times;";
      this.modal.appendChild(this.closeButton);
    }

    // If overlay is true, add one
    if (this.options.overlay === true) {
      this.overlay = document.createElement("div");
      this.overlay.className = "hd-overlay " + this.options.className;
      docFrag.appendChild(this.overlay);
    }

    // Create content area and append to modal
    contentHolder = document.createElement("div");
    contentHolder.className = "hd-content";
    contentHolder.innerHTML = content;
    this.modal.appendChild(contentHolder);

    // Append modal to DocumentFragment
    docFrag.appendChild(this.modal);

    // Append DocumentFragment to body
    document.body.appendChild(docFrag);

  }

  function extendDefaults(source, properties) {
    var property;
    for (property in properties) {
      if (properties.hasOwnProperty(property)) {
        source[property] = properties[property];
      }
    }
    return source;
  }

  function initializeEvents() {

    if (this.closeButton) {
      this.closeButton.addEventListener('click', this.close.bind(this));
    }

    if (this.overlay) {
      this.overlay.addEventListener('click', this.close.bind(this));
    }

  }

  function transitionSelect() {
    var el = document.createElement("div");
    if (el.style.WebkitTransition) return "webkitTransitionEnd";
    if (el.style.OTransition) return "oTransitionEnd";
    return 'transitionend';
  }

}());

var modalContent = document.getElementById('modal-content');

var modal = new Modal({
  content: modalContent
});

var triggerButton = document.getElementById('trigger');

triggerButton.addEventListener('click', function() {
  modal.open();
});
