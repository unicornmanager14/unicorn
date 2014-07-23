<!-- Slider -->
<div class="slider-overlay clearfix">
    <div class="slider">
        <div class="fs_loader"></div>
        <?php foreach($slider as $slides): ?>
            <?php echo $slides['slider']['path']; ?>
        <?php endforeach; ?>
    </div>
</div>
<!-- /Slider -->

<div class="container">

    <!-- Кто мы -->
    <section id="who_we_are">
        <div class="round what"><a href="#">Что?</a></div>
        <h1>Кто<span> мы</span></h1>
        <p>Мы – молодая команда энтузиастов, которые не попросту <span>делают сайты</span>,</p>
        <p>а воплощают в реальность миллионы различных идей, делая жизнь ярче, удобней и легче.</p>
        <a href="#" class="readmore">Подробнее</a>
    </section>
    <!-- /Кто мы -->

    <!-- Our Services -->
    <section id="our_services">
        <div class="tabs">
            <ul class="unstyled full_width">
                <li class="tab_design active"><a href="#">Дизайн</a></li>
                <li class="tab_dev"><a href="#">Разработка</a></li>
                <li class="tab_seo"><a href="#">Продвижение</a></li>
                <li class="tab_consult"><a href="#">Консультирование</a></li>
            </ul>

            <div class="tabs_content">
                <div id="tab1" class="tabs_content_div ds_block">

                    <div class="about">
                        <h3>При разработке дизайна веб-сайта мы предлагаем на выбор несколько концепций дизайна.</h3>
                        <p>Разработка всегда начинается с подготовки  индивидуального брифа на дизайн, который  разрабатывается в отдельности под каждый  проект и клиента. </p>
                        <div class="text-center"><a href="#" class="readmore">Подробнее</a></div>
                        <div class="notebook"><img src="img/our_services/design/notebook.png" alt="notebook"></div>
                        <div class="flash"><img src="img/our_services/design/flash.png" alt="notebook"></div>
                        <div class="glasses"><img src="img/our_services/design/glasses.png" alt="notebook"></div>
                        <div class="cofee"><img src="img/our_services/design/cofee.png" alt="notebook"></div>
                        <div class="fan"><img src="img/our_services/design/fan.png" alt="notebook"></div>
                        <div class="pancil"><img src="img/our_services/design/pancil.png" alt="notebook"></div>
                        <div class="triangle"><img src="img/our_services/design/triangle.png" alt="notebook"></div>
                    </div>

                </div>
                <div id="tab2" class="tabs_content_div">2</div>
                <div id="tab3" class="tabs_content_div">3</div>
                <div id="tab4" class="tabs_content_div">4</div>
            </div>
        </div>
    </section>
    <!-- /Our Services -->
</div>
