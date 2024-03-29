<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'users-form',
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model, 'usuario'); ?>
		<?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 128)); ?>
		<?php echo $form->error($model, 'username'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model, 'Contrasena'); ?>
		<?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 128)); ?>
		<?php echo $form->error($model, 'password'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model, 'E-mail'); ?>
		<?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 128)); ?>
		<?php echo $form->error($model, 'email'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array("class" => "btn btn-primary btn-large")); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->