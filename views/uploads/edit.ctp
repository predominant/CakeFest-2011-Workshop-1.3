<div class="uploads form">
<?php echo $this->Form->create('Upload');?>
	<fieldset>
		<legend><?php __('Edit Upload'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('course_id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('filename');
		echo $this->Form->input('filesize');
		echo $this->Form->input('filemime');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Upload.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Upload.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Uploads', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>