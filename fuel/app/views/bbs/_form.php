<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="control-group">
			<?php echo Form::label('Post date', 'post_date', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('post_date', Input::post('post_date', isset($bbs) ? $bbs->post_date : ''), array('class' => 'span4', 'placeholder'=>'Post date')); ?>

			</div>
		</div>
		<div class="control-group">
			<?php echo Form::label('Message', 'message', array('class'=>'control-label')); ?>

			<div class="controls">
				<?php echo Form::input('message', Input::post('message', isset($bbs) ? $bbs->message : ''), array('class' => 'span4', 'placeholder'=>'Message')); ?>

			</div>
		</div>
		<div class="control-group">
			<label class='control-label'>&nbsp;</label>
			<div class='controls'>
				<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>