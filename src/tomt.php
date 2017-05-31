<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Om Oss</title>
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
                <a class="navbar-brand" href="#">
                    <img class="logo" alt="Brand" src="img/tu.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Hjem<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Områder</a></li>
                    <li><a href="tomter.html">Tomter</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Søk">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="omoss.html">Om oss</a></li>
                    <li><a href="kontakt.html">Kontakt</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <ol class="breadcrumb">
        <li><a href="index.html">Hjem</a></li>
        <li><a href="tomter.html">Tomter</a></li>
        <li class="active">Tomt</li>
    </ol>
    <h1 class="tomt-head">Tomt 1</h1>
    <div class="container tomrom">
        <div class="row">
            <div class="col col-md-4 skrift">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae praesentium, amet ad nihil voluptatibus, delectus fugit quaerat voluptate, vitae architecto animi culpa ullam maxime! Maiores tempora laudantium repellendus, et! Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit. Cum, aliquid, fuga tenetur nesciunt distinctio magnam velit, mollitia praesentium accusamus ratione inventore eum fugiat blanditiis animi odio dicta doloremque illo. Nihil. Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit. Sequi inventore eius, ipsum perferendis dolorem repellat, deserunt consequuntur enim distinctio corrupti doloribus ducimus quaerat nobis tenetur. Odit a saepe velit quia. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Optio, blanditiis maxime at, labore ipsa suscipit!
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
                            <td>23</td>
                        </tr>
                        <tr>
                            <td>Tomtenr</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Gnr/bnr</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Areal</td>
                            <td>2321 m2</td>
                        </tr>
                        <tr>
                            <td>Pris som selveier</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>Ledig</td>
                        </tr>
                        <tr>
                            <td>Merknad</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col col-md-4">
                <div id="googleMap" style="width:100%;height:300px;"></div>

                <script>
                    function myMap() {
                        var mapProp = {
                            center: new google.maps.LatLng(60.749029, 10.628599),
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
