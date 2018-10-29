<html>
<head>
  <?= $this->Html->charset() ?>
	<title><?php echo isset ($title) ? $title : ""; ?></title>
	<meta name="viewport" content="width=device-width">
	<?= $this->Html->css("bmi.css") ?>
  <?= $this->Html->script("bmi.js") ?>
  <header id="head">
  	<p>Check Your BMI</p>

  	<div id="home">

  	<p><?= $this->Html->link('Home',['controller'=>'Theme','action' => 'index'])?></p>
  	</div>
  </header>


</head>
<body>
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
</body>
</html>
