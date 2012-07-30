<?php

Yii::import('zii.widgets.CMenu');
class TopMenu extends CMenu {


    public $activateItemsOuter = true;

    //need to include this for our function to run
    public function run()
    {
        $this->renderMenu($this->items);
    }

    protected function renderMenu($items)
    {
        if(count($items))
        {
            $this->renderMenuRecursive($items);
        }
    }

    protected function renderMenuRecursive($items)
    {
        $count=0;
        $n=count($items);
        foreach($items as $item)
        {
            $count++;
            $options=isset($item['itemOptions']) ? $item['itemOptions'] : array();
            $class=array();
            if($item['active'] && $this->activeCssClass!='')
                $class[]=$this->activeCssClass;
            if($count===1 && $this->firstItemCssClass!==null)
                $class[]=$this->firstItemCssClass;
            if($count===$n && $this->lastItemCssClass!==null)
                $class[]=$this->lastItemCssClass;
            if($this->itemCssClass!==null)
                $class[]=$this->itemCssClass;
            if($class!==array())
            {
                if(empty($options['class']))
                    $options['class']=implode(' ',$class);
                else
                    $options['class'].=' '.implode(' ',$class);
            }


            $menu=$this->renderMenuItem($item);
            if(isset($this->itemTemplate) || isset($item['template']))
            {
                $template=isset($item['template']) ? $item['template'] : $this->itemTemplate;
                echo strtr($template,array('{menu}'=>$menu));
            }
            else
                echo $menu;

            if(isset($item['items']) && count($item['items']))
            {
                echo "\n".CHtml::openTag('ul',isset($item['submenuOptions']) ? $item['submenuOptions'] : $this->submenuHtmlOptions)."\n";
                $this->renderMenuRecursive($item['items']);
                echo CHtml::closeTag('ul')."\n";
            }
        }

    }

}


?>