<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <?= $this->Html->css("tlogin.css") ?>
  <?= $this->Html->script("https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js") ?>
  <?= $this->Html->script("SmoothScroll_gym.js") ?> 
<?= $this->Html->css("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css") ?>
  <header>
		<div class="headContainer">
			<div id="branding">
        <div id="logo">
          <?= $this->Html->image("logo.png") ?>
          <h1><a href="gym.html">AJS FITNESS</a></h1>
        </div>
        
				

			</div>
			<nav><!--for the menu bar, and nav is strictly html5 -->
				<ul>
					<li><a href="#sec1">view Users</a></li>
					<li><a href="#sec2">add instructions</a></li>
          <li><a href="#sec3">add stats</a></li>
         <li><?= $this->Html->link('video call','http://localhost/videocall/video.html')?></li>
          <li><?= $this->Html->link('logout',['controller' => 'Trainer','action' => 'login'])?></li>

				</ul>
			</nav>

		</div>
	</header>
</head>
<body>
  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Welcome Trainer!
      </span>
    </div>
  </div>

  <section class="section section-light" id="sec1">
    
     <button type="button" class="btn btn-default btn-lg"  ><?= $this->Html->link('List of Your Users',['controller'=>'users','action' => 'index'])?></button>

  </section>

  <div class="pimg2">
    <div class="ptext">
     
    </div>
  </div>

  <section class="section section-dark" id="sec2">
   <button type="button" class="btn btn-default btn-lg"  ><?= $this->Html->link('Add Instructions',['controller'=>'instructions','action' => 'add'])?></button>
  
  </section>

  <div class="pimg3">
    <div class="ptext">
      
    </div>
  </div>

  <section class="section section-dark" id="sec3">
    <button type="button" class="btn btn-default btn-lg"  ><?= $this->Html->link('Add Stats',['controller'=>'Stats','action' => 'add'])?></button>
    
  </section>

  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Work Hard MF! Thats All The Motivation You Need!
      </span>
    </div>
  </div>
  <?= $this->Html->script("SmoothScroll_gym.js") ?>
</body>
</html>
