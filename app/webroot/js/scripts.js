$(document).ready(function() {

    //Табы на Главной странице


    $('.tabs li').on('click', function(event){
        event.preventDefault();

        $('.tabs li').removeClass('active');
        $(this).addClass('active');

        if($(this).hasClass('tab_design')){
            $('.tabs_content_div').removeClass('ds_block').hide();
            $('#tab1').show();
        }
        else if($(this).hasClass('tab_dev')){
            $('.tabs_content_div').removeClass('ds_block').hide();
            $('#tab2').show();
                //addClass('ds_block');
        }
        else if($(this).hasClass('tab_seo')){
            $('.tabs_content_div').removeClass('ds_block').hide();
            $('#tab3').show();
        }
        else if($(this).hasClass('tab_consult')){
            $('.tabs_content_div').removeClass('ds_block').hide();
            $('#tab4').show();
        }
    });

    //Инициализация слайдера
    $(window).load(function(){
        $('.slider').fractionSlider({
            'fullWidth': 			true,
            'controls': 			true,
            'pager': 				true,
            'responsive': 			true,
            'dimensions': 			"1000,400",
            'increase': 			false,
            'pauseOnHover': 		true,
            'slideEndAnimation': 	true
        });

    });

    $(function() {
        $("input[type='file'], select").styler();
    });

    //Навигация
//    $(function(){
//        $(document).scroll(function() {
//            var top = $(document).scrollTop();
//
//            var header = $('header');
//
//            if(top > 100){
//                header.addClass('float_mini_menu').stop().animate({'top':'0'});
//            }
//            else{
//                header.stop().removeClass('float_mini_menu');
//            }
//
//        });
//    });

//    $(google.maps.MapOptions).load(function(){
//        google.maps.MapOptions
//    })



});
