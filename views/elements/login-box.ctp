<?php
if ($authUser) {
	echo $this->Html->link(
		'Logout',
		array('controller' => 'users', 'action' => 'logout'),
		array('style' => 'color: #fff;')
	);
} else {
	echo $this->Html->link(
		'Login',
		array('controller' => 'users', 'action' => 'login'),
		array('style' => 'color: #fff;')
	);
}
?>
