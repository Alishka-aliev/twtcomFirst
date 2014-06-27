<?php
/**
 * Created by PhpStorm.
 * User: twt
 * Date: 27.06.14
 * Time: 14:19
 */


      $config = array(
      );

      $this->widget('application.extensions.fancybox.EFancyBox', array(
          'target'=>'#testing',
          'config'=>$models,));

        //echo CHtml::link('TESTING',array('site/index'),array('id'=>'testing'));
        echo CHtml::ajaxButton('TESTING', array('//site/map'), null, array('id' => 'testing'));

echo "<br />";
echo "<br />";

 $this->widget('bootstrap.widgets.TbButtonGroup', array(
    'buttons'=>array(
        array('label'=>'1', 'url'=>'#'),
        array('label'=>'2', 'url'=>'#'),
        array('label'=>'3', 'url'=>'#'),
        array('label'=>'4', 'url'=>'#'),
    ),
));

echo "<br />";
echo "<br />";
  $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Library'=>'#', 'Data'),
));

$this->renderPartial('JSView');