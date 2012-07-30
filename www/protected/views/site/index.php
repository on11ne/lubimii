<?php

date_default_timezone_set("Europe/Moscow");
setlocale(LC_ALL, "ru_RU");

$this->pageTitle = Yii::app()->name . ' - Главная';

$actions_slider = Actions::model()->findAll(array(
    "select" => "id, created, terms, teaser, title, teaser_image, url",
    "condition" => "index_flag=1 AND status=1"
));

$news_slider = News::model()->findAll(array(
    "select" => "id, date_created as created, '' as terms, teaser, title, teaser_image",
    "condition" => "index_flag=1 AND status=1"
));

?>

<?php foreach($actions_slider as $item) : ?>


<div class="slide">
    <div class="left" style="background-image:url(<?php echo $item->teaser_image; ?>)">
        <div class="cur_date">
            <div class="digit"><?php echo strftime("%d", strtotime($item->created)); ?></div>
            <div class="month"><?php echo strftime("%B", strtotime($item->created)); ?></div>
        </div>
        <div class="slogan"></div>
    </div>
    <div class="right">
        <div class="date"><?php echo $item->terms; ?></div>
        <div class="descr">
            <?php echo $item->teaser; ?>
        </div>
        <div class="buttons">
            <a href="<?php echo $item->url; ?>" class="readmore_button"></a>
        </div>
        <div class="title"><span><?php echo $item->title; ?></span></div>
    </div>
</div>

<?php endforeach; ?>