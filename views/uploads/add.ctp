<div class="uploads form">
<?php echo $this->Form->create('Upload', array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Upload'); ?></legend>
	<?php
		echo $this->Form->input('course_id');
		echo $this->Form->input('file', array('type' => 'file'));
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		// echo $this->Form->input('filename');
		// echo $this->Form->input('filesize');
		// echo $this->Form->input('filemime');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Uploads', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>