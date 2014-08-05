<?php
    $work_title = $single_work['0']['portfolio']['title'];
    $weblink = $single_work['0']['portfolio']['weblink'];
    $brief_description = $single_work['0']['portfolio']['brief_description'];
    $page_text = $single_work['0']['portfolio']['text'];
?>

<div class="secondary_nav">
    <div class="container">
        <ul class="unstyled full_width small_width">
            <li class=""><a href="#">Предыдущая</a></li>
            <li class="l-bracket r-bracket"><a href="#">Все работы</a></li>
            <li class=""><a href="#">Следующая</a></li>
        </ul>
    </div>
</div>

<section id="single_work">
    <div class="container">

        <div class="text-center">
            <h1><?php echo $work_title ?></h1>
            <a href="http://<?php echo $weblink ?>" class="link_site"><?php echo $weblink ?></a>
            <div class="line_single_work"></div>
            <div class="brief_description"><?php echo $brief_description ?></div>
        </div>

        <?php echo $page_text ?>
        <div class="ralated_projects">
            <div class="padding_single">
                <div class="title">ПОХОЖИЕ ПРОЕКТЫ</div>
            </div>
            <section id="portfolio">
                <ul class="unstyled full_width">
                    <li>
                        <a href="/portfolio/single/01">
                            <div class="portfolio_img">
                                <img src="/img/portfolio/01.png" alt="" />
                                <div class="block_name text-center">
                                    <span class="company">Название компании</span>
                                    <div class="line"></div>
                                    <i href="#" class="icon adap"></i>
                                    <i href="#" class="icon seo"></i>
                                    <i href="#" class="icon dev"></i>
                                    <i href="#" class="icon des"></i>
                                </div>
                            </div>
                            <h3>Название проэкта, должно быть небольше 2 строчек</h3>
                            <p>Небольшое описане, что было сделанно и т.д.</p>
                        </a>
                    </li>
                    <li>
                        <a href="/portfolio/single/02">
                            <div class="portfolio_img">
                                <img src="/img/portfolio/02.png" alt="" />
                                <div class="block_name text-center">
                                    <span class="company">Название компании</span>
                                    <div class="line"></div>
                                    <i href="#" class="icon adap"></i>
                                    <i href="#" class="icon seo"></i>
                                    <i href="#" class="icon dev"></i>
                                    <i href="#" class="icon des"></i>
                                </div>
                            </div>
                            <h3>Название проэкта, должно быть небольше 2 строчек</h3>
                            <p>Небольшое описане, что было сделанно и т.д.</p>
                        </a>
                    </li>
                    <li>
                        <a href="/portfolio/single/03">
                            <div class="portfolio_img">
                                <img src="/img/portfolio/03.png" alt="" />
                                <div class="block_name text-center">
                                    <span class="company">Название компании</span>
                                    <div class="line"></div>
                                    <i href="#" class="icon adap"></i>
                                    <i href="#" class="icon seo"></i>
                                    <i href="#" class="icon dev"></i>
                                    <i href="#" class="icon des"></i>
                                </div>
                            </div>
                            <h3>Название проэкта, должно быть небольше 2 строчек</h3>
                            <p>Небольшое описане, что было сделанно и т.д.</p>
                        </a>
                    </li>
                </ul>
            </section>
        </div>
    </div>
</section>