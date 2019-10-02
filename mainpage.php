<?php include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/proper.js"></script>

    <title>Main Page</title>

</head>
<body>
<div class="container">
    <div id="carouselExample" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExample" data-slide-to="1"></li>
            <li data-target="#carouselExample" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="foto/slide1.jpg" alt="First slide" height="450">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="foto/slide2.jpg" alt="Second slide" height="450">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="foto/slide3.jpg" alt="Third slide" height="450">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<footer class="page-footer font-small position-relative" style="margin-top: 48px">

    <div style="background-color: dodgerblue;">
        <div class="container">


            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 text-white">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a href="#" class="fb-ic">
                        <i class="fa fa-facebook text-white mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a href="#" class="tw-ic">
                        <i class="fa fa-twitter text-white mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a href="#" class="gplus-ic">
                        <i class="fa fa-google-plus text-white mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a href="#" class="li-ic">
                        <i class="fa fa-linkedin text-white mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a href="#" class="ins-ic">
                        <i class="fa fa-instagram text-white  mr-4"> </i>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

    </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center  text-white-50 py-3" style="background-color: darkslategray">© 2019
        Copyright:
        <a class="dark-grey-text" href="https://mdbootstrap.com/education/bootstrap/">Getbootstrap.com</a>
    </div>
    <!-- Copyright -->

</footer>

<!-- Footer -->
</body>
</html>




