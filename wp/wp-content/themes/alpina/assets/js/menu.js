jQuery('.navbar-toggler').on('click', function () {
    jQuery('header').toggleClass('header-mobile');
    jQuery('header .nav-link').toggleClass('link-secondary text-black');
    jQuery('header .navbar-toggler').toggleClass('bg-white bg-dark')
    .children('span').toggleClass('navbar-toggler-icon text-white bi bi-x text-black');
});