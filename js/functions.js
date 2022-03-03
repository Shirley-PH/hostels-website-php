//classlist-shows/gets all clases
//contains -checks classlist for specific class
// add- add class
// toggle - toggles class

const navToggle = document.querySelector('.nav-toggle');
const links = document.querySelector('.links');

navToggle.addEventListener('click', function () {
  
  //console.log(links.classList); 
  //console.log(links.classList.contains('random')); 
  /*
  if (links.classList.contains('show-links')) {
    links.classList.remove('show-links')
  } else {
    links.classList.add('show-links');
  }*/

  links.classList.toggle('show-links'); 
})


/* CARRUCEL */
$(document).ready(function () {
  
  const $owlCarousel = $(".owl-carousel").owlCarousel({
     items: 1,
     loop: true,
     nav: true,
     navText: [
       '<svg width="50" height="50" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>',
       '<svg width="50" height="50" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>'
     ]
  });
  
  $($owlCarousel).on("changed.owl.carousel", e => {
  $(".owl-slide-animated").removeClass("is-transitioned");
  const $currentOwlItem = $(".owl-item").eq(e.item.index);
  $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");
  });
  
  /*section*/
  
  $(".owl-carousel").on("initialized.owl.carousel", () => {
  setTimeout(() => {
    // other code here
     
    $("section").show();
  }, 200);
  });
  
  function setOwlDotsPosition() {
  const $target = $(".owl-item.active .owl-slide-text");
  doDotsCalculations($target);
  }
  
  function doDotsCalculations(el) {
  const height = el.height();
  const {top, left} = el.position();
  const res = height + top + 20;
 
  $(".owl-carousel .owl-dots").css({
    top: `${res}px`,
    left: `${left}px`
  });
  }
  //REDIMENSIONAR EL TAMAÑOO DEL NAVEGADOR

  $($owlCarousel).on("resize.owl.carousel", () => {
  setTimeout(() => {
    setOwlDotsPosition();
  }, 50);
  });
  
  //POSICIONAMIENTO DEPENDIENDO DEL CONTENIDO

  $($owlCarousel).on("changed.owl.carousel", e => { 
  // other code here
 
  const $currentOwlItem = $(".owl-item").eq(e.item.index);
  const $target = $currentOwlItem.find(".owl-slide-text");
  doDotsCalculations($target);
  });

  $($owlCarousel).trigger("refresh.owl.carousel");
  
});

