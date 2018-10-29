<br>
<body>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h2 class="text-center">Login</h2>
		<?= $this->Form->create(); ?>
			<?= $this->Form->label('email','E-mail:')?>
			<?= $this->Form->text('email'); ?>
			<?= $this->Form->label('password','Password:')?>
			<?= $this->Form->password('password', array('type' => 'password')); ?>
			<?= $this->Form->submit('Login', array('class' => 'button')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>
</body>
