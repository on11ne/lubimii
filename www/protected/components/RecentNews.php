<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ekimov
 * Date: 7/30/12
 * Time: 4:10 PM
 * To change this template use File | Settings | File Templates.
 */

Yii::import('zii.widgets.CPortlet');

class RecentNews extends CPortlet
{
    public $title='';
    public $maxNews=2;

    public function getRecentNews()
    {
        return News::model()->findAll(array(
            "select" => "id, date_created as created, teaser_image, title, teaser",
            "condition" => "status=1",
            "limit" => 2,
            "order" => "date_created DESC"
        ));
    }

    protected function renderContent()
    {
        $this->render('recentNews');
    }
}