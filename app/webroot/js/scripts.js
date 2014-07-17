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

    // Менюшка при скролинге
    $('header').addClass('header_top');
    $('header .container').css({'height':'145px','overflow':'hidden','transition':'height .3s'});
    // $('.slider-overlay').css('margin','147px auto 0');
     $('nav ul li').css({'transition':'line-height .3s'});
     $('#main_menu .lang').css({'transition':'top .3s'});
    $(document).scroll(function() {
        if ($(document).scrollTop() >= 73) 
        {
           $('.header_top .container').css({'height':'94px'});
           $('.header_top nav ul li').css({'line-height':'97px'});
           $('.header_top nav .lang').css({'top':'25px'});
           $('header').removeClass('header_top').addClass('header_down');
        } 
        else 
        {
           $('.header_down .container').css({'height':'145px'});
           $('.header_down nav ul li').css({'line-height':'140px'});
           $('.header_down nav .lang').css({'top':'45px'});  
           $('header').removeClass('header_down').addClass('header_top'); 
        }
    });   


    // При обновлении страницы, все input обнуляются
    $(window).load(function(){
        $('input[type=text],textarea').val('');
        $('#order_project .input_drop input[type=checkbox]').removeAttr('checked');
    });
    //placeholder 
    $('input.placeH_class,textarea.placeH_class').focus(function(){
       $(this).data('placeholder',$(this).attr('placeholder'))
       $(this).attr('placeholder','');
    });
    $('input,textarea').blur(function(){
       $(this).attr('placeholder',$(this).data('placeholder'));
    });

  // Выпадающий список чекбоксов в форме заказа
  $('.input_drop').on('click',function(e) {
      e.stopPropagation();
      if ($(this).hasClass('a')) {
        $(this).find('.drop_block').slideUp();
        $(this).removeClass('a');
      } else {
        $(this).find('.drop_block').slideDown();
        $(this).addClass('a');
      }
  });  
        // При клике внутри - не закрывать
        $('.input_drop .drop_block,.input_drop .radio-btn').on('click',function(e) {
            e.stopPropagation();
        }); 
        // Закрытие при клике в стороне
        $('body').on('click',function(){
            $('.input_drop').find('.drop_block').slideUp();
            $('.input_drop').removeClass('a');
        });
   // При клике на чекбокс вноситься текс в инпут
   $('.input_drop .radio-btn').on('click',function() {
    if ($('#order_project .input_drop input[type=checkbox]').filter(':checked').length <= 1) {
        var TextCheckBox = $(this).closest('.input_drop').find('input[type=checkbox]').filter(':checked').first().closest('.radio-btn').find('label').text();
        $('#order_project .input_drop input').val(TextCheckBox);
    } else if ($('#order_project .input_drop input[type=checkbox]').filter(':checked').length >= 2) {
        var TextInput = $('#order_project .input_drop input').val();
        $('#order_project .input_drop input').val(TextInput.replace(/\./g, "")+'...');
    }
        
   });   

});
