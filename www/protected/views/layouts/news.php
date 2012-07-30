<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="/assets/css/mainmenu.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/news.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/jscrollpane.css" type="text/css" />
    <script language="javascript" type="text/javascript" src="/assets/js/jquery.1.7.2.js"></script>
    <script language="javascript" type="text/javascript" src="/assets/js/jquery.event.frame.js"></script>
    <script language="javascript" type="text/javascript" src="/assets/js/jquery.parallax.js"></script>
    <script language="javascript" type="text/javascript" src="/assets/js/index_page.js"></script>
    <script language="javascript" type="text/javascript" src="/assets/js/slides.jquery.js"></script>
    <script language="javascript" type="text/javascript" src="/assets/js/jScrollPane.js"></script>
    <script type="text/javascript">

        var loader = new Image();
        loader.src = "/assets/images/loader.gif";

        function init_gallery() {
            var cnt = 0;
            if (!$('ul.big:eq(0)').is('.complete'))
            {
                $('ul.big:eq(0)').addClass('complete');
                $('ul.big:eq(o) li').each(function(){
                    if (cnt==0)
                        $(this).addClass('active');
                    $(this).attr('rel',cnt++);
                });
            }
            cnt=0;
            if (!$('ul.small:eq(0)').is('.complete'))
            {
                $('ul.small:eq(0)').addClass('complete');
                $('ul.small:eq(o) li').each(function(){
                    if (cnt==0)
                        $(this).addClass('active');
                    $(this).attr('rel',cnt++);
                });
            }
            $('ul.small:eq(o) li').click(function(){
                if(!$(this).is('.active'))
                {
                    $('ul.small:eq(o) li.active').removeClass('active');
                    $('ul.big:eq(o) li.active').removeClass('active');
                    $(this).addClass('active');
                    $('ul.big:eq(o) li[rel="'+parseInt($(this).attr('rel'))+'"]').addClass('active');
                }
            });
        }
        function init() {

            $('.scroll-pane').each(function(){
                jQuery(this).jScrollPane({
                    showArrows:true,
                    scrollbarWidth: 12,
                    scrollbarMargin:30,
                    verticalDragMinHeight: 34,
                    verticalDragMaxHeight: 34,
                    autoReinitialise: true
                });
            });
            init_gallery();
        }
        $(function () {
            var hashtag = window.location.hash.replace('#', '');

            if(hashtag.length)
                load_item(parseInt(hashtag));
            else
                load_item(1);
        });
    </script>
</head>
<body>
<div id="wrapper">
<div id="wrapper-inner">
<div id="header-wrapper">
    <div id="header">
        <div class="left">
            <a href="/" class="logo"></a>
        </div>
        <div class="right">
            <div class="main-menu">
                <?php $this->widget('application.components.TopMenu',array(
                'items'=>array(
                    array('label'=>'', 'url'=>array('post/index'), 'linkOptions' => array('class'=>'item_1')),
                    array('label'=>'', 'url'=>array('site/page'), 'linkOptions' => array('class'=>'item_2')),
                    array('label'=>'', 'url'=>array('news/index'), 'linkOptions' => array('class'=>'item_3 active')),
                    array('label'=>'', 'url'=>array('site/login'), 'linkOptions' => array('class'=>'item_4')),
                    array('label'=>'', 'url'=>array('site/login'), 'linkOptions' => array('class'=>'item_5'))
                ),
            )); ?>
            </div>
            <div class="search-box">
                <a class="feedback-link" href="#"></a>
            </div>
        </div>
        <div class="c"></div>
    </div>
</div>
<div id="content-wrapper">
    <div id="content">
        <h1>Новости</h1>
        <div class="clear"></div>
        <div class="content-inner">
            <div class="left">

                <?php echo $content; ?>

                <div class="clear"></div>
                <div class="show-more-link-box">
                    <a href="#"></a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="right">
                <div id="news_mainbody">
                    <img src="/assets/images/loader.gif" style="margin: 0 auto;" />
                </div>
            </div>
            <div class="clear"></div>
            <div id="bg-wrapper">
            </div>
        </div>
    </div>
</div>
<div id="footer-wrapper">
    <div id="footer">
        <div id="footer-gmo"></div>
        <div class="bottom_menu">
            <a href="#" class="active">О бренде</a>
            <a href="#">О Любимом</a>
            <a href="#">Новости</a>
        </div>
        <div class="bottom_menu">
            <a href="#">Акции</a>
            <a href="#">Обратная связь</a>
            <a href="#">Поиск</a>
        </div>
        <div class="footer-icons">
            <table>
                <tr>
                    <td><img src="/assets/images/pepsico_logo.png" /></td>
                    <td><img src="/assets/images/tetra_pak_logo.png" /></td>
                    <td><img src="/assets/images/vimm_bill_dan_logo.png" /></td>
                </tr>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>