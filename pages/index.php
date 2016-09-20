<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SaptakMusicalHut</title>

  <!-- Bootstrap Core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- MetisMenu CSS -->
  <link href="../css/metisMenu.min.css" rel="stylesheet">
  <!-- Timeline CSS -->
  <link href="../css/timeline.css" rel="stylesheet">
  <!-- Bootstrap UI CSS -->
  <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
  <!-- Jquery UI CSS -->
  <link href="../css/jquery-ui.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="../css/dataTables.bootstrap.css" rel="stylesheet">
  <!-- DataTables Responsive CSS -->
  <link href="../css/dataTables.responsive.css" rel="stylesheet">
  <!-- Morris Charts CSS -->
  <link href="../css/morris.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="../css/sb-admin-2.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="../css/style.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <!--[endif] -->

</head>
<body>
  <header>
      <h1></h1>
  </header>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="row">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header navbar-left">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Saptak Musical Hut</a>
        </div>
        <form class="navbar-form navbar-right">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="glyphicon glyphicon-search btn btn-default" type="button"></button>
              <!-- Trigger the modal with a button -->
              <button type="button" class="btn btn-default glyphicon glyphicon-user" data-toggle="modal" data-target="#myModal"></button>
            </span>
          </div>
          <!-- Login Modal -->
          <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm" role="document">
              <!-- Login Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h2 class="modal-title center">Log In</h2>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <p class="center"><i><a href="#">Forgot password?</a></i></p>
                  <div class="">
                    <button type="submit" class="btn btn-warning col-xs-offset-5 col-sm-offset-5 col-md-offset-5 centered">Log in</button>
                  </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <p class="center"><i>Don't have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal1"> Sign up</a></i></p>
                </div>
              </div>
            </div>
          </div>
          <!-- SignUp Modal -->
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
              <!-- SignUp Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h2 class="modal-title center">Sign Up</h2>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" id="first_name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="Input_Email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="Input_Password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="Input_Phone" placeholder="Phone No">
                    </div>
                    <button type="submit" class="btn btn-warning col-xs-offset-5 col-sm-offset-5 col-md-offset-5 centered">Start Now</button>
                    <h6><i class="center">By starting, you agree to Saptak Musical Hut's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></i></h6>
                  </form>
                </div>
                <div class="modal-footer">
                  <p class="center"><i>Have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal">Log in</a></i></p>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="row">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#">HOME<span class="sr-only">(current)</span></a></li>
            <li><a href="#">MUSICAL INSTRUMENTS</a></li>
            <li class="dropdown dropdown-large cent">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOT DEALS</a>
              <ul class="dropdown-menu dropdown-menu-large row">
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">DJ SOFTWARE</a></li>
                    <li><a href="#">KEYBOARDS BELOW 5000</a></li>
                    <li><a href="#">CASIO KEYBOARDS BELOW 10000</a></li>
                    <li><a href="#">YAMAHA KEYBOARDS BELOW 10000</a></li>
                    <li><a href="#">KEYBOARDS BELOW 15000</a></li>
                    <li><a href="#">KEYBOARDS BELOW 20000</a></li>
                    <li><a href="#">BEST CASIO KEYBOARDS</a></li>
                    <li><a href="#">YAMAHA BEST KEYBOARDS</a></li>
                  </ul>
                </li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">GUITAR DEALS</a></li>
                    <li><a href="#">ACOUSTIC GUITARS UNDER 5000</a></li>
                    <li><a href="#">ACOUSTIC GUITARS UNDER 10000</a></li>
                  </ul>
                </li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">MERCHANDISE</a></li>
                    <li><a href="#">ALBUMS</a></li>
                    <li><a href="#">POSTERS</a></li>
                    <li><a href="#">MUGS</a></li>
                    <li><a href="#">COASTER</a></li>
                    <li><a href="#">FRIDGE MAGNET</a></li>
                    <li><a href="#">CUSHION COVERS</a></li>
                    <li><a href="#">LAPTOP SKINS</a></li>
                  </ul>
                </li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">STUDIO DEALS</a></li>
                    <li class="dropdown-header"><a href="#">DRUM DEALS</a></li>
                    <li class="dropdown-header"><a href="#">DJ DEALS</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown dropdown-large cent">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">STUDIO&#47;RECORDING</a>
                <ul class="dropdown-menu dropdown-menu-large row">
                  <li class="col-sm-3">
                    <ul>
                      <li class="dropdown-header"><a href="#">AUDIO INTERFACES</a></li>
                      <li class="dropdown-header"><a href="#">HEARING PROTECTION</a></li>
                      <li class="dropdown-header"><a href="#">RECORDING SOFTWARES</a></li>
                      <li class="dropdown-header"><a href="#">PREMIUM STUDIO MONITORS</a></li>
                      <li class="dropdown-header"><a href="#">PREMIUM AUDIO INTERFACES</a></li>
                      <li class="dropdown-header"><a href="#">HEADPHONES</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3">
                    <ul>
                      <li class="dropdown-header"><a href="#">CHANNEL STRIPS</a></li>
                      <li class="dropdown-header"><a href="#">MIDI KEYBOARDS</a></li>
                      <li class="dropdown-header"><a href="#">SIGNAL PROCESSING</a></li>
                      <li class="dropdown-header"><a href="#">PREAMPS</a></li>
                      <li class="dropdown-header"><a href="#">MONITORS &amp; SPEAKERS</a></li>
                      <li><a href="#">THE STUDIO MONITOR STORE</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3">
                    <ul>
                      <li class="dropdown-header"><a href="#">DI BOXES</a></li>
                      <li class="dropdown-header"><a href="#">MIDI INTERFACES</a></li>
                      <li class="dropdown-header"><a href="#">SOUND PROOF/TREATMENT</a></li>
                      <li class="dropdown-header"><a href="#">SPECTRUM MANAGER</a></li>
                      <li class="dropdown-header"><a href="#">STUDIO ACCESSORIESS</a></li>
                      <li><a href="#">MIC STANDS</a></li>
                    </ul>
                  </li>
                  <li class="col-sm-3">
                    <ul>
                      <li class="dropdown-header"><a href="#">HEADPHONE AMPLIFIERS</a></li>
                      <li class="dropdown-header"><a href="#">MULTITRACK RECORDERS</a></li>
                      <li class="dropdown-header"><a href="#">PORTABLE &amp; FIELD RECORDERS</a></li>
                      <li class="dropdown-header"><a href="#">MICROPHONES</a></li>
                      <li><a href="#">CONDENSER MICROPHONES</a></li>
                      <li><a href="#">DYNAMIC MICROPHONES</a></li>
                      <li><a href="#">USB MICROPHONES</a></li>
                    </ul>
                  </li>
                </ul>
            </li>
            <li class="dropdown dropdown-large cent">
      				<a href="#" class="dropdown-toggle" data-toggle="dropdown">PRO AV</a>
      				<ul class="dropdown-menu dropdown-menu-large row">
      					<li class="col-sm-3">
      						<ul>
      							<li class="dropdown-header"><a href="#">TOURING &amp; CINEMA SOUND</a></li>
      							<li><a href="#">ACTIVE PA BUNDLES</a></li>
      							<li><a href="#">CINEMA SOUND SYSTEMS</a></li>
      							<li><a href="#">DIGITAL SNAKES &amp; ACCESSORIES</a></li>
                    <li><a href="#">FLOOR MONITORS</a></li>
                    <li><a href="#">INSTALLED SOUND</a></li>
                    <li><a href="#">LIGHTS</a></li>
                    <li><a href="#">LIVE SOUND PROCESSORS</a></li>
                    <li><a href="#">MIXERS</a></li>
                    <li><a href="#">PASSIVE PA SPEAKERS</a></li>
                    <li><a href="#">PA SYSTEMS</a></li>
                    <li><a href="#">PORTABLE PA SYSTEMS</a></li>
                    <li><a href="#">POWER AMPLIFIERS</a></li>
                    <li><a href="#">STANDS &amp; ACCESSORIES</a></li>
      						</ul>
      					</li>
      					<li class="col-sm-3">
      						<ul>
      							<li class="dropdown-header"><a href="#">PARTS &amp; SPARES</a></li>
      							<li><a href="#">CONNECTORS &amp; ADAPTERS</a></li>
      							<li><a href="#">SPEAKER COMPONENTS</a></li>
      							<li><a href="#">TOOLS &amp; SUPPLIES</a></li>
      							<li class="dropdown-header"><a href="#">BATTERY CHARGERS</a></li>
      						</ul>
      					</li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">BOSE PROSTORE</a></li>
                    <li class="dropdown-header"><a href="#">VIDEO EDITING</a></li>
                    <li class="dropdown-header"><a href="#">CAMERA ACCESSORIES</a></li>
                    <li class="dropdown-header"><a href="#">CONFERENCE SYSTEMS</a></li>
      							<li class="dropdown-header"><a href="#">WIRELESS SYSTEMS</a></li>
                    <li class="dropdown-header"><a href="#">LENS ACCESSORIES</a></li>
      						</ul>
      					</li>
                <li class="col-sm-3">
      						<ul>
                    <li class="dropdown-header"><a href="#">LIGHTING &amp; STAGE EFFECTS</a></li>
      							<li class="dropdown-header"><a href="#">VIDEO MIXERS &amp; sWITCHING</a></li>
                    <li class="dropdown-header"><a href="#">CAMERA BATTERIES</a></li>
      						</ul>
      					</li>
      				</ul>
      			</li>
            <li class="dropdown dropdown-large cent">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME AUDIO</a>
              <ul class="dropdown-menu dropdown-menu-large row">
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">MULTIMEDIA SPEAKERS</a></li>
                    <li class="dropdown-header"><a href="#">WIRELESS SPEAKERS</a></li>
                  </ul>
                </li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">BOOKSHELF SPEAKERS</a></li>
                    <li class="dropdown-header"><a href="#">AUDIO SPEAKERS</a></li>
                  </ul>
                </li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">BLUETOOTH SPEAKERS</a></li>
                    <li class="dropdown-header"><a href="#">SOUNDBAR SPEAKERS</a></li>
                  </ul>
                </li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">SUBWOOFERS SPEAKERS</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown dropdown-large cent">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">DJ GEAR</a>
              <ul class="dropdown-menu dropdown-menu-large row">
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">CD, MP3 &amp; MEDIA PLAYERS</a></li>
                    <li class="dropdown-header"><a href="#">DJ CONTROLLERS &amp; INTERFACES</a></li>
                    <li class="dropdown-header"><a href="#">DJ ACCESSORIES</a></li>
                  </ul>
                </li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">DJ SOFTWARE</a></li>
                    <li class="dropdown-header"><a href="#">PREMIUM DJ CONTROLLER INTERFACES</a></li>
                    <li class="dropdown-header"><a href="#">DJ HEADPHONES</a></li>
                  </ul>
                </li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">GROOVE PRODUCTION</a></li>
                    <li class="dropdown-header"><a href="#">PREMIUM GROOVE PRODUCTION GEAR</a></li>
                    <li class="dropdown-header"><a href="#">DJ MIXERS</a></li>
                  </ul>
                </li>
                <li class="col-sm-3">
                  <ul>
                    <li class="dropdown-header"><a href="#">KARAOKE</a></li>
                    <li class="dropdown-header"><a href="#">TURNTABLE ACCESSORIES</a></li>
                    <li class="dropdown-header"><a href="#">DJ PACKAGES</a></li>
                    <li class="dropdown-header"><a href="#">TURNTABLES</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div> <!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>
  </nav>
  <article>
  </article>
  <aside>
  </aside>
  <section>
    <!--Image Slide Scroll-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>
    <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <!-- 1920 x 450 img used-->
        <div class="item active">
          <img src="../images/001.jpg" alt="First slide">
        </div>
        <div class="item">
          <img src="../images/002.jpg" alt="Second slide">
        </div>
        <div class="item">
          <img src="../images/003.jpg" alt="Third slide">
        </div>
        <div class="item">
          <img src="../images/004.jpg" alt="Forth slide">
        </div>
      </div>
    </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container">
      <div class="page-header">
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/1.jpg" alt="">
                  <div class="overlay">
                     <h2>PREMIUM PRODUCTS</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/2.jpg" alt="">
                  <div class="overlay">
                     <h2>ELECTRIC GUITER BUNDLES</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/3.jpg" alt="">
                  <div class="overlay">
                     <h2>MID & PORTABLE KEYBOARDS</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/4.jpg" alt="">
                  <div class="overlay">
                     <h2>AUDIO INTERFACES</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/5.jpg" alt="">
                  <div class="overlay">
                     <h2>ELECTRIC & ACOUSTIC GUITARS</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/6.jpg" alt="">
                  <div class="overlay">
                     <h2>MONITORS/SPEAKERS</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/7.jpg" alt="">
                  <div class="overlay">
                     <h2>EFFECT PEDALS</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/8.jpg" alt="">
                  <div class="overlay">
                     <h2>GUITAR AMPLIFIERS & PROCESSORS</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/9.jpg" alt="">
                  <div class="overlay">
                     <h2>ACOUSTIC GUITAR BUNDLES</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/10.jpg" alt="">
                  <div class="overlay">
                     <h2>SOUND PROOFING ACOUSTIC TREATMENT</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/11.jpg" alt="">
                  <div class="overlay">
                     <h2>ELECTRONIC & ACOUSTIC DRUM KITS</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/12.jpg" alt="">
                  <div class="overlay">
                     <h2>KEYBOARD BUNDLES</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/13.jpg" alt="">
                  <div class="overlay">
                     <h2>BASS GUITARS & AMPLIFIERS</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/14.jpg" alt="">
                  <div class="overlay">
                     <h2>DJ CONTROLLERS INTERFACES</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="hovereffect thumbnail">
                  <img class="img-responsive" src="../images/15.jpg" alt="">
                  <div class="overlay">
                     <h2>CONDENSER & DYNAMIC MICROPHONES</h2>
                     <a class="info" href="#">SHOW</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-12">
        <h3>RECOMMENDED FOR YOU</h3>
        <div class="well-none">
          <div id="myCarousel" class="carousel slide">
          <!-- Carousel slide items down -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <h3>TOP SELLING PRODUCTS</h3>
        <div class="well-none">
          <div id="myCarousel1" class="carousel slide">
          <!-- Carousel slide items down -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                  <div class="col-sm-3 col-xs-3 wall-entry">
                    <a href="#">
                    <div class="hoeffect thumbnail">
                      <img src="../images/icon/plshold.jpg" alt="...">
                      <div class="caption">
                        <p class="inm">Baba Surjan Singh Tabla</p>
                        <p class="idec">Dayan - 14 cm, Bayan - 22 cm</p>
                        <p class="irs">&#8377;4,599</p>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i></a>
            <a class="right carousel-control" href="#myCarousel1" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <h3>Store Information</h3>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Money Back Guarantee</a></li>
          <li><a href="#">Buy with Confidence</a></li>
          <li><a href="#">Career Opportunities</a></li>
          <li><a href="#">Partner with us</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms of Use</a></li>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <h3>Support &amp; Service</h3>
          <li><a href="#">Order Lookup</a></li>
          <li><a href="#">View all Manufacturers</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Frequently Asked Questions</a></li>
          <li><a href="#">Points &amp; Rewards&#47;Loyalty Program</a></li>
          <li><a href="#">Shopping Guarantee</a></li>
          <li><a href="#">Standard &amp; Premium Warranty Plans</a></li>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <h3>Social Connection</h3>
          <li><a href="#"><img src="..\images\icon\1.jpg" height="30" width="30" alt="Facebook"></a></li>
          <li><a href="#"><img src="..\images\icon\2.jpg" height="30" width="30" alt="Twitter"></a></li>
          <li><a href="#"><img src="..\images\icon\3.png" height="30" width="30" alt="Google+"></a></li>
          <li><a href="#"><img src="..\images\icon\4.jpg" height="30" width="30" alt="Linkedin"></a></li>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <h3>News &amp; Updates</h3>
        </div>
      </div>
      <hr/>
      <div class="center text-muted">
        &copy; 2016, All rights reserved &#124; Developed by <a href="#">Soumyadeep Debnath</a> &amp; <a href="#">Shubham Khan</a> &#124; Saptak Musical Hut Private Limited
      </div>
    </div>
    <!-- jQuery Core JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <!--jquery UI JavaScript-->
    <script src="../js/jquery-ui.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="../js/dataTables.bootstrap.js"></script>
    <!-- DataTables Responsive JavaScript-->
    <script src="../js/dataTables.responsive.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="../js/morris.js"></script>
    <!-- Morris Charts Data JavaScript -->
    <script src="../js/morris-data.js"></script>
    <!-- Morris image JavaScript -->
    <script src="../js/raphael.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
    <!-- Custom JavaScript -->
    <script src="../js/script.js"></script>
  </footer>
</body>
</html>
