<!DOCTYPE html>
<html>

<head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $page_title; ?></title>

    <link href="<?php echo Router::fullbaseUrl() ?>/css/styles.css" rel="stylesheet" />

    <script src="<?php echo Router::fullbaseUrl() ?>/js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo Router::fullbaseUrl() ?>/js/css3-mediaqueries.js"></script>
    <script src="<?php echo Router::fullbaseUrl() ?>/js/html5.js"></script>

    <!-- jquery.fractionslider lib -->
    <link href="<?php echo Router::fullbaseUrl() ?>/js/lib/jquery.fractionslider/fractionslider.css" rel="stylesheet">
    <script src="<?php echo Router::fullbaseUrl() ?>/js/lib/jquery.fractionslider/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>
    <!-- /jquery.fractionslider lib -->

    <!-- jquery.selectBox.js -->
    <link href="<?php echo Router::fullbaseUrl() ?>/js/lib/jquery.formstyler/formstyler.css" rel="stylesheet">
    <script src="<?php echo Router::fullbaseUrl() ?>/js/lib/jquery.formstyler/jquery.formstyler.js" type="text/javascript" charset="utf-8"></script>
    <!-- /jquery.selectBox -->

    <script src="<?php echo Router::fullbaseUrl() ?>/js/scripts.js"></script>
</head>

<body>

<div id="overlay">

<?php //echo $this->element('mini_main_menu'); ?>

<!-- Header -->
<header>
    <div class="container">
        <?php echo $this->element('main_menu'); ?>
    </div>
    <div class="rainbow"></div>
</header>
<!-- /Header -->

<!-- Page Content -->
<?php echo $this->fetch('content'); ?>
<!-- /Page Content -->

<!-- Order Project -->
<section id="order_project">
    <div class="fence"></div>
    <div class="order_project_content">
        <div class="container">
            <ul class="unstyled full_width">
                <li class="first"><div class="round or"><span>или</span></div>
                    <h3>Заказать проект</h3>
                    <h4>Узнать цену</h4>
                </li>
                <li class="second"><p>Вы не знаете с чего начать, тогда <br />скачайте и заполните наш бриф!</p></li>
                <li class="third">
                    <button>скачать бриф</button>
                </li>
            </ul>

            <div class="contact_form">
                <form action="#" method="post">
                    <div class="full_width">
                        <div class="input_drop">
                            <input type="text" placeholder="Что делаем?" readonly/>
                            <div class="arrow"></div>
                            <div class="drop_block">
                                <div class="radio-btn">
                                    <input class="field" type="checkbox" id="r_01" value="Дизайн" name="r_01">
                                    <label for="r_01" class="radio-label">Дизайн</label>
                                </div>
                                <div class="radio-btn">
                                    <input class="field" type="checkbox" id="r_02" value="Фирменый стиль" name="r_02">
                                    <label for="r_02" class="radio-label">Фирменый стиль</label>
                                </div>
                                <div class="radio-btn">
                                    <input class="field" type="checkbox" id="r_03" value="Разработка сайта" name="r_03">
                                    <label for="r_03" class="radio-label">Разработка сайта</label>
                                </div>
                                <div class="radio-btn">
                                    <input class="field" type="checkbox" id="r_04" value="Продвижение" name="r_04">
                                    <label for="r_04" class="radio-label">Продвижение</label>
                                </div>
                            </div>
                        </div>
                        <input class="placeH_class" type="text" placeholder="Ваше имя *" />
                        <input class="placeH_class" type="text" placeholder="E-mail *" />
                    </div>
                    <textarea class="placeH_class" placeholder="Напишите нам сообщение или оставьте телефон для обратного звонка"></textarea>
                    <div class="right breaf">
                        <p>У вас уже есть ТЗ или заполненный бриф?</p>
                        <input type="file" />
                    </div>
                    <div class="clearfix"></div>
                    <input type="submit" value="Отправить" />
                </form>
            </div>
            <img src="img/order/papper.png" alt="papper" class="papper">
            <img src="img/order/envelope.png" alt="envelope" class="envelope">
            <img src="img/order/pan.png" alt="pan" class="pan">
            <img src="img/order/konvert.png" alt="konvert" class="konvert">
            <img src="img/order/calculator.png" alt="calculator" class="calculator">
        </div>
    </div>
    <div class="rainbow"></div>
</section>
<!-- /Order Project -->

<!-- Social Media -->
<section id="social_media">
    <div class="text-center">
        <ul class="unstyled ds_inline">
            <li><a href="#"><img src="img/social_media/facebook.png" alt=""/></a></li>
            <li><a href="#"><img src="img/social_media/twitter.png" alt=""/></a></li>
            <li><a href="#"><img src="img/social_media/vimeo.png" alt=""/></a></li>
        </ul>
    </div>
</section>
<!-- /Social Media -->

<!-- Footer -->
<footer>
    <div class="container">
        <div class="logo clearfix left">
            <a href="#" class="left"><img src="img/footer/logo.png" alt="" /></a>
            <div>
                <p><span>unicorn</span> | 2014</p>
                <p>Единороги спасут мир</p>
            </div>
        </div>
        <div class="right">
            <ul class="unstyled">
                <li>
                    <h4>Skype</h4>
                    <p>unicorn.ua</p>
                </li>
                <li>
                    <h4>Email</h4>
                    <p>info@unicorn.ua</p>
                </li>
                <li>
                    <h4>Телефон</h4>
                    <p class="phone"><span>(048)</span> 258-87-65</p>
                </li>
            </ul>

        </div>
    </div>
</footer>

<!-- /Footer -->


</body>
</html>