<div class="coursesStudents form">
<?php echo $this->Form->create('CoursesStudent');?>
	<fieldset>
		<legend><?php __('Edit Courses Student'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('student_id');
		echo $this->Form->input('course_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CoursesStudent.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CoursesStudent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Courses Students', true), array('action' => 'index'));?></li>
	</ul>
</div>