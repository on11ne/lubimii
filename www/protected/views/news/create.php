<?php
$this->breadcrumbs=array(
	'Tbl News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblNews', 'url'=>array('index')),
	array('label'=>'Manage TblNews', 'url'=>array('admin')),
);
?>

<h1>Создать новость</h1>

<div class="form">
    <?php $form = $this->beginWidget('CActiveForm'); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->label($model,'title'); ?>
        <?php echo $form->textField($model,'title') ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'teaser'); ?>
        <?php echo $form->textField($model,'teaser') ?>
    </div>


    <div class="row">
        <?php echo $form->label($model,'full_text'); ?>
        <?php echo $form->textArea($model,'full_text') ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'image'); ?>

        <a href="/index.php?r=Image/create&l=partial">Добавить изображение</a>

        <?php

        echo CHtml::dropDownList(
            'images_from', '',
            CHtml::listData(
                Image::model()->findAll(
                    array(
                        "select" => "id, image",
                        "condition" => "true"
                    )),
                "id", "image"),
            array("size" => 6));

        echo $form->dropDownList(
            $model, 'images',
            CHtml::listData(
                Image::model()->findAll(
                    array(
                        "select" => "id, image",
                        "condition" => "true"
                    )),
                "id", "image"),
        array("size" => 6));

        ?>
    </div>

    <div class="row">
        <?php

            echo $form->radioButtonList(
                $model,'status',
                CHtml::listData(Lookup::model()->findAll(
                    array(
                        "select" => "code, name",
                        "condition" => "type='news_status'")
                ), 'code', 'name'));
        ?>
    </div>

    <div class="row">

        <?php

        echo $form->label($model,'date_created');

        Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');

        $this->widget('CJuiDateTimePicker', array(
            'model'=>$model,
            'attribute'=>'date_created',
            'language' => 'ru',
            'mode'=>'date',
        ));

        ?>
    </div>

    <div class="row">

        <?php

        echo $form->label($model,"date_publish_start");

        $this->widget('CJuiDateTimePicker', array(
            'model'=>$model,
            'attribute'=>'date_publish_start',
            'language' => 'ru',
            'mode'=>'date',
        ));

        $this->widget('CJuiDateTimePicker', array(
            'model'=>$model,
            'attribute'=>'date_publish_finish',
            'language' => 'ru',
            'mode'=>'date',
        ));

        ?>
    </div>

    <div class="row submit">
        <?php echo CHtml::submitButton('Save'); ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->