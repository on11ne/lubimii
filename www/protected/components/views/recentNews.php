<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ekimov
 * Date: 7/30/12
 * Time: 4:18 PM
 * To change this template use File | Settings | File Templates.
 */

$recentNews = RecentNews::getRecentNews();

?>
<ul>
<?php foreach($recentNews as $item) : ?>

    <li class="news-block with-border">
        <div class="date"><?php echo strftime("%d %B", strtotime($item->date_created)); ?></div>
        <a class="thumbnail" href="<?php echo $item->url; ?>">
            <img src="<?php echo $item->teaser_image; ?>" />
        </a>
        <div class="mainbody">
            <a class="item-title" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
            <div class="item-descr">
                <?php
                if(mb_strlen($item->teaser) > 100)
                    echo mb_substr($item->teaser, 0, 100, 'utf-8') . "...";
                else
                    echo $item->teaser;
                ?>
            </div>
        </div>
        <div class="c"></div>
    </li>

<?php endforeach; ?>
</ul>