<div class="students form">
<?php echo $this->Form->create('Student', array('url' => array($user_id)));?>
	<fieldset>
		<legend><?php __('Add Student'); ?></legend>
	<?php
		// echo $this->Form->input('user_id', array(
		// 	'type' => 'hidden',
		// 	'value' => $user_id
		// ));
		echo $this->Form->input('number');
		echo $this->Form->input('twitter');
		echo $this->Form->input('Course');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Students', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>