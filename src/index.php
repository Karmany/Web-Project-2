<?php
include 'php/dbh.php';
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
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
                    <li class="active menucolor"><a href="#header">Hjem<span class="sr-only">(current)</span></a></li>
                    <li class="menucolor"><a href="#artikler">Artikler og nyheter</a></li>
                    <li class="menucolor"><a href="#visjon">Om oss</a></li>
                    <li class="menucolor"><a href="#kontakt">Kontakt</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="search form-control" placeholder="Søk...">
                    </div>
                    <button type="submit" class="navbutton btn btn-default">Søk</button>
                </form>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div id="header"><br><br><br><br><br><br>
        <img src="img/TU-logo.svg" alt="logo" class="center-block">
        <h2>Velg et hytteområde:</h2>
        <div class="choose form-group">
            <select class="form-control" id="sel1" onchange="location = this.value;">
			<option>Velg et område...</option>

            <?php
            $sql = "SELECT * FROM omrader";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<option value='tomter.php?omrade=" . $row["name"] ."'>" . $row["name"] . "</option>";
                   }

            }
             ?>

             <!--
			<option value='tomter.html'>Hedmark</option>
			<option value="valdres.html">Valdres</option>
			<option value="gudbrandsdalen.html">Gudbrandsdalen</option>
			<option value="ringsaker.html">Ringsaker</option>
			<option value="sortrondelag.html">Sør-Trøndelag</option>-->
			 <!-- <option>Velg et område...</option>
			 <option>Hedmark</option>
			 <option>Valdres</option>
			 <option>Gudbrandsdalen</option>
			 <option>Ringsaker</option>
			 <option>Sør-Trøndelag</option> -->
		  </select>
        </div>
    </div>

    <div id="artikler"></div>





    <div id="artikkel">
        <div class="container">
            <div class="row row1">
                <?php
                $sql = "SELECT * FROM artikkel";
                $result = mysqli_query($conn, $sql);

                if ($result->num_rows > 0) {

                    while($row = $result->fetch_assoc()) {
                        $artID = $row['artID'];
                        $title = $row['title'];
                        $intro = $row['intro'];
                        $text = $row['text'];
                        $artimg = $row['artimg'];


                        echo "<div class='col-md-4'><div class='artikkel'>
                            <h2>" . $title ."</h2>
                            <br>
                            <p>" . $intro ."</p><br>
                            <img class='img-responsive' src='" . $artimg ."' alt='artikkelbilde'><br>
                            <a href='artikkel.php?artikkel=" . $artID . "' class='articlebutton btn btn-default' role='button'>Les mer</a>
                        </div></div>";

                    }
                }
                 ?>
            </div>
        </div>
    </div>

    <div id="visjon"></div>

    <div id="omoss">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="omoss">
                        <h2>Om oss</h2>
                        <br>
                        <p>
                            Bacon ipsum dolor amet picanha t-bone doner shankle venison pork loin sirloin filet mignon salami leberkas chicken turducken frankfurter drumstick. Filet mignon pork chop drumstick, beef salami pork biltong capicola flank turducken pastrami doner rump
                            hamburger.
                        </p><br>
                        <img class="img-responsive" src="img/omrade3.jpg" alt="artikkelbilde"><br>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="omoss">
                        <h2>Om firmaet</h2>
                        <br>
                        <p>
                            Bacon ipsum dolor amet picanha t-bone doner shankle venison pork loin sirloin filet mignon salami leberkas chicken turducken frankfurter drumstick. Filet mignon pork chop drumstick, beef salami pork biltong capicola flank turducken pastrami doner rump
                            hamburger.
                        </p><br>
                        <img class="img-responsive" src="img/omrade2.jpg" alt="artikkelbilde"><br>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="omoss">
                        <h2>Vår visjon</h2>
                        <br>
                        <p>
                            Bacon ipsum dolor amet picanha t-bone doner shankle venison pork loin sirloin filet mignon salami leberkas chicken turducken frankfurter drumstick. Filet mignon pork chop drumstick, beef salami pork biltong capicola flank turducken pastrami doner rump
                            hamburger.
                        </p><br>
                        <img class="img-responsive" src="img/omrade5.jpg" alt="artikkelbilde"><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="kontakt"></div>

    <div class="container" id="kontaktoss">
        <div class="row">
            <div class="col-sm-4">
                <div class="kontakt corrHeight">
                    <h2>Info</h2>
                    <br>
                    <b>Tinde Utvikling</b><br><br>
                    <b>Tlf:</b> 611 32 421<br><br>
                    <b>E-postadresse:</b> post@tindeutvikling.no<br><br>
                    <b>Adresse:</b> Fjellveien 1, 2020 Gjøvik <br><br>

                    <b>Sosiale medier:</b>
                    <br><br>
                    <a href="https://www.facebook.com">
                        <img style="width:35px;" src="img/1490896363_facebook_social_media_online.png" class="SosialeIconer">
                    </a>
                    <a href="https://www.twitter.com">
                        <img style="width:35px;" src="img/1490896354_twitter_social_media_online.png" class="SosialeIconer">
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="kontakt corrHeight">

                    <h2>Her er vi</h2>
                    <br><br>
                    <div id="googleMap" style="width:100%;height:200px;"></div>

                    <script>
                        function myMap() {
                            var mapProp = {
                                center: new google.maps.LatLng(60.749029, 10.628599),
                                zoom: 7,
                            };
                            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                        }
                    </script>

                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbJZIzbCNYOztd53Go7IJUj_MYoW2wtLA&callback=myMap">
                    </script>
                    <br>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="kontakt corrHeight">
                    <h2>Kontakt oss</h2>
                    <br>
                    <form>
                        <div class="form-group">
                            <input type="text" class="kontaktskjema form-control" name="name" placeholder="Navn">
                            <br>
                            <input type="email" class="kontaktskjema form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Skriv e-postadresse her...">
                        </div>
                        <div class="form-group">
                            <textarea class="kontaktskjema form-control" id="textArea" placeholder="Skriv din melding her..." rows="4"></textarea>
                        </div>

                        <button type="submit" class="sendmail btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
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
    <script src="js/parallax.js"></script>
    <script src="js/smoothScroll.js"></script>
</body>

</html>
