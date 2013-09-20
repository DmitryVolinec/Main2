<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
?>
<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
?>
<div id="pagetext">
<legend style="color:white">Контакты</legend>
<legend style="color:white">Задать вопрос</legend>
<div class="well">

<!-- Form Name -->
<?php 

		$form=$this->beginWidget('CActiveForm', array(
		'id'=>'contact-form',
		'enableAjaxValidation'=>false,
		)); 
		
		if(Yii::app()->user->hasFlash('sendSuccess')){
			echo "<div class='alert alert-success'>";
			echo Yii::app()->user->getFlash('sendSuccess');
			echo "</div>";
		}
		echo $form->errorSummary($model); 
?>
  <div class="row">
		<div class="span3">
			<?= $form->labelEx($model,'name'); ?>
			<?= $form->textField($model,'name',array('placeholder'=>'Имя и Фамилия')); ?>
			<?= $form->labelEx($model,'skype'); ?>
			<?= $form->textField($model,'skype',array('placeholder'=>'Скайп')); ?>
			<?= $form->labelEx($model,'email'); ?>
			<?= $form->textField($model,'email',array('placeholder'=>'E-mail')); ?>
          	<?= $form->labelEx($model,'subject'); ?>
			<?= Chtml::dropDownList('ContactForm[subject]',$model->subject, array(
				0 =>'Отдел обслуживания клиентов',
				1 =>'Предложения',
				2 =>'Техническая потдержка'
			)); ?>
		</div>
		<div class="span5">
				<?= $form->labelEx($model,'message');?>
				<?= CHtml::textArea('ContactForm[message]',$model->message ? $model->message : "",array("style"=>'margin: 0px 0px 10px; width: 501px; height: 219px;'));?>
		</div>
                <a href="index" class="btn btn-primary pull-right" style='float:right'>Назад</a>
		<button type="submit" class="btn btn-primary pull-right" style='float:right'>Отправить</button>
	</div>
  <?php $this->endWidget(); ?>
</div><!-- well well end -->
</div>