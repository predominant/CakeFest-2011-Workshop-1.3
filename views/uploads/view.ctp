<div class="uploads view">
<h2><?php  __('Upload');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Course'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($upload['Course']['name'], array('controller' => 'courses', 'action' => 'view', $upload['Course']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Filename'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['filename']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Filesize'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['filesize']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Filemime'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['filemime']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $upload['Upload']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
	<?php echo $this->Html->link(
		'Download',
		array(
			'action' => 'download',
			$upload['Upload']['id'],
		)
	); ?>
	|
	<?php echo $this->Html->link(
		'View',
		array(
			'action' => 'download',
			$upload['Upload']['id'],
			'view' => true
		)
	); ?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Upload', true), array('action' => 'edit', $upload['Upload']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Upload', true), array('action' => 'delete', $upload['Upload']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $upload['Upload']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Uploads', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Upload', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses', true), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course', true), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
