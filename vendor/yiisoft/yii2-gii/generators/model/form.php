<?php
/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $generator yii\gii\generators\form\Generator */
use app\models\TiposTramite;
use yii\helpers\ArrayHelper;

echo $form->field($generator, 'tableName');
echo $form->field($generator, 'modelClass');
echo $form->field($generator, 'ns');
echo $form->field($generator, 'baseClass');
echo $form->field($generator, 'db');
echo $form->field($generator, 'useTablePrefix')->checkbox();
echo $form->field($generator, 'generateRelations')->checkbox();
echo $form->field($generator, 'generateLabelsFromComments')->checkbox();
echo $form->field($generator, 'generateQuery')->checkbox();
echo $form->field($generator, 'queryNs');
echo $form->field($generator, 'queryClass');
echo $form->field($generator, 'queryBaseClass');
echo $form->field($generator, 'enableI18N')->checkbox();
echo $form->field($generator, 'messageCategory');
$tipos=TiposTramite::find()->all();
$listData=ArrayHelper::map($tipos,'id','nombre');
echo $form->field($generator, 'especializado')->dropDownList(
	                                $listData,['prompt'=>'Select...','id'=>'nombre']);
