<?php

echo $this->Form->create('slider', array('enctype' => 'multipart/form-data'));?>
<!-- Этот элемент проще написать прямо в html, чтобы не разбираться с именованием полей hidden-элементов в FormHelper'е. -->
<input type="hidden" name="MAX_FILE_SIZE" value="700000"/>
<?php echo $this->Form->input('post_file', array('type' => 'file', 'label' => 'Выберите файл: '));?>
<?php echo $this->Form->end('Добавить');

?>


<?php //debug($slider); ?>



<!--<div class="slide">-->
<!--    <img src="img/slider/slides/01_box_top.png" width="361" height="354" data-position="-152,142" data-in="left" data-delay="200" data-out="right">-->
<!--    <img src="img/slider/slides/01_box_bottom.png" width="422" height="454" data-position="138,-152" data-in="bottomRight" data-delay="200">-->
<!--    <img src="img/slider/slides/01_waves.png" width="1449" height="115" data-position="240,17" data-in="left" data-delay="" data-out="left">-->
<!---->
<!--    <p class="claim light-green" data-position="30,30" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce">jQuery Fraction Slider</p>-->
<!--    <p class="teaser orange" data-position="90,30" data-in="left" data-step="2" data-delay="500">animate multiple elements</p>-->
<!--    <p class="teaser green" data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="3000">full control over each element</p>-->
<!--    <p class="teaser turky" data-position="90,30" data-in="left" data-step="2" data-special="cycle" data-delay="5500" data-out="none">opensource and free</p>-->
<!---->
<!--    <img src="img/slider/slides/01_outofthebox.png" data-position="20,330" data-in="bottomLeft" data-delay="500" data-out="fade" style="width:auto; height:auto">-->
<!--</div>-->




Слайде