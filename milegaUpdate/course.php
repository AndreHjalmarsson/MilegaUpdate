<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Milega:reflex</title>
    <link rel="stylesheet" href="css/course.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive logo" src="images/index/logo.png" alt="logo milega" />
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-10 ">
                                <p class="invitation">
                                    Hej, v&auml;lkommen tillbaka, <?php echo $_SESSION["firstname"]; ?>!
                                    <br>
                                    <!-- <a href="profilePage.php">Profil</a> -->
                                </p>
                            </div>
                            <div class="col-md-2">
                              <?php require("avatar.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 main-column">
                            <div class="inner-container">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="pull-right" role="presentation"><a class="light-turq" href="#6" aria-controls="settings" role="tab" data-toggle="tab">6</a></li>
                                    <li class="pull-right" role="presentation"><a class="light-turq" href="#5" aria-controls="settings" role="tab" data-toggle="tab">5</a></li>
                                    <li class="pull-right" role="presentation"><a class="light-turq" href="#4" aria-controls="settings" role="tab" data-toggle="tab">4</a></li>
                                    <li class="pull-right" role="presentation"><a class="light-turq" href="#3" aria-controls="messages" role="tab" data-toggle="tab">3</a></li>
                                    <li class="pull-right" role="presentation"><a class="light-turq" href="#2" aria-controls="profile" role="tab" data-toggle="tab">2</a></li>
                                    <li class="pull-right" role="presentation"><a class="light-turq" href="#1" aria-controls="home" role="tab" data-toggle="tab">1</a></li>
                                    <li class="pull-right" role="presentation"><a class="light-turq" href="#contents" aria-controls="settings" role="tab" data-toggle="tab">inneh&aring;ll</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane  fade " id="1">
                                        <div class="tab-container-right">
                                          <?php
                                          // require("questionPages/page_1.php");
                                           ?>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="2">
                                        <div class="tab-container-right">
                                            <!--slider  -->
                                            <div id="slider-outer">

	<input type="radio" tabindex="-1" id="btn-goto-last" class="slide-check" name="slider" />
	<input type="radio" tabindex="-1" id="btn-1" class="slide-check" name="slider" checked="checked" />
	<input type="radio" tabindex="-1" id="btn-2" class="slide-check" name="slider" />
	<input type="radio" tabindex="-1" id="btn-3" class="slide-check" name="slider" />
	<input type="radio" tabindex="-1" id="btn-4" class="slide-check" name="slider" />
	<input type="radio" tabindex="-1" id="btn-5" class="slide-check" name="slider" />
	<input type="radio" tabindex="-1" id="btn-goto-first" class="slide-check" name="slider" />

	<label for="btn-goto-last" id="arrow-goto-last" class="arrows" onclick="">&#9658;</label>
	<label for="btn-1" id="arrow-1" class="arrows" onclick="">&#9658;</label>
	<label for="btn-2" id="arrow-2" class="arrows" onclick="">&#9658;</label>
	<label for="btn-3" id="arrow-3" class="arrows" onclick="">&#9658;</label>
	<label for="btn-4" id="arrow-4" class="arrows" onclick="">&#9658;</label>
	<label for="btn-5" id="arrow-5" class="arrows" onclick="">&#9658;</label>
	<label for="btn-goto-first" id="arrow-goto-first" class="arrows" onclick="">&#9658;</label>
  <div id="slider">
		<div class="slides">
		    <div tabindex="0">
		    	<div>
				<span class="title"><b>form namn</b></span>
				<span class="num">(1/5)</span><br/>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		    	</div>
		    </div>
		    <div tabindex="0">
		    	<div>
				<span class="title"><b>form namn</b></span>
				<span class="num">(2/5)</span><br/>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		    	</div>
		    </div>
		    <div tabindex="0">
		    	<div>
				<span class="title"><b>form namn</b></span>
				<span class="num">(3/5)</span><br/>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		    	</div>
		    </div>
		    <div tabindex="0">
		    	<div>
				<span class="title"><b>form namn</b></span>
				<span class="num">(4/5)</span><br/>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		    	</div>
		    </div>
		    <div tabindex="0">
		    	<div>
            <span class="title"><b>namn</b></span>
				<span class="num">(5/5)</span><br/>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		    	</div>
		    </div>
		</div>
	</div>

</div>

                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="3">
                                        <div class="tab-container-right">

                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="4">
                                        <div class="tab-container-right">

                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="5">
                                        <div class="tab-container-right">

                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="6">
                                        <div class="tab-container-right">

                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane  active" id="contents">
                                        <div class="tab-container-right">
                                            <ul class="goo-collapsible goo-coll-stacked">

                                                <li class="dropdown"><a class='' href='#'><span class='number'>1.</span> M&aring;let med mitt ledarskap</a>
                                                </li>
                                                <li class="dropdown"><a href='#'><span class='number'>2.</span> Mina styrkor och utvecklingsomr&aring;den</a>
                                                    <ul>
                                                        <li><a href='#'>Del&ouml;vning 1: JTI-profil</a></li>
                                                        <li><a href='#'>Del&ouml;vning 2: Mitt uppdrag</a></li>
                                                        <li><a href='#'>Del&ouml;vning 3a: Min ledarkompetens</a></li>
                                                        <li><a href='#'>Del&ouml;vning 3b: Spegling av min ledarskap </a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href='#'><span class='number'>3.</span> Medarbetar - feedback enligt 180-grader</a>
                                                </li>
                                                <li class="dropdown"><a href='#'><span class='number'>4.</span> S&aring; h&auml;r ska det g&aring;r till</a></li>
                                                <li class="dropdown"><a href='#'><span class='number'>5.</span> Mina &aring;taganden</a></li>
                                                <li class="dropdown"><a href='#'><span class='number'>6.</span> S&aring; h&auml;r ska det g&aring;r till (forts&auml;ttning)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 main-column">
                            <div class="inner-container">
                                <div class="row">
                                    <div class="col-md-12">

                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills" role="tablist">
                                            <li role="presentation"><a class="dark-blue" href="#news" aria-controls="home" role="tab" data-toggle="tab">nyheter</a></li>
                                            <li role="presentation"><a class="dark-blue" href="#reflection" aria-controls="profile" role="tab" data-toggle="tab">reflektion</a></li>
                                            <li role="presentation"><a class="dark-blue" href="#chat" aria-controls="home" role="tab" data-toggle="tab">chat<span class="badge">2</span></a></li>
                                            <li role="presentation"><a class="dark-blue" href="#video" aria-controls="profile" role="tab" data-toggle="tab">video</a></li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="news">
                                                <div class="tab-container-left">
                                                    <img src="images/course/1.jpg" alt="woman" class=" img-responsive img-thumbnail news" />
                                                    <h4>
                                                        Varf&ouml;r beh&ouml;ver du att bli en bra ledare?
                                                    </h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                    </p>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="reflection">
                                                <div class="tab-container-left">
                                                    <img src="images/course/3.png" alt="woman" class=" img-responsive img-thumbnail" />
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane  fade" id="chat">
                                                <div class="tab-container-left">
                                                  <?php
                                                  require("writepost.php");

                                                  $uid = $_SESSION["userId"];
                                                  $getPosts = $db->query("SELECT * FROM posts WHERE uid = '$uid' ORDER BY published DESC;");
                                                  $getPostsResult = $getPosts->fetchAll();

                                                  foreach ($getPostsResult as $row) {
                                                    echo '<img src="avatars/'.usedAvatar($userID, $db).'" id="avatar" height="50" width="50" alt="Image not available" />' . $_SESSION["firstname"] . "<br>";
                                                    echo $row["content"] . '<br>' . $row["published"] . '<br><br>';
                                                  }
                                                   ?>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="video">
                                                <div class="tab-container-left">
                                                <!-- <img src="images/course/2.png" alt="woman" class=" img-responsive img-thumbnail" /> -->
                                                <div class="embed-responsive embed-responsive-16by9">
  <iframe src="https://embed.ted.com/talks/roselinde_torres_what_it_takes_to_be_a_great_leader" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>

                                                <h4>
                                                    What it takes to be a good leader?
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

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
    <script src="list.js"></script>
    <!-- link to bootstrap js library -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "></script>
</body>

</html>
