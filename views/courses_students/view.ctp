<div class="coursesStudents view">
<h2><?php  __('Courses Student');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $coursesStudent['CoursesStudent']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Student Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $coursesStudent['CoursesStudent']['student_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $coursesStudent['CoursesStudent']['course_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Courses Student', true), array('action' => 'edit', $coursesStudent['CoursesStudent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Courses Student', true), array('action' => 'delete', $coursesStudent['CoursesStudent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $coursesStudent['CoursesStudent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses Students', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Courses Student', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
