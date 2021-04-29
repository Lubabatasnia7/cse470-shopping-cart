var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("nav").style.top = "0";
  } else {
    document.getElementById("nav").style.top = "-160px";
  }
  prevScrollpos = currentScrollPos;
};

$('#owl-demo').owlCarousel({
 loop:true,
 // nav:true,
 animateOut: 'fadeOut',
 autoplay: 3000,
 items : 1,
});
AOS.init();
