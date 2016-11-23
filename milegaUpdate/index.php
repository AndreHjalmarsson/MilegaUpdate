<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>milega:reflex</title>
    <!--link to bootstrap -->
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>


    <div class="container-fluid">

        <div class="jumbotron">
            <div class="container">
                <div class="header">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-9 col-lg-9">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="images/index/logo.png" class="logo img-responsive">
                                </div>
                                <div class="col-xs-12  col-sm-12 col-md-10">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="#">kurser</a>
                                        </li>
                                        <li>
                                            <a href="#">om oss</a>
                                        </li>
                                        <li>
                                            <a href="#">kontakt</a>
                                        </li>
                                        <li><a href="#" data-toggle="modal" data-target=".login-modal-lg">login</a>

                                            <!-- popup login -->
                                            <div class="modal fade login-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content custom">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <!-- login -->
                                                                <?php
                                                                require("logIn.php");
                                                                 ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target=".registration-modal-lg">registrera</a>
                                            <!-- popup registrera -->
                                            <div class="modal fade registration-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content custom">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                              <!-- Register -->
                                                                <?php
                                                                  require("register.php");
                                                                  ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <ul class="pull-right">
                                <li>
                                    <a href="#"><img class="glyph" src="images/index/button_fb.svg" alt="fb" /></a>
                                </li>
                                <li>
                                    <a href="#"><img class="glyph" src="images/index/button_linkedin.svg" alt="linkedin" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="main">
                    <div class="row">
                        <div class="col-md-7">
                            <h1>
                        Ledare
                      </h1>
                            <h1><u>eller chef</u></h1>
                            <h3>"Äkta utaminingen</h3>
                            <h3>Vi ger dig verktygen</h3>
                            <h3>att n&aring; m&aring;let".</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="supporting-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 center no-padding">
                        <div class="col-md-12 dark-turq padding">
                            <a href="#">kurser</a>
                        </div>
                    </div>
                    <div class="col-xs-4  col-sm-4 col-md-4 col-lg-4 center">
                        <div class="col-md-12 red padding">
                            <a href="#contact">kontakter</a>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 center no-padding">
                        <div class="col-md-12 dark-blue padding">
                            <a href="#news">nyheter</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="supporting-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 margin-20">
                        <h1>v&aring;rt m&aring;l</h1>
                        <h3>- n&ouml;jda kunder</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 no-padding">
                        <img class="img-responsive" src="images/index/2.jpeg" alt="tutor" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 article">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="supporting-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 margin-20">
                        <h1>reflex</h1>
                        <h3>- kurs i ledarskap</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 article">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 no-padding">
                        <img class="img-responsive" src="images/index/3.jpg" alt="puzzle" />
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container-out">
                <div class="col-md-12">
                    <h1>referenser</h1>
                </div>
            </div>
        </div>

        <div class="supporting-4">
            <div class="container-fluid">
                <div class="container">
                    <div class="row margin-bottom">
                        <div class="col-md-12">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/index/4.png" alt="man">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <p class="signature">hasse, volvo it</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-bottom">
                        <div class="col-md-12">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/index/4.png" alt="man">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <p class="signature">hasse, volvo it</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/index/4.png" alt="man">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                    <p class="signature">hasse, volvo it</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="contact">
            <div class="container-out">
                <div class="col-md-12">
                    <h1>kontakta oss</h1>
                </div>
            </div>
        </div>

        <div class="supporting-5">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <p class="margin-bottom">
                                Om du har fr&aring;gor om Milegareflex ber vi dig fylla i och skicka nedanst&aring;ende kontaktformul&auml;r s&aring; h&ouml;r vi av oss.
                                <div class="field two-margins">
                                    <p class="text-muted">
                                        Namn
                                    </p>
                                </div>
                                <div class="field">
                                    <p class="text-muted">
                                        E-mail
                                    </p>
                                </div>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="field-2">
                                <p class="text-muted">
                                    Meddelande
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn-default" href="#" role="button">Skicka</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container-out">
                <div class="col-md-12">
                    <h1>v&aring;rat team</h1>
                </div>
            </div>
        </div>

        <div class="supporting-6">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3 article2">
                        <img class="img-responsive" src="images/index/6-1.jpg" alt="hans" />
                        <p class="name">Hans</p>
                        <p>
                            hans@reflex.com
                        </p>
                        <p>
                            +46000000000
                        </p>
                        <hr>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 article2">
                        <img class="img-responsive" src="images/index/6-2.jpg" alt="Lars" />
                        <p class="name">Lars</p>
                        <p>
                            Lars@reflex.com
                        </p>
                        <p>
                            +46000000000
                        </p>
                        <hr>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 article2">
                        <img class="img-responsive" src="images/index/6-3.jpg" alt="cecilia" />
                        <p class="name">Cecilia</p>
                        <p>
                            cecilia@reflex.com
                        </p>
                        <p>
                            +46000000000
                        </p>
                        <hr>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 article2">
                        <img class="img-responsive" src="images/index/6-4.jpg" alt="per" />
                        <p class="name">Per</p>
                        <p>
                            per@reflex.com
                        </p>
                        <p>
                            +46000000000
                        </p>
                        <hr>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="news">
            <div class="container-out">
                <div class="col-md-12">
                    <h1>Nyheter</h1>
                </div>
            </div>
        </div>

        <div class="supporting-7">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="slider-content-container">
                                                    <div class="col-md-5">
                                                        <img class="img-responsive" src="images/index/7.jpg" alt="news avatar">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <p class="date">
                                                            2016-11-23
                                                        </p>
                                                        <p class="rubric">
                                                            Kurser
                                                        </p>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="slider-content-container">
                                                    <div class="col-md-5">
                                                        <img class="img-responsive" src="images/index/7.jpg" alt="news avatar">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <p class="date">
                                                            2016-11-23
                                                        </p>
                                                        <p class="rubric">
                                                            Kurser
                                                        </p>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="slider-content-container">
                                                    <div class="col-md-5">
                                                        <img class="img-responsive" src="images/index/7.jpg" alt="news avatar">
                                                    </div>
                                                    <div class="col-md-7">
                                                        <p class="date">
                                                            2016-11-23
                                                        </p>
                                                        <p class="rubric">
                                                            Kurser
                                                        </p>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        </p>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container-out">
                <div class="col-md-12">
                    <h1>Nyhetsbrev</h1>
                </div>
            </div>
        </div>

        <div class="supporting-8">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="margin-bottom">
                                Ta del av v&aring;ra utbildningar, tips och erbjudander
                            </p>
                            <div class="field margin-bottom">
                                <p class="text-muted">
                                    E-post
                                </p>
                            </div>
                            <a class="btn btn-default" href="#" role="button">Skicka</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <p>
                    <span>Milega Utbildning AB • Kaserntorget 6 • G&ouml;teborg • </span> tel: 031 105 490 • email: kontakt@milega.se
                </p>
            </div>
        </div>
    </div>

    <!--scripts -->
    <!-- link to jquery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <!-- link to bootstrap js library -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
</body>

</html>
