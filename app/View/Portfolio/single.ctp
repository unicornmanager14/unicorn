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
            <a href="#" class="link_site">bgwow.ru</a>
            <div class="line_single_work"></div>
            <div class="brief_description"><?php echo $brief_description ?></div>
        </div>

        <?php echo $page_text ?>

    </div>
</section>

<?php

//debug($single_work);dsfdsf