// // dropdown multilevel
// $('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('href', 'javascript:;').addClass('dropdown-toggle');
//   $('.dropdown-submenu > a').on("click", function(e) {
//     var dropdown = $(this).parent().find(' > .show');
//     $('.dropdown-submenu .dropdown-menu').not(dropdown).removeClass('show');
//     $(this).next('.dropdown-menu').toggleClass('show');
//     e.stopPropagation();
//   });

//   // hide all open menus if the parent closes
//   $('.dropdown').on("hidden.bs.dropdown", function() {
//     $('.dropdown-menu.show').removeClass('show');
//   });