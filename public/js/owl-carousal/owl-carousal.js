// Initialize Owl Carousel
$(document).ready(function () {
    // code for the main slider starts here
    $("#mainSlider.owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        smartSpeed: 1500,
        navText: [
            '<button class="prev-btn">Previous</button>',
            '<button class="next-btn">Next</button>'
        ]
    });


    $('.prev-btn').click(function () {
        $('#mainSlider.owl-carousel').trigger('prev.owl.carousel');
    });

    $('.next-btn').click(function () {
        $('#mainSlider.owl-carousel').trigger('next.owl.carousel');
    });
});


// code for the summer delights slider start here
$(document).ready(function () {
    $("#summerSlider.owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        smartSpeed: 1500,
        navText: [
            '<button class="prev-btn-second">Previous</button>',
            '<button class="next-btn-second">Next</button>'
        ],
        responsive: {
            0: {
                items: 1
            },
            490: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            },
        }
    });
    $('.prev-btn-second').click(function () {
        $('#summerSlider.owl-carousel').trigger('prev.owl.carousel');
    });

    $('.next-btn-second').click(function () {
        $('#summerSlider.owl-carousel').trigger('next.owl.carousel');
    });
});


// third carousal top cities
$(document).ready(function () {
    // code for the summer delights slider start here
    $("#topCities.owl-carousel").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplayHoverPause: true,
        smartSpeed: 1500,
        navText: [
            '<button class="prev-btn-third">Previous</button>',
            '<button class="next-btn-third">Next</button>'
        ],
        responsive: {
            0: {
                items: 1
            },
            600:{
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            },
        }
    });
    $('.prev-btn-third').click(function () {
        $('#topCities.owl-carousel').trigger('prev.owl.carousel');
    });

    $('.next-btn-third').click(function () {
        $('#topCities.owl-carousel').trigger('next.owl.carousel');
    });
});


// code for the experiences sliders start here
$(document).ready(function () {
    $("#experienceSlider.owl-carousel").owlCarousel({
        loop: true,
        autoplayHoverPause: true,
        smartSpeed: 1500,
        responsive: {
            0: {
                items: 1
            },
            490: {
                items: 2
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            },
        }
    });
});
