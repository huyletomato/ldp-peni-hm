$(document).ready(function(){

    $(".back_down").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    var maxHeight = -1;

    $('.bg_blue').each(function() {
        maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
    });

    $('.bg_blue').each(function() {
        $(this).height(maxHeight);
    });


    $("#lof_go_top, .toptop,.lendau").click(function(){
        $("html,body").animate({scrollTop:0}, '300');
    });
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll>300){
            $("#lof_go_top").fadeIn();
        }else{
            $("#lof_go_top").fadeOut();
        }
    });

    $( ".button_register_blog, .ready" ).one( "click", function() {
        if($(".modal-content .form_resgiter").length == 0){
            $(".form_resgiter").clone().appendTo(".modal-content");
        }

    });

    $('.bs-example-modal-sm').on('shown.bs.modal', function(){
        BaseFormValidation.init();
        $('.modal-content').off();
        $('.select2').remove();
        jQuery(function () {
            App.initHelpers('select2');
        });
        //console.log(12355);
    });


    function throttle(f, delay){
        var timer = null;
        return function(){
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = window.setTimeout(function(){
                    f.apply(context, args);
                },
                delay || 2000);
        };
    }

    $(function () {
        $('[data-toggle="popover"]').popover()
    });

    $('.multiple').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4500,
        speed: 500,
        prevArrow: '<button type="button" data-role="none" class="slick-prev slick-prev3" aria-label="Previous" tabindex="0" role="button">Previous</button>',
        nextArrow: '<button type="button" data-role="none" class="slick-next slick-next3" aria-label="Next" tabindex="0" role="button">Next</button>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },

            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });
    $('.slick-prev3').click(function(e){
        e.preventDefault();
        $('.single_slider_next').click();
    });
    $('.slick-next3').click(function(e){
        e.preventDefault();
        $('.single_slider_prev').click();
    });



    $('.multiple6').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        autoplay: true,
        autoplaySpeed: 4500,
        speed: 500,
        prevArrow: '<button type="button" data-role="none" class="slick-prev slick-prev6" aria-label="Previous" tabindex="0" role="button">Previous</button>',
        nextArrow: '<button type="button" data-role="none" class="slick-next slick-next6" aria-label="Next" tabindex="0" role="button">Next</button>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },

            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });
    $('.slick-prev6').click(function(e){
        e.preventDefault();
        $('.single_slider_next').click();
    });
    $('.slick-next6').click(function(e){
        e.preventDefault();
        $('.single_slider_prev').click();
    });

    // setTimeout(function(){
    //     $('#myModal-thong-bao').modal('show');
    // }, 4000);
});



