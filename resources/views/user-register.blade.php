<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Code Ignition</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{url('img/fav.png')}}" rel="icon">
  <link href="{{url('img/fav.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{url('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{url('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{url('lib/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{url('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>
<style>
.avatar {
  vertical-align: center;
  width: 200px;
  height: 200px;
  border-radius: 50%;
}
</style>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="{{url('img/lo.png')}}" width="150px" height="180px" alt="" title=""></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#speakers">Speaker</a></li>
          <li><a href="#schedule">Schedule</a></li>
          <li><a href="#venue">Venue</a></li>
          <li><a href="#entrepreneur">Entrepreneur's</a></li>
          <li><a href="#supporters">Sponsors</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Welcome <br>to<br><span>Code Ignition</span> </h1>
      <p class="mb-4 pb-0" >Intra College Tech Fest</p>
      <p class="mb-4 pb-0" style="font-family: sans-serif;">Feb 28  Friday, Common Computing Lab, 3rd Floor</p>
      <br>
      <a href="#about" class="about-btn scrollto">About Code Ignition</a>
      <a href="{{ action('ParticipantController\TeamController@create') }}" class="about-btn scrollto"  data-target="#buy-ticket-modal" data-ticket-type="standard-access">Register</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About of Code Ignition</h2>
            <p>Code Ignition is an event where you can showcase your skills and compete with others to find the best.<br>It is not just about the competitions and also an event where you can learn more and gain knowledge , also be an inspired.</p>
            <p>Code Ignition has multiple rounds.<br># PUZZLE<br># Problem Solving and Solution Finding<br># Code Sense</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>3rd Floor, Common Computing Lab, SSCET</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Feb 28 - 2K20<br>Friday</p>
          </div>
        </div>
      </div>
    </section>
<div id="buy-ticket-modal" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    </div>
  </div>
</div>
</form></div></div>
    
  	<section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Event Speaker</h2>
          <p>Successful Entrepreneur</p>
        </div>
        <div class="col 5 text-center">
	            <div class="speaker">
	          <img class="  img-fluid" src="img/kishore_fintech.jpg" style=" border-radius: 10%;" width="300" alt=""/>
          	</div>
        <h2>Mr.Kishorekumar Chandrasekaran </h2><br>
	      <div class="social">
                  <a href="https://fintechgie.com/"><i class="fa fa-internet-explorer"></i></a>&nbsp;&nbsp;
                  <a href="https://facebook.com/fintechgie/"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
                  <a href="https://www.instagram.com/fintechgie/"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;
                  <a href="https://www.linkedin.com/company/fintechgie"><i class="fa fa-linkedin"></i></a>
                </div>
	      </div>
      </div>
    </section>
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Event Schedule</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" style="width: 20;" data-toggle="tab">Inauguration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Round 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Round 2 & 3</a>
          </li>
        </ul>

        <h3 class="sub-heading">Build Your Ideas</h3>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
            <div class="row schedule-item">
                <div class="col-md-2"><time>09:30 AM</time></div>
                <div class="col-md-10">
                  <h4>Inauguration Start</h4>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>9:45 AM</time></div>
                <div class="col-md-10">
                  <h4>Wellcome Address</h4>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>10:00 AM</time></div>
                <div class="col-md-10">
                  <h4>Presidential Address</h4>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>10:15 AM</time></div>
                <div class="col-md-10">
                  <h4>Introduction of Chief Guests</h4>
                </div>
              </div>

              <div class="row schedule-item">
                <div class="col-md-2"><time>10:30 AM</time></div>
                <div class="col-md-10">
                  <h4>Address by the Chief Guests</h4>
                  <p>Mr.Kishorekumar Chandrasekaran</p>
                </div>
              </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:45 AM to 11:00</time></div>
              <div class="col-md-10">
                <h4>Tea Break</h4>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                
                <h4>Puzzle</h4>
                <p>To arrange the jumbled code lines into correct format and get the output.</p>
                <p>10-puzzle with 15 mins.</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 PM</time></div>
              <div class="col-md-10">
                <h4>Round 2</h4><br>
                <h5>Problem sloving and solution finding</h5>
                <p>To find tha logical output on particular problem.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>1:00 PM to 2:00 PM</time></div>
              <div class="col-md-10">
                
                <h4>Lunch Break</h4>
              </div>
            </div>
            <div class="row schedule-item">
              <div class="col-md-2"><time>2:00 PM</time></div>
              <div class="col-md-10">
                <h4>Round 3</h4>
                <h5>Code Sense</h5>
                <p>It is about to take a real world problem of your own and should give the solution for that problem.</p>
              </div>
            </div>
            <div class="row schedule-item">
              <div class="col-md-2"><time>4:00 PM</time></div>
              <div class="col-md-10">
                <h4>Price Distribution.</h4>
              </div>
            </div>
            <div class="row schedule-item">
              <div class="col-md-2"><time>4:30 PM</time></div>
              <div class="col-md-10">
                <h4>Event End</h4>
                <p>National Anthem</p>
              </div>
            </div>
          </div>
          <!-- End Schdule Day 2 -->
        </div>
      </div>
    </section>
    <!--==========================
      Venue Section
    ============================-->
  <section id="venue" class="wow fadeInUp">
      <div class="container-fluid">
        <div class="section-header">
          <h2>Event Venue</h2>
          <p> Comman Computing Lab 3'rd Floor</p>
        </div>
      </div>
      <br><br>
      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/audi.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/audi.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/mugh.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/mugh.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/audi2.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/audi2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/sha.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/sha.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>   
        </div>
      </div>
    </section>


    <section id="entrepreneur" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Entrepreneur's</h2>
           <p> Chief Guest's</p>
          <p></p>
        </div>
        <div class=container">
          <div class="row">
              <div class="col-md-4">
                  <div class="speaker">
                      <img class="  img-fluid" align="center" src="img/sudhakar_greefi.jpg" style=" border-radius: 50%;" width="200" alt=""/>
                  </div><br>
                  <h3 >Mr.Sudhakar       Annadurai</h3><p align="center">Greefi Technologies</p>
              </div>
              <div class="col-md-4">
                  <div class="speaker">
                      <img class="  img-fluid" src="img/kishore_fintech.jpg" style=" border-radius: 50%;" width="280" alt=""/>
                  </div><br>
                  <h3 >Mr.Kishorekumar      Chandrasekaran </h3><p >FintechGie,Inc.</p>
              </div>
               <div class="col-md-4">
                   <div class="speaker">
                      <img class="  img-fluid" src="img/karthikeyan_skyline.jpg" style=" border-radius: 50%;" width="200" alt=""/>
                  </div><br>
                  <h3 >Mr.Karthikeyan </h3><br><p >SkyLine Web Services</p>
              </div>
              <!--  <div class="col-md-3">
                   <div class="speaker">
                      <img class="  img-fluid" src="img/karthikeyan_skyline.jpg" style=" border-radius: 50%;" width="200" alt=""/>
                  </div><br>
                  <h3 align="center">Mr.Mohan Shanmugham </h3><p align="center">Greefi Technologies</p>
              </div> -->
          </div>
        </div>
      </div>
    </section>

    <section id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">

          <div class="col-lg-4 col-md-4 col-xs-4">
            <div class="supporter-logo">
              <div class="form-group">
                
              <img src="{{url('img/LabelGreefi.png')}}" class="img-fluid"  alt=""><br>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-4 col-xs-4">
            <div class="supporter-logo">
              <img src="{{url('img/LabelFintechGie.png')}}" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-4 col-md-4 col-xs-4">
            <div class="supporter-logo">
              <img src="{{url('img/supporters/skyline_1.jpeg')}}" class="img-fluid" alt="">
            </div>
          </div>
        </div>

      </div>

    </section>
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Keep touch with us</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Common Computing Lab, 3rd Floor, SSCET.</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+6380981817">Yuvaraj.P : +91 6380981817</a></p>
              <p><a href="tel:+8825908744">Kavin Kishore.E : +91 8825908744</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:yuvaraj232k@gmail.com">yuvaraj232k@gmail.com</a></p>
              <p><a href="mailto:kavinkishoree2000@gmail.com">kavinkishoree2000@gmail.com</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

      
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong> Code Ignition</strong>. All Rights Reserved
      </div>
      <div class="credits">
    
        Designed by <a href="">Code Ignition Designers & Developers</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{url('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{url('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{url('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('lib/easing/easing.min.js')}}"></script>
  <script src="{{url('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{url('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{url('lib/wow/wow.min.js')}}"></script>
  <script src="{{url('lib/venobox/venobox.min.js')}}"></script>
  <script src="{{url('lib/owlcarousel/owl.carousel.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{url('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{url('js/main.js')}}"></script>
</body>

</html>
