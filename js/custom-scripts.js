// jQuery(function($) {

//   // Adds and removes button element on dropdown item depending on screen width.
//   function addDropdownBtn() {
//       if($(window).innerWidth() > 768) {
//           $('.dropdown .nav-link').wrap("<button class='btn btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' type='button'></button>");
//       }
//   }

//   function removeDropdownBtn() {
//     if($(window).innerWidth() < 768) {
//       if ($('.dropdown .nav-link').parent().is("<button class='btn btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' type='button'></button>")) {
//         $('.dropdown .nav-link').unwrap();
//       }
//     } else if ($(window).innerWidth() > 768 && $('.dropdown .nav-link').parent().not("<button class='btn btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'></button>")){
//       $('.dropdown .nav-link').wrap("<button class='btn btn-sm' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'></button>");
//     }
//   }

//   // Fire.
//  addDropdownBtn();

//   // And recheck when window gets resized.
//   $(window).bind('resize',function(){
//       removeDropdownBtn();
//   });
// });

jQuery(function($) {
  $("body #gform_submit_button_1").val("Contact Us");

  $(".products").on('click', function() {
    event.preventDefault();
    window.location = '/products-overview/';
  });

  $(".services").on('click', function() {
    event.preventDefault();
    window.location = '/services-overview/';
  });

  $(".apps").on('click', function() {
    event.preventDefault();
    window.location = '/applications-overview/';
  });

  $(".resources").on('click', function() {
    event.preventDefault();
    window.location = '/resources-overview/';
  });

  $(".about").on('click', function() {
    event.preventDefault();
    window.location = '/about-overview/';
  });




});