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
