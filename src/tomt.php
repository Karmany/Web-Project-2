<?php
include 'php/dbh.php';

if (isset($_GET['tomt'])) {
    $getTomt = $_GET['tomt'];
}

$sql = "SELECT * FROM tomter WHERE tomtID = '$getTomt'";
$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $feltID = $row['feltID'];
        $tomtID = $row['tomtID'];
        $gnr = $row['gnr/bnr'];
        $areal = $row['areal'];
        $pris = $row['pris'];
        $status = $row['status'];
        $merknad = $row['merknad'];
        $img = $row['img'];
    }
}

$sql = "SELECT omrID FROM felt WHERE feltID = '$feltID'";
$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $omrID = $row['omrID'];
    }
}

$sql = "SELECT * FROM omrader WHERE omrID = '$omrID'";
$result = mysqli_query($conn, $sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $lat = $row['lat'];
        $lng = $row['lng'];
    }
}


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tomt <?php echo $tomtID; ?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <!--<a class="navbar-brand" href="#"><img class="logo" src="img/tu.png"></a>-->
                <!--<a class="navbar-brand" href="#">
                    <img class="logo" alt="Brand" src="img/tu.png">
                </a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Hjem</a></li>
                    <li><a href="javascript:history.back()">Andre Tomter</a></li>
                </ul>
                <!--<form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Søk">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>-->
                <!--<ul class="nav navbar-nav navbar-right">
                    <li><a href="omoss.html">Om oss</a></li>
                    <li><a href="kontakt.html">Kontakt</a></li>
                </ul>-->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!--<ol class="breadcrumb">
        <li><a href="index.html">Hjem</a></li>
        <li><a href="tomter.html">Tomter</a></li>
        <li class="active">Tomt</li>
    </ol>-->
    <!--<h1 class="tomt-head">Tomt 1</h1>-->
    <div class="container tomrom">
        <div class="row">
            <div class="col col-md-4 skrift">
                <p>
                    <?php echo $merknad; ?>
                </p>
            </div>
            <div class="col col-md-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Enhet</th>
                            <th>Informasjon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Feltnr</td>
                            <td><?php echo $feltID; ?></td>
                        </tr>
                        <tr>
                            <td>Tomtenr</td>
                            <td><?php echo $tomtID; ?></td>
                        </tr>
                        <tr>
                            <td>Gnr/bnr</td>
                            <td><?php echo $gnr; ?></td>
                        </tr>
                        <tr>
                            <td>Areal</td>
                            <td><?php echo $areal; ?></td>
                        </tr>
                        <tr>
                            <td>Pris</td>
                            <td><?php echo $pris; ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                <?php if ($status == 0) {
                                echo "Ledig";
                            } else {
                                echo "Solgt";
                            }
                            ?>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col col-md-4">
                <div id="googleMap" style="width:100%;height:300px;"></div>

                <script>
                    function myMap() {
                        var mapProp = {
                            center: new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $lng; ?>),
                            zoom: 7,
                        };
                        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                    }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbJZIzbCNYOztd53Go7IJUj_MYoW2wtLA&callback=myMap"></script>
            </div>
        </div>
    </div>


</body>

</html>
</div>
</div>
</div>


</body>

</html>
