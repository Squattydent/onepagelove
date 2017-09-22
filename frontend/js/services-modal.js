// ------------------------------------------------------------------------
// Minimal Responsive Modal Window Plugin For jQuery - modal.js
// http://www.jqueryscript.net/lightbox/Minimal-Responsive-Modal-Window-Plugin-modal-js.html
// Last updated 21 Sep 2017 
// ------------------------------------------------------------------------

(function($){ 
  function createModalObject(){

    var m=  '<div class="service-modal" id="service-modal">'+
            '<div class="service-modal-content"></div>'+
          '</div>'

    var div = document.createElement('div')
    div.innerHTML = m
    m = div.firstChild
    return m
  }
  function removeCurrentModal(id){
    $(id).remove()
  }
  function removeCurrentOverlay(){
    $('#service-modal-overlay').remove()
  }
  function createOverlay(){
    var overlay =   '<div class="service-modal-overlay" id="service-modal-overlay"></div>'  

    var div = document.createElement('div')
    div.innerHTML = overlay
    overlay = div.firstChild
    return overlay
  }



  $.modal = function(text,options){

    var defaults = {
      parent:'body',
      overlay:true,
      id:'.service-modal',
      closeOnClick: true,
      placeholder: '.service-modal-content',
      closeBtn: '',
      animateClass: 'service-modal-animate',
    },

    o = Object.assign({},defaults, options)


    removeCurrentOverlay()
    removeCurrentModal(o.id)

    var parent = document.querySelector('body')
    var modal = createModalObject()
    var overlay = createOverlay()

    o.overlay && parent.appendChild(overlay)
    parent.appendChild(modal)
    modal.querySelector(o.placeholder).innerHTML = text 


    setTimeout( function(){
      modal.classList.add(o.animateClass)
    }, 0)
    

    function handleDocumentOnClick(e){
      if(!o.closeOnClick)  return

      for (var element = e.target; element; element = element.parentNode) {
        if (element === modal) return
      }

      modal.classList.remove(o.animateClass)
      modal.addEventListener('transitionend', function(){
        this.remove()
        document.removeEventListener('mouseup', handleDocumentOnClick)
      }, false)
    }

    document.addEventListener('mouseup', handleDocumentOnClick, false)


    return modal
  }
})(jQuery)

// ------------------------------------------------------------------------
// Editable Content
// ------------------------------------------------------------------------

$(function() {
  $('.modal-msg').click(function() {
    $.modal('<audio controls autoplay controlsList="nodownload"><source src="http://onepagelove.com/wp-content/themes/onepagelove/media/f4c.mp4" type="audio/mp4"></p><p>Your user agent does not support the HTML5 Audio element.</p></audio>');
  });
  $('.modal-form').click(function () {
    var form = '<form>'+
            '<input type="text" name="username" placeholder="username" /><br>'+
            '<input type="text" name="password" placeholder="password" /><br>'+
            '<div class="btn submitBtn">Submit</div>'+
          '</form>';
    $.modal(form);
  });
  
  $('.modal-vid').click(function () {
    $.modal('<iframe width="560" height="315" src="https://www.youtube.com/embed/aQcXTZxJlZc?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>');
  });
});
