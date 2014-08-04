



<div class="secondary_nav">
    <div class="container">
        <ul class="unstyled full_width our_works">
            <li class="r-bracket"><a href="#">Все работы</a></li>
            <li><a href="#">Дизайн сайта</a></li>
            <li><a href="#">полиграфия</a></li>
            <li><a href="#">Моделирование</a></li>
            <li><a href="#">Сайт под ключ</a></li>
            <li><a href="#">еще категория</a></li>
        </ul>
    </div>
</div>

<div class="container">
    <section id="portfolio" class="clearfix">
        <ul class="unstyled">

            <?php foreach($all_work as $work): ?>

                <?php
                    $work_id = $work['portfolio']['id'] ;
                    $work_title = $work['portfolio']['title'];
                    $work_image = $work['portfolio']['image'];
                    $brief_desc = $work['portfolio']['brief_description'];
                ?>
                <li>
                    <a href="/portfolio/single/<?php echo $work_id; ?>">
                        <div class="portfolio_img">
                            <img src="<?php echo $work_image; ?>" alt="" />
                            <div class="block_name text-center">
                                <span class="company"><?php echo $work_title; ?></span>
                                <div class="line"></div>
                                <i href="#" class="icon adap"></i>
                                <i href="#" class="icon seo"></i>
                                <i href="#" class="icon dev"></i>
                                <i href="#" class="icon des"></i>
                            </div>
                        </div>
                        <h3><?php echo $work_title; ?></h3>
                        <p><?php echo $brief_desc; ?></p>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

    </section>

</div>

<?php

//debug($all_work);
?>