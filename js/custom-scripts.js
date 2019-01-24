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

