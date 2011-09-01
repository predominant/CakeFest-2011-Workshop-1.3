<?php
echo $this->Form->create();

echo $this->Form->inputs(
	array(
		'email', 'password',
		'legend' => 'Login',
		//'fieldset' => false,
	)
);

echo $this->Form->end('Login');
?>
