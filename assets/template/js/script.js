$(document).ready(function() {

    // scroll progress 
    var winHeight = $(window).height(), 
    docHeight = $(document).height(),
    progressBar = $('progress'),
    max, value;

    /* Set the max scrollable area */
    max = docHeight - winHeight;
    progressBar.attr('max', max);
    console.log(max);
    
    $(document).on('scroll', function(){
        value = $(window).scrollTop();
        progressBar.attr('value', value);
        $('.neighbors-box').hide();
        if($(window).scrollTop()+$(window).height()<=$(document).height()){
            $('.neighbors-box').fadeIn(100);
        }
        console.log(value);
    });

    // counter
    $(".uSocial-Share").bind("click", function() {
        var link = $(this);
        var id = link.data("id");
        console.log(id);
        $.ajax({
            url: "counter.php",
            type: "post",
            data: {id:id}, // Передаем ID нашей статьи
            dataType: "json",
            success: function(result) {
                if (!result.error){ //если на сервере не произойло ошибки то обновляем количество лайков на странице
                    $('.counter').text(result.count);
                    console.log(result.count);
                }
            }
        });
    });

    // Выпадающий блок в блоге
    // $('.dontRead__item-mail a').on('click', function(){
    //     $('.mail__hidden-block').slideToggle(400); 
    //  });

    // Переключени кнопки "нет времени читать" в блоге
    $('.dontRead__btn-hide').hide();
    $('.dontRead__btn-show').on('click', function(){
        if ($('.dontRead__btn-show').is(":visible")) {
            $(this).hide();
            $('.dontRead__btn-hide').show();
        }
    });
    $('.dontRead__btn-hide').on('click', function(){
        if ($('.dontRead__btn-hide').is(":visible")) {
            $('.dontRead__btn-hide').hide();
            $('.dontRead__btn-show').show();
        }
    });
   

    // Выпадающий блок в блоге
    $('.dontTimeToRead__hidden-block').hide(); 
    $('.dontTimeToRead__btn').on('click', function(){
        $('.dontTimeToRead__hidden-block').slideToggle(300); 
     });
    
    
    // Текущяя активная ссылка
    $('.navContent__item1 a').each(function () {
        if (this.href == location.href) {
            $(this).addClass('active-here');
        }
    });

    // Текущяя активная ссылка
    $('.ajax-input').on('click', function () {
        if($('.ajax-input').hasClass('active-here')){
            $('.ajax-input').removeClass('active-here');
        } else {
            $(this).addClass('active-here');
        }
        $(this).addClass('active-here');
    });

    // Текущяя активный таб
    $('.contentTabs__item a').each(function () {
        if (this.href == location.href) {
            $(this).addClass('active-tab');
        }
    });

    // rotate360
    $('.rotate360').slick({
        dots: false,
        infinite: true,
        speed: 10,
        slidesToShow: 1,
        autoplay: true,
        draggable: true,
        adaptiveHeight: true,
        mobileFirst: true,
        fade: true,
        autoplaySpeed: 700,
        prevArrow: '<button type="button" class="rotate360-arrow-left"><img src="/assets/template/img/arrow-left.png"></button>',
        nextArrow: '<button type="button" class="rotate360-arrow-right"><img src="/assets/template/img/arrow-right.png"></button>'
      });
    
    // slider
    $('.sl-slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        autoplay: true,
        draggable: true,
        adaptiveHeight: true,
        mobileFirst: true
      });

    // скролл топ
    $('.footer__arrow-up > i').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    // Выпадающий блок в шапке
    $('.read-more').click(function() {
        $(this).css('opacity', '0');
        $('.read-more__hidden').slideDown();
        if ($(".menu").css('height') > '0px') {
            $('body,html').animate({
                scrollTop: 400
            }, 500);
            return false;
        }
    });

    $('.read-more__hidden > a').click(function() {
        $('.read-more').css({
            'opacity':'1',
            'transition-delay': '0.3s'
        });
        $(".read-more__hidden").slideUp();
        if ($(".menu").css('height') > '0px') {
            $('body,html').animate({
                scrollTop: 400
            }, 500);
            return false;
        }
    });


     // iziModal
     $("#modal").iziModal({
        zindex: 9999,
        width: 2000,
     });
     $(document).on('click', '.trigger', function (event) {
         event.preventDefault();
         $('#modal').iziModal('open');
     });

    // !---- main menu ---->
        // $(".classname").css("color","white");
        value=750;
        if($(window).width() < value){
            $(".hamburger").click(function() {
                if ($(".menu").css('height') == '0px') {
                    $('.menu').css({
                        'height':'1000px',
                        'padding': '115px 0px 150px 0px'
                    });
                    $('.menu__cover').css({
                        'opacity': '1',
                        'transition-delay': '0.5s',
                    });
                    $("#top-line").addClass("hamburger__top");
                    $("#mid-line").addClass("hamburger__mid");
                    $("#bot-line").addClass("hamburger__bot");
                } else {
                    if ($(".menu__cover").css('opacity') == '1') {
                        $(".menu__cover").css({
                            'opacity': '0',
                            'transition': 'opacity 0.1s ease 0.1s',
                        });
                    }
                    $('.menu').css({
                        'height':'0px',
                        'padding': '0px',
                    });
                    $("#top-line").removeClass("hamburger__top");
                    $("#mid-line").removeClass("hamburger__mid");
                    $("#bot-line").removeClass("hamburger__bot");
                }
            });
        } else {
            $(".hamburger").click(function() {
                if ($(".menu").css('height') == '0px') {
                    $('.menu').css({
                       'height':'200px',
                        'padding': '115px 0px 60px 0px',
                        'transition': 'all 0.5s ease 0.1s',
                    });
                    $('.menu__cover').css({
                        'opacity': '1',
                        'transition': 'opacity 0.3s ease 0.3s',
                        'transition-delay': '0.3s',
                    });

                    $("#top-line").addClass("hamburger__top");
                    $("#mid-line").addClass("hamburger__mid");
                    $("#bot-line").addClass("hamburger__bot");
                } else {
                    if ($(".menu__cover").css('opacity') == '1') {
                        $(".menu__cover").css({
                            'opacity': '0',
                            'transition': 'opacity 0.2s ease 0.2s',
                        });
                    }
                    $('.menu').css({
                        'height':'0px',
                        'padding': '0px',
                        'transition': 'all 0.5s ease 0.3s',
                    });
                    $("#top-line").removeClass("hamburger__top");
                    $("#mid-line").removeClass("hamburger__mid");
                    $("#bot-line").removeClass("hamburger__bot");
                }
            });
        }

        // nouislider
        var snapSlider = document.getElementById('slider-snap');
        var input0 = document.getElementById('input-lower');
        var input1 = document.getElementById('input-upper');
        var inputs = [input0, input1];
        noUiSlider.create(snapSlider, {
            start: [ 500, 10000 ],
            snap: true,
            connect: true,
            range: {
                'min': 500,
                '16.6%': 1000,
                '33.2%': 2000,
                '49.8%': 3000,
                '66.6%': 4000,
                '83.2%': 5000,
                'max': 10000
            },
            pips: {
                mode: 'values',
                values: [500, 1000, 2000, 3000, 4000, 5000, 10000],
                density: 4,
            },
        });

        snapSlider.noUiSlider.on('update', function( values, handle ) {
            inputs[handle].value = Math.round(values[handle]);
        });
        // end nouislider 

        // nouislider time
         var snapSliderTime = document.getElementById('slider-snap-time');
         var input0 = document.getElementById('input-lower-time');
         var input1 = document.getElementById('input-upper-time');
         var inputTimes = [input0, input1];
         noUiSlider.create(snapSliderTime, {
             start: [ 0, 8 ],
             snap: true,
             connect: true,
             range: {
                 'min': 0,
                 '12.5%': 1,
                 '25%': 2,
                 '37.5%': 3,
                 '50%': 4,
                 '62.5%': 5,
                 '75%': 6,
                 '87.5%': 7,
                 'max': 8
             },
             pips: {
                mode: 'values',
                values: [0, 1, 2, 3, 4, 5, 6, 7, 8],
                density: 4,
            },
         });

         snapSliderTime.noUiSlider.on('update', function( values, handle ) {
            inputTimes[handle].value = Math.round(values[handle]);
        });
        // end nouislider time


    $('.ank-text-input').focus(function(){
        $(this).prev().css({
            'font-size': '14px',
        });
    });
    $('.ank-text-input').blur(function(){
        $(this).prev().css({
            'font-size': '20px',
        });
    });
});
//
// window onload
//
$(window).on('load', function(){

    // masonry
    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
      });
    
     // wow animation
     new WOW().init();
    
    // прелоадер
    var $preloader = $('#page-preloader'),
    $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.delay(10).fadeOut('slow');
});