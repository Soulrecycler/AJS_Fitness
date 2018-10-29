<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>

	<title><?php echo isset ($title) ? $title : ""; ?></title>
	<meta name="viewport" content="width=device-width">




	<?= $this->Html->css("gymcss.css") ?>
	<?= $this->Html->css("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css") ?>
	



	<?= $this->Html->script("https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js") ?>






</head>
<body>
	<header>
		<div class="container" id="sec0">
			<div id="branding">
				<div id="logo">
					<?= $this->Html->image("logo.png") ?>
					<h1><a href="gym.html">AJS FITNESS</a></h1>
				</div>
				
			

			</div>
			<nav><!--for the menu bar, and nav is strictly html5 -->
				<ul>
					<li><?= $this->Html->link('Contact Us',['controller'=>'Contact','action' => 'index'])?></li>
					<li><a href="#sec1">About </a></li>
					<li><?= $this->Html->link('User Login',['controller'=>'Users','action' => 'login'])?></li>
					<li><?= $this->Html->link('Admin Login',['controller'=>'Admin','action' => 'login'])?></li>
					<li><?= $this->Html->link('Trainer Login',['controller'=>'trainer','action' => 'login'])?></li>
				</ul>
			</nav>

		</div>
	</header>

	<section id="showcase">
		<div class="container">
			<h1>Now Your Personal Trainer Wherever You Go.</h1>
		</div>
	</section>

	<section id="signin">
		<div class="container">
			<!--<p id="sign1">Sign Up Now!</p>
			<form>
				<input type="text" class="f1" name="name" placeholder="first name">
				<input type="text" class="f1" name="surname" placeholder=" surname">
				<input type="email"  class="f1" name="name" placeholder="Email ID">
					<div id="button">
						<button type="submit" class="butt">Submit</button>-->

						<section class="section section-light" id="sec1">
					    <h2>About</h2>
					    <p>
					    <h4> Welcome to Train Online, your Online and Mobile Personal Trainer.</h4>

						Personalized Programs:  Your certified personal trainer can design an online training program specifically for YOU based on your individual profile
						(including age, exercise history, fitness level, goals, available equipment, schedule availability, medical history, etc.).
						To save time, many diet or fitness programs are based on a general, one-size-fits-all approach and use computer-generated programs.
						But, most exercisers are more successful at reaching their goals when using a program that is designed just for them.
						We utilize the extensive profile you provide to develop your customized program so that you are always doing exercises that are just right for YOU.
						We design programs for all fitness levels, for working out anywhere (home, gym, or on the road), and for use with a variety of exercise equipment
						or even no equipment at all.
  						  </p>
  </section>
			<div id="para1">
				<!--<img src="<?= $baseurl ?>/webroot/img/jump.png">-->


			</div>


			<section class="section section-dark">
			  
			    <p>
			      <h4>Motivation, Encouragement and Accountability:</h4>   Unlike other fitness programs that take your money and then forget about you, Workouts For You will be there with you through every step.  You'll receive regular encouragement and tips from your certified personal trainer and have unlimited access to your trainer**. Also, you'll have access to our workout accountability system to help you stay accountable to your trainer and, more importantly, to yourself. Plus, your workout log will be reviewed by your trainer to evaluate your progress to ensure the program is always working for  you. Researchers have found that exercisers who are accountable to a trainer or a partner are more successful in reaching their fitness goals.
			    </p>
			  </section>

			<div id="para2">
				<!--<img id="battle"  src="battle.jpeg">-->

			</div>

					 <section class="section section-dark">

					    <p>
					      <h4>More Variety -- Less Burnout:<h4>   Researchers have found that an exercise program is more successful if it includes variety and continually challenges the body to work hard. Workouts For You programs utilize this concept.  Our personalized online workouts include loads of variety and frequent changes to keep your mind from burning out and your body from adapting and hitting a plateau, which can cause you to stop losing weight and/or gaining muscle.
					    </p>
					  </section>
				<div id="para3">
				<!--<img id="gym2"  src="gym2.jpg">-->
				 <button class="w3-button w3-ripple" id="top"> <a href="#sec0">Scroll top</button>

			</div>

					</div>

			</form>

		</div>
	

		<?= $this->Html->script("SmoothScroll_gym.js") ?>
</body>

	<footer>
		<div id="icons">
			<ul>

				<li><a href="#" class="fa fa-instagram"></a></li>
				<li><a href="#" class="fa fa-facebook"></a></li>
				<li><a href="#" class="fa fa-youtube"></a></li>
				<li><a  href="#" class="fa fa-pinterest"></a></li>
			</ul>
		</div>
		<p> AJS Fitness, Copyright &copy; 2018</p>
	</footer>




</html>
