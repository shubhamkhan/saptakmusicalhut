<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>SaptakMusicalHut</title>
      {{--Title icon --}}
    	<link href="{{ asset('images/icon/fiv_logo.png') }}" type="image/x-icon" rel="icon">
      {{-- Bootstrap Core CSS --}}
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      {{-- MetisMenu CSS --}}
      <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">
      {{-- Timeline CSS --}}
      <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
      {{-- Bootstrap UI CSS --}}
      <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
      {{-- Jquery UI CSS --}}
      <link href="{{ asset('css/jquery-ui.min.css')}}" rel="stylesheet">
      {{-- DataTables CSS --}}
      <link href="{{ asset('css/dataTables.bootstrap.css') }}" rel="stylesheet">
      {{-- DataTables Responsive CSS --}}
      <link href="{{ asset('css/dataTables.responsive.css') }}" rel="stylesheet">
      {{-- Morris Charts CSS --}}
      <link href="{{ asset('css/morris.css') }}" rel="stylesheet">
      {{-- Custom CSS --}}
      <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">
      {{-- Custom Fonts --}}
      <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
      {{-- Custom CSS --}}
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
      {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
      {{--[if lt IE 9]--}}
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      {{--[endif] --}}

    </head>
    <body>
      <div class="se-pre-con"></div>
      <header>
          <h1></h1>
      </header>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid navback">
          <div class="row sm_nav">
              {{-- --}}
          </div>
          <div class="row">
            {{-- Brand and toggle get grouped for better mobile display --}}
            <div class="navbar-header navbar-left">
              <img alt="Brand" class="brand" src="{{ asset('images/icon/nav_logo.png') }}">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <form class="navbar-form navbar-right">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="glyphicon glyphicon-search btn search" type="button"></button>
                  {{-- Trigger the modal with a button --}}
                  <button type="button" class="btn btn-default glyphicon glyphicon-user" data-toggle="modal" data-target="#myModal"></button>
                </span>
              </div>
              {{-- Login Modal --}}
              <div class="modal fade" tabindex="-1" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                  {{-- Login Modal content--}}
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
              {{-- SignUp Modal --}}
              <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">
                  {{-- SignUp Modal content--}}
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
                        <h6><i class="center">You agree to Saptak Musical Hut's <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></i></h6>
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
            {{-- Collect the nav links, forms, and other content for toggling --}}
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
            </div> {{-- /.navbar-collapse --}}
          </div>{{-- /.container-fluid --}}
        </div>
      </nav>
