!function t(){function e(){var t,e,o;t="string"==typeof this.options.content?this.options.content:this.options.content.innerHTML,o=document.createDocumentFragment(),this.modal=document.createElement("div"),this.modal.className="hd-modal "+this.options.className,this.modal.style.minWidth=this.options.minWidth+"px",this.modal.style.maxWidth=this.options.maxWidth+"px",!0===this.options.closeButton&&(this.closeButton=document.createElement("button"),this.closeButton.className="hd-close close-button",this.closeButton.innerHTML="&times;",this.modal.appendChild(this.closeButton)),!0===this.options.overlay&&(this.overlay=document.createElement("div"),this.overlay.className="hd-overlay "+this.options.className,o.appendChild(this.overlay)),e=document.createElement("div"),e.className="hd-content",e.innerHTML=t,this.modal.appendChild(e),o.appendChild(this.modal),document.body.appendChild(o)}function o(t,e){var o;for(o in e)e.hasOwnProperty(o)&&(t[o]=e[o]);return t}function n(){this.closeButton&&this.closeButton.addEventListener("click",this.close.bind(this)),this.overlay&&this.overlay.addEventListener("click",this.close.bind(this))}function i(){var t=document.createElement("div");return t.style.WebkitTransition?"webkitTransitionEnd":t.style.OTransition?"oTransitionEnd":"transitionend"}this.Modal=function(){this.closeButton=null,this.modal=null,this.overlay=null,this.transitionEnd=i();var t={autoOpen:!1,className:"fade-and-drop",closeButton:!0,content:"",maxWidth:640,minWidth:280,overlay:!0};arguments[0]&&"object"==typeof arguments[0]&&(this.options=o(t,arguments[0])),!0===this.options.autoOpen&&this.open()},Modal.prototype.close=function(){var t=this;this.modal.className=this.modal.className.replace(" hd-open",""),this.overlay.className=this.overlay.className.replace(" hd-open",""),this.modal.addEventListener(this.transitionEnd,function(){t.modal.parentNode.removeChild(t.modal)}),this.overlay.addEventListener(this.transitionEnd,function(){t.overlay.parentNode&&t.overlay.parentNode.removeChild(t.overlay)})},Modal.prototype.open=function(){e.call(this),n.call(this),window.getComputedStyle(this.modal).height,this.modal.className=this.modal.className+(this.modal.offsetHeight>window.innerHeight?" hd-open hd-anchored":" hd-open"),this.overlay.className=this.overlay.className+" hd-open",setTimeout(function(){var t=document.getElementById("modal-content").getAttribute("data-download-url"),e=this.modal.modal.querySelectorAll("div.modal-title")[0];location.replace(t),e.innerHTML="Your template download has begun :)"},5e3)}}();var modalContent=document.getElementById("modal-content"),modal=new Modal({content:modalContent}),triggerButton=document.getElementById("trigger");triggerButton.addEventListener("click",function(){modal.open()});