<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="/assets/css/index.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/mainmenu.css" type="text/css" />
    <script language="javascript" type="text/javascript" src="/assets/js/jquery.1.7.2.js"></script>
    <script language="javascript" type="text/javascript" src="/assets/js/jquery.event.frame.js"></script>
    <script language="javascript" type="text/javascript" src="/assets/js/jquery.parallax.js"></script>
    <script language="javascript" type="text/javascript" src="/assets/js/index_page.js"></script>

    <script language="javascript" type="text/javascript" src="/assets/js/slides.jquery.js"></script>
</head>
<body>
<div id="wrapper">
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
                            array('label'=>'', 'url'=>array('news/index'), 'linkOptions' => array('class'=>'item_3')),
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
        <div id="target" class="parallax-port">
            <img class="parallax-layer" src="/assets/images/fare_layer.png" alt="" />
            <img class="parallax-layer" src="/assets/images/mid_layer.png" alt="" />
            <img class="parallax-layer" src="/assets/images/close_layer.png" alt="" />
        </div>
        <div id="content">
            <div id="slider-index">
                <div class="slides_container">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </div>
    <div id="footer-wrapper">
        <div id="footer">
            <div class="top">
                <div class="gmo"></div>
                <div id="news-module-box">
                    <div class="title">
                        <a href="#"></a>
                    </div>
                    <div class="c"></div>
                    <div class="body">
                        <?php $this->widget('RecentNews', array(
                            'maxNews'=>2,
                        )); ?>
                        <div class="c"></div>
                    </div>
                </div>
                <div class="c"></div>
            </div>
            <div class="bottom">
                <a href="#" id="developer-logo"></a>
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