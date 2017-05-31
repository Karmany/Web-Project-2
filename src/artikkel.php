<?php
include 'php/dbh.php';

if (isset($_GET['artikkel'])) {
    $getArtikkel = $_GET['artikkel'];
}

$sql = "SELECT * FROM artikkel WHERE artID = '$getArtikkel'";
$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $artID = $row['artID'];
        $title = $row['title'];
        $intro = $row['intro'];
        $text = $row['text'];
        $artimg = $row['artimg'];
    }
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tinde Utvikling</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Tinde Utvikling</title>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">

		 <!-- Collect the nav links, forms, and other content for toggling -->
		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			  <li class="active menucolor"><a href="index.php">Tilbake til forsiden<span class="sr-only">(current)</span></a></li>
			</ul>
			<!--<form class="navbar-form navbar-right">
			  <div class="form-group">
				 <input type="text" class="search form-control" placeholder="Søk...">
			  </div>
			  <button type="submit" class="navbutton btn btn-default">Søk</button>
          </form>-->

		 </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
   <div id="top"></div>
   <div class="container">
    <div class="row">
        <div class="col-sm-12"></div>
        <div class="artikkeltopp">
        	<h2 style="margin-top:70px;"><?php echo $title; ?></h2>
        	<img class="img-responsive" src="<?php echo $artimg; ?>" alt="artikkelbilde">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div style="padding-top:30px;" class="col-sm-4">
        	<div class="artikkelinnhold">
        		<p><?php echo $text; ?></p>
        	    <p><?php echo $text; ?></p>
        	</div>
        </div>
        <div style="padding-top:30px;" class="col-sm-4">
        	<div class="artikkelinnhold">
                <p><?php echo $text; ?></p>
        	    <p><?php echo $text; ?></p>
        	</div>
        </div>
        <div style="padding-top:30px;" class="col-sm-4">
        	<div class="artikkelinnhold">
                <p><?php echo $text; ?></p>
                <p><?php echo $text; ?></p>
        	</div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-offset-10 col-sm-2"></div>
        <a href="#top" class="articlebutton btn btn-default" role="button">Til toppen</a>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script>
		$(window).scroll(function() {
		if ($(window).scrollTop() > 500) {
		$('.nav').addClass('stuck');
		} else {
		$('.nav').removeClass('stuck');
		}
		});
	</script>
   <script src="js/smoothScroll.js"></script>

</body>

</html>
