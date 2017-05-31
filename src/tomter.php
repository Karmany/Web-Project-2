<?php
include 'php/dbh.php';

if (isset($_GET['omrade'])) {
    $getOmrade = $_GET['omrade'];
}

$sql = "SELECT * FROM omrader WHERE name = '$getOmrade'";
$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $omrID = $row['omrID'];
        $omrade = $row['omrade'];
        $ingress =  $row['ingress'];
        $kontaktperson = $row['kontaktperson'];
        $img = $row['img'];
        $lat = $row['lat'];
        $lng = $row['lng'];
        $annet = $row['annet'];
    }
}

$sql = "SELECT * FROM felt WHERE omrID = '$omrID'";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $feltID[] = $row['feltID'];
    }
}


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $getOmrade; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="slider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="slider/css/ion.rangeSlider.skinHTML5.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="slider/js/ion.rangeSlider.js"></script>
    <script src="slider/js/ion.rangeSlider.min.js"></script>
  </head>
  <body>

	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">

		 <!-- Collect the nav links, forms, and other content for toggling -->
		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
			  <li class="active menucolor"><a href="index.php">Forsiden<span class="sr-only">(current)</span></a></li>
			  <li class="menucolor"><a href="#informasjon">Informasjon om området</a></li>
			  <li class="menucolor"><a href="#filtrering">Tomtefiltrering</a></li>
			  <li class="menucolor"><a href="#tomt">Tomter</a></li>
			</ul>
			<form class="navbar-form navbar-right">
			  <div class="form-group">
				 <input type="text" class="search form-control" placeholder="Søk...">
			  </div>
			  <button type="submit" class="navbutton btn btn-default">Søk</button>
			</form>

		 </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div id="OmradeHeader" style="background-image: url(<?php echo $img; ?>);">>
     <div class="layer">
      	<h1><?php echo $getOmrade; ?></h1>
      	<p>Nyt naturen i vakre <?php echo $getOmrade; ?></p>
      </div>
   </div>
   <div id="informasjon"></div>
   <br><br>

  <div class="container">
       <br>
        <div class="row">

           	<div class="col-md-4">
               <div class="tomteinfo">
               	<h2>Hytteområdet</h2>
               	<br>
                	<div id="googleMap" style="width:100%;height:350px;"></div>

                	<script>
                    	function myMap() {
                        var mapProp = {
                            center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>),
                            zoom: 7,
                        };
                        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                    	}
                	</script>

						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbJZIzbCNYOztd53Go7IJUj_MYoW2wtLA&callback=myMap">
						</script>
					</div>
            </div>

            	<div class="col-md-4 skrift">
              		<div class="tomteinfo">
               	<h2>Informasjon</h2>
               	<br>
						 <table class="table table-striped">
							  <thead>
									<tr>
										 <th>Navn</th>
										 <th>Skogstad</th>
									</tr>
							  </thead>
							  <tbody>
									<tr>
										 <td>Feltnr</td>
										 <td>23</td>
									</tr>
									<tr>
										 <td>Område</td>
										 <td><?php echo $omrade; ?></td>
									</tr>
									<tr>
										 <td>Ingress</td>
										 <td><?php echo $ingress; ?></td>
									</tr>
									<tr>
										 <td>Fasiliteter</td>
										 <td></td>
									</tr>
									<tr>
										 <td>Kontaktinformasjon</td>
										 <td><?php echo $kontaktperson; ?></td>
									</tr>
									<tr>
										 <td>Reguleringsplan</td>
										 <td>--</td>
									</tr>
									<tr>
										 <td>Reguleringskart</td>
										 <td>--</td>
									</tr>
									<tr>
										 <td>Prisliste</td>
										 <td>--</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>

               <div class="col-md-4">
               	<div class="tomteinfo">
							<h2>Annet</h2>
								<br>
									<?php echo $annet; ?>
								<br><br>
							<b>Fasiliteter:</b>
							<br>
							<span class="header2 myglyph glyphicon glyphicon-cutlery"> </span>
							<span class="header2 myGlyph glyphicon glyphicon-tree-deciduous"> </span>
							<span class="header2 glyphicon glyphicon-flash"> </span>
							<span class="header2 myGlyph2 glyphicon glyphicon-signal"> </span>
							<span class="header2 myGlyph glyphicon glyphicon-tint"> </span>
							<br><br>
							<!--<button type="button" class="socialbutton btn btn-primary btn-md">Kontakt oss om dette området</button>-->
							<div class="box">
								<a class="button socialbutton btn btn-primary btn-md" href="#popup1">Kontakt oss om dette området</a>
							</div>
							<div id="popup1" class="overlay">
								<div class="popup">
									<h2>Kontakt oss</h2>
									<a class="close" href="#">&times;</a>
									<div class="content">
										<form>
											<div class="form-group">
												<input type="email" class="kontaktskjema form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Skriv e-postadresse her...">
											</div>
										  <div class="form-group">
											 <textarea class="kontaktskjema form-control" id="exampleTextarea" placeholder="Skriv din melding her..." rows="4"></textarea>
										  </div>

										  <button type="submit" class="sendmail btn btn-primary">Send</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
            </div>
            <br><br><br>
        </div>
    </div>
    <div id="filtrering"><br><br><br>
    	<div class="container">
    		<div class="row">
        		<div class="col-sm-4">
        			<div class="filtreringsinfo">
        				<h2>Områder</h2>
        				<form action="">
							<input type="checkbox" name="#">  Hedmark</input> <br><br>
							<input type="checkbox" name="#">  Valdres</input> <br><br>
							<input type="checkbox" name="#">  Gudbrandsdalen</input> <br><br>
							<input type="checkbox" name="#">  Ringsaker</input> <br><br>
							<input type="checkbox" name="#">  Sør-Trøndelag</input> <br><br>
						</form>
        			</div>
        		</div>
        		<div class="col-sm-4">
        			<div class="filtreringsinfo">
        				<h2>Infrastruktur</h2>
        				<form action="">
							<input type="checkbox" name="#">  Avløp</input> <br><br>
							<input type="checkbox" name="#">  Strøm</input> <br><br>
							<input type="checkbox" name="#">  Vann</input> <br><br>
							<input type="checkbox" name="#">  Vei</input>
						</form>
        			</div>
        		</div>
        		<div class="col-sm-4">
        			<div class="filtreringsinfo">
        				<h2>Fasiliteter</h2>
        				<form action="">
							<input type="checkbox" name="#">  Bading</input> <br><br>
							<input type="checkbox" name="#">  Butikk</input> <br><br>
							<input type="checkbox" name="#">  Fisking</input> <br><br>
							<input type="checkbox" name="#">  Golf</input> <br><br>
							<input type="checkbox" name="#">  Hotell</input> <br><br>
							<input type="checkbox" name="#">  Jakt og fiske</input> <br><br>
							<input type="checkbox" name="#">  Småbåthavn</input> <br><br>
							<input type="checkbox" name="#">  Stort løypenett</input> <br><br>
							<input type="checkbox" name="#">  Strand</input> <br><br>
							<input type="checkbox" name="#">  Sykkel</input> <br><br>
							<input type="checkbox" name="#">  Turterreng</input>
						</form>
        			</div>
        		</div>
			</div>
		</div>
    </div>
   <div id="tomt"></div>
   <?php

   for ($x = 0; $x < count($feltID); $x++) {


       $sql = "SELECT * FROM tomter WHERE feltID = '$feltID[$x]'";
       $result = mysqli_query($conn, $sql);

       if ($result->num_rows > 0) {

           while($row = $result->fetch_assoc()) {
               $tomtID = $row['tomtID'];
               $gnr = $row['gnr/bnr'];
               $areal = $row['areal'];
               $pris = $row['pris'];
               $status = $row['status'];
               $merknad = $row['merknad'];
               $img = $row['img'];


               echo "<br><br>
               <div class='container'>
                    <div class='row'>
                        <div class='col-sm-12'>
                            <h2>Tomt " . $tomtID ."</h2>
                        </div>
                    </div>
                </div>
               <br>
               <div class='container'>
                    <div class='row'>
                    <div class='col-sm-4'>
                        <img class='img-responsive' src='" . $img ."' alt='tomt1'>
                    </div>
                    <div class='col-sm-8'>
                        <b>Pris:</b> " . $pris .",-<br>
                        <b>Størrelse: </b>" . $areal ." kvm<br><br>
                        " . $merknad ."
                    <br><br>
                    <button type='button' class='articlebutton btn btn-primary btn-md'>Les mer</button>
                    <button type='button' class='articlebutton btn btn-primary btn-md'>Kontakt oss om denne tomten</button>
                    </div>
                </div>
                </div>";


           }
       }
   }
    ?>

	<br><br><br><br>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smoothScroll.js"></script>
  </body>
</html>
