
<html>
<head>

    <?= $this->Html->css("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css") ?>
    <?= $this->Html->css("video.css") ?>
    <?= $this->Html->script("video.js") ?>
    <?= $this->Html->script("https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js") ?>
    <?= $this->Html->script("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js") ?>
    <?= $this->Html->script("https://api.bistri.com/bistri.conference.min.js") ?>




</head>
<body>
    <div class="container-fluid" style="height:100px ">
            <div>
                <h1 class="col-sm-12 col-lg-9" style="top:25%"><strong><em>RANDOM</strong></em></h1>
            </div>
            <div class="col-sm-12 col-lg-3" style="position:relative; top:25%; right:5%;">

                <button id="profile" type="button" style=" float:right; display:block;" class="btn btn-lg btn-success">Profile</button>

                <button type="button" style=" float:right; margin-right:10px " class="btn btn-lg btn-success">Courses</button>
            </div>
     </div>
    <div class="pane" id="pane_1" style="display: block">

        <br>
        <input type="button" value="Join Yoga lecture" id="join" class="btn btn-lg btn-success">
    </div>
    
    <div class=" pane" id="pane_2" style="display: none">
        <div id="video_container"></div>
        <div id="video_container_2"></div>
        <input type="button" value="Quit Conference Room" id="quit" class="btn btn-danger btn-default btn-block">
    </div>
</body>
</html>