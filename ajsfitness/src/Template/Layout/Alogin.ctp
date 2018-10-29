<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <?= $this->Html->css("style2.css") ?>
  <?= $this->Html->css("styles.css") ?>
  <?= $this->Html->css("https://www.w3schools.com/w3css/4/w3.css") ?>
  <?= $this->Html->script("https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css") ?>
	<?= $this->Html->script("https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js") ?>


  <?= $this->Html->css("bmi.css") ?>
  <?= $this->Html->script("bmi.js") ?>
<?= $this->Html->css("styles2.css") ?>


  <header>
		<div class="headContainer" id="sec0">
			<div id="branding">
				<h1><a href="gym.html">AJS FITNESS</a></h1>

			</div>
			<nav><!--for the menu bar, and nav is strictly html5 -->
				<ul>
					<li><a href="#sec1">BMI Calculator</a></li>
					<li><a href="#sec2">Diet Plans </a></li>
          <li><a href="#sec3">View videos </a></li>
          <li><?= $this->Html->link('video call','http://localhost/videocall/video.html')?></li>
           <li><?= $this->Html->link('FAQ',['controller'=>'faq', 'action' => 'add'])?></li>
           <li><?= $this->Html->link('view instructions',['controller'=>'instructions'])?></li>
            <li><?= $this->Html->link('stats',['controller'=>'Stats'])?></li>
          <li><?= $this->Html->link('Logout',['controller'=>'Users','action' => 'logout'])?></li>



				</ul>
			</nav>

		</div>
	</header>
</head>
<body>
  <div class="pimg1" >
    <div class="ptext">
      <span class="border">
        Welcome To AJSFitness!
      </span>
    </div>
  </div>

  <section class="section section-light" id="sec1">

    <h1>BMI Calculator</h1>

    <div class="container">
      <form name="bmiForm" id="contact">
        Your Weight(kg): <input type="text" name="weight" size="10" id="weight"><br />
        Your Height(cm): <input type="text" name="height" size="10" id="height"><br />

    <input type="button" value="Calculate BMI" onClick="calculateBmi()"><br />
    Your BMI: <input type="text" name="bmi" size="10" id="bmi"><br />
    This Means: <input type="text" name="meaning" size="25" id="mean"><br />

    <input type="reset" value="Reset" /><br><br>

    <h2>BMI CATEGORIES</h2>
    <ul>
    <li>Underweight: 18.5</li>
    <li>Normal Weight: 18.5 - 24.9</li>
    <li>Over Weight: 25 - 29.9</li>
    <li>Obesity: 30</li>
    </ul>

    </form>
    </div>




  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">

      </span>
    </div>
  </div>

  <section class="section section-dark" id="sec2">

    <div class="w3-container">
    <h2>DIET PLAN</h2>

    <div id="drop">
    	<div id="first">

    <button onclick="myFunction('D1')" class="w3-btn w3-block w3-red">
    DIET PLAN TO LOSE WEIGHT</button>

    <div id="D1" class="w3-hide w3-container w3-center w3-pale-red">
      <p>BREAKFAST</p>
      	<ul>
      		<li>1 large Banana</li>
      		<li>1 cup Cereal</li>
      		<li>1 1/2 cup skim Milk</li>
      	</ul>

      	<p>LUNCH</p>
      	<ul>
      		<li>1 Apple,Sliced w/skin.</li>
      		<li>1 C Spaghetti</li>
      		<li>1/2 Cup Beans</li>
      	</ul>

      	<p>AFTERNOON SNACK</p>
      	<ul>
      		<li>1 Sports Bar</li>
      	</ul>

      	<p>DINNER</p>
      	<ul>
      		<li>1 Burrito Large</li>
      		<li>1/2 Cup Rice</li>
      		<li>1/2 Cup Carrots</li>
      	</ul>
    </div>
    </div>


    <div id="second">
    <button onclick="myFunction('D2')" class="w3-btn w3-block w3-red">
    DIET PLAN TO MAINTAIN WEIGHT</button>

    <div id="D2" class="w3-hide w3-container w3-center w3-pale-red">
      <p>BREAKFAST</p>
      	<ul>
      		<li>1 Slice Wheat Bread</li>
      		<li>1 Fried Egg</li>
      		<li>1 Oz Cheese</li>
      		<li>1 Orange</li>
      		<li>3/4 Cup Milk</li>
      	</ul>

      	<p>LUNCH</p>
      	<ul>
      		<li>Fresh Fruit Salad</li>
      		<li>Roast Beef Sandwich</li>
      		<li>6 Oz Low Fat Yogurt</li>
      	</ul>

      	<p>AFTERNOON SNACK</p>
      	<ul>
      		<li>Non Sugar Cereal with Milk</li>
      	</ul>

      	<p>DINNER</p>
      	<ul>
      		<li>1 Large Grilled Chicken</li>
      		<li>1/2 Cup Brussels sprouts</li>
      		<li>1 Wheat Dinner Rolls</li>
      	</ul>
    </div>
    </div>


    <div id="third">
    	<button onclick="myFunction1('D3')" class="w3-btn w3-block w3-red">
    DIET PLAN TO GAIN WEIGHT</button>

    <div id="D3" class="w3-hide w3-container w3-center w3-pale-red">
      <p>BREAKFAST</p>
      	<ul>
      		<li>Vegetable Omlet</li>
      		<li>2 Sliced 12 Grain Bread</li>
      		<li>1 Cup NOn-Fat Milk</li>
      	</ul>

      	<p>LUNCH</p>
      	<ul>
      		<li>Turkey & Cheese Sandwich</li>
      		<li>1 Bunch Red Grapes</li>
      	</ul>

      	<p>AFTERNOON SNACK</p>
      	<ul>
      		<li>Protein Shake</li>
      		<li>1 Cup Skim Milk</li>
      		<li>2 Large Peices of Fruit</li>
      	</ul>

      	<p>DINNER</p>
      	<ul>
      		<li>6 Oz Roasted Chicken</li>
      		<li>2 Cup Mixed Vegetables</li>
      		<li>1 LArge Sweet Potato</li>
      	</ul>
    </div>
    </div>
    </div>
    </div>

  </section>



  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">

      </span>
    </div>
  </div>

  <section class="section section-dark" id="sec3">
  
    <div class="w3-container">
    <div id="h">
    	<h1>BICEP</h1>
    	</div>
    
      <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/N3Z1nvNduos" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      

    <div id="h">
    	<h1>LEGS & CALVES</h1>
    	</div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/HIdxYCrqLQg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <div id="h">
    	<h1>SHOULDERS</h1>
    	</div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/o23NddM6FQ8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </section>

  <div class="pimg1">
    <button class="w3-button w3-ripple" id="top"> <a href="#sec0">Scroll top</button>
    <div class="ptext">
      <span class="border">
        Work Hard MF! Thats All The Motivation You Need!
      </span>
    </div>
  </div>
    <?= $this->Html->script("diet.js") ?>
  <?= $this->Html->script("SmoothScroll_gym.js") ?>
</body>
</html>
