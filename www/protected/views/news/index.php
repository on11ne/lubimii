<?php

date_default_timezone_set("Europe/Moscow");
setlocale(LC_ALL, "ru_RU");

$this->pageTitle = Yii::app()->name . ' - Новости';

$news_slider = News::model()->findAll(array(
    "select" => "id, date_created as created, teaser, title, teaser_image",
    "condition" => "status=1"
));

//Yii::app()->registerScriptFile(Yii::app()->baseUrl . "/assets/js/news_behavior.js");

$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl."/assets/js/news_behavior.js");

?>

<ul id="news_menu">

<?php foreach($news_slider as $item) : ?>

    <li class="first" onclick="load_item(<?php echo $item->id; ?>)">
        <a>
            <div class="pointer"></div>
            <div class="image-holder">
                <img src="<?php echo $item->teaser_image; ?>" width="72px" height="69px" />
                <div class="date_mini"><?php echo strftime("%d %B", strtotime($item->date_created)); ?></div>
            </div>
            <div class="text-holder">
                <h3><?php echo $item->title; ?></h3>
                <div class="clear"></div>
                <p>
                <?php
                    if(mb_strlen($item->teaser) > 130)
                        echo mb_substr($item->teaser, 0, 130, 'utf-8') . "...";
                    else
                        echo $item->teaser;
                ?>
                </p>
                <div class="clear"></div>
            </div>
        </a>
    </li>

<?php endforeach; ?>

</ul>