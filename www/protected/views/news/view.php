<?php

date_default_timezone_set("Europe/Moscow");
setlocale(LC_ALL, "ru_RU");

$news_item = News::model()->find(array(
    "select" => "id, date_created, full_text, teaser, title, teaser_image, images",
    "condition" => "id=" . $_GET['id']
));

?>

<h2><?php echo $news_item->title; ?></h2>
<div class="scroll-pane">
    <div class="news_gallery">
        <div class="gallery-top">
            <ul class="big">
                <li class="active">
                    <img src="/assets/images/news/temp_images/big_image.jpg" />
                </li>
                <li>
                    <img src="/assets/images/news/temp_images/big_image.jpg" />
                </li>
                <li>
                    <img src="/assets/images/news/temp_images/big_image.jpg" />
                </li>
            </ul>
            <div class="big_date"><?php echo strftime("%d %B %G", strtotime($news_item->date_created)); ?></div>
        </div>
        <div class="gallery-bottom">
            <ul class="small">
                <li class="active">
                    <img src="/assets/images/news/temp_images/body_menu_thumbnail.png" />
                </li>
                <li>
                    <img src="/assets/images/news/temp_images/body_menu_thumbnail.png" />
                </li>
                <li class="last">
                    <img src="/assets/images/news/temp_images/body_menu_thumbnail.png" />
                </li>
            </ul>
        </div>
    </div>
    <?php echo $news_item->full_text; ?>
</div>
<div class="share-social">
    <div class="title">Поделиться с друзьями</div>
    <div class="buttons">
        <a class="fb"></a>
        <a class="ok"></a>
        <a class="vk"></a>
        <div class="clear"></div>
    </div>
</div>
