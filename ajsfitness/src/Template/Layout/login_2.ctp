

<header>
	<div class="container">
		<div id="branding">
			<h1><?= $this->Html->link('A J S Fitness ',['controller'=>'Theme'])?></h1>



	</div>
</header>

<div class="tab-panels">
	<ul class="tabs">
			<li rel="panel1" class="active">Admin</li>


	</ul>


				<div id="signup" class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
					<div class="panel">
						<h2 class="text-center">Please Register</h2>
						<?= $this->Form->create(); ?>
						<?= $this->Form->label('name','Name:'); ?>
							<?= $this->Form->text('name'); ?>
							<?= $this->Form->label('email','E-mail Id:'); ?>
							<?= $this->Form->text('email'); ?>
							<?= $this->Form->label('password','Password:'); ?>
							<?= $this->Form->password('password', array('type' => 'password')); ?>
							<?= $this->Form->submit('Register', array('class' => 'button')); ?>
							<p id="message">Already Registered? <a href="#">Login</a> </p>
						<?= $this->Form->end(); ?>
					</div>
				</div>

				<div id="login" class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
					<div class="panel">
						<h2 class="text-center">Login</h2>
						<?= $this->Form->create(); ?>
						<?= $this->Form->label('email','E-mail Id:'); ?>
							<?= $this->Form->text('email'); ?>
								<?= $this->Form->label('password','Password:'); ?>
							<?= $this->Form->password('password', array('type' => 'password')); ?>
							<?= $this->Form->submit('Login', array('class' => 'button')); ?>
							<p id="message">Not Registered? <a href="#">Sign up</a> </p>
						<?= $this->Form->end(); ?>
					</div>
				</div>
			</div>
	</div>
</div>



</body>
</html>
