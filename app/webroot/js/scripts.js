$(document).ready(function() {


      function Tab_1_On(){  // Анимация Таба Дизайна
          $('.tabs_content .design_tab .glasses').animate({'left':'255px'},400);
          $('.tabs_content .design_tab .cofee').animate({'left':'395px'},500);
          $('.tabs_content .design_tab .fan').animate({'left':'515px'},600);
          $('.tabs_content .design_tab .triangle').animate({'right':'287px'},700);
          $('.tabs_content .design_tab .pancil').animate({'right':'235px'},800);
          $('.tabs_content .design_tab .flash').animate({'right':'435px'},900);
          $('.tabs_content .design_tab .notebook').animate({'right':'0'},1000);
      };
      function Tab_1_Off(){   // Онуление Таба Дизайна
          $('.tabs_content .design_tab .glasses').css({'left':'2500px'});
          $('.tabs_content .design_tab .cofee').css({'left':'2500px'});
          $('.tabs_content .design_tab .fan').css({'left':'2500px'});
          $('.tabs_content .design_tab .triangle').css({'right':'-2000px'});
          $('.tabs_content .design_tab .pancil').css({'right':'-2000px'});
          $('.tabs_content .design_tab .flash').css({'right':'-2000px'});
          $('.tabs_content .design_tab .notebook').css({'right':'-2000px'});
      };
        function Tab_2_On(){  // Анимация Таба Разработка
            $('.tabs_content .development_tab .html').animate({'right':'351px'},400);
            $('.tabs_content .development_tab .hdd').animate({'right':'241px'},500);
            $('.tabs_content .development_tab .macbook').animate({'right':'-64px'},600);
            $('.tabs_content .development_tab .pizza').animate({'right':'365px'},800);
        };
        function Tab_2_Off(){   // Онуление Таба Разработка
            $('.tabs_content .development_tab .html').css({'right':'-2000px'});
            $('.tabs_content .development_tab .hdd').css({'right':'-2000px'});
            $('.tabs_content .development_tab .macbook').css({'right':'-2000px'});
            $('.tabs_content .development_tab .pizza').css({'right':'-2000px'});
            // alert('2');
        };
         function Tab_3_On(){  // Анимация Таба Продвижения
            $('.tabs_content .seo_tab .papper_02').animate({'right':'207px'},400);
            $('.tabs_content .seo_tab .papper_03').animate({'right':'148px'},500);
            $('.tabs_content .seo_tab .papper_04').animate({'right':'190px'},600);
            $('.tabs_content .seo_tab .papper_01').animate({'right':'454px'},800);
            $('.tabs_content .seo_tab .ruler').animate({'right':'273px'},1000);
            $('.tabs_content .seo_tab .folder').animate({'right':'84px'},1100);
            $('.tabs_content .seo_tab .calculator').animate({'right':'76px'},1200);
        };
         function Tab_3_Off(){  // Онуление Таба Продвижения
            $('.tabs_content .seo_tab .papper_02').animate({'right':'-2000px'},400);
            $('.tabs_content .seo_tab .papper_03').animate({'right':'-2000px'},500);
            $('.tabs_content .seo_tab .papper_04').animate({'right':'-2000px'},600);
            $('.tabs_content .seo_tab .papper_01').animate({'right':'-2000px'},800);
            $('.tabs_content .seo_tab .ruler').animate({'right':'-2000px'},1000);
            $('.tabs_content .seo_tab .folder').animate({'right':'-2000px'},1100);
            $('.tabs_content .seo_tab .calculator').animate({'right':'-2000px'},1200);
        };

    // Анимация первого таба при его первом появлении в зоне видимости
      // var bottom = $(window).height() - $('.tabs_content .tabs_content_div .about p').offset().top;
      var link = $('#order_project');
      var position = link.offset();
      var bottom = $(window).height() - position.top;
      bottom = (0 - bottom) - 200;
      $(document).scroll(function() {
        if (($(document).scrollTop() >= bottom) && ($('#tab1').hasClass('not_fulfilled'))) {
          Tab_1_On();   
          $('#tab1').removeClass('not_fulfilled'); 
        }
      }); 

          //Табы на Главной странице
    $('.tabs li').on('click', function(event){
        event.preventDefault();

        $('.tabs li').removeClass('active');
        $(this).addClass('active');

        if($(this).hasClass('tab_design')){
            $('.tabs_content_div').removeClass('ds_block').hide();
            $('#tab1').show();
            Tab_1_On();
            Tab_2_Off();
            Tab_3_Off();
        }
        else if($(this).hasClass('tab_dev')){
            $('.tabs_content_div').removeClass('ds_block').hide();
            $('#tab2').show();
            Tab_1_Off();
            Tab_2_On();
            Tab_3_Off();
                //addClass('ds_block');
        }
        else if($(this).hasClass('tab_seo')){
            $('.tabs_content_div').removeClass('ds_block').hide();
            $('#tab3').show();
            Tab_1_Off();
            Tab_2_Off();
            Tab_3_On();
        }
        else if($(this).hasClass('tab_consult')){
            $('.tabs_content_div').removeClass('ds_block').hide();
            $('#tab4').show();
            Tab_1_Off();
            Tab_2_Off();
            Tab_3_Off();
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
