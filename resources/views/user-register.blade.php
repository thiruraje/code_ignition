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
           <li><a href="#gallery">Gallery</a></li>
          
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
      <p class="mb-4 pb-0" style="font-family: sans-serif;">Feb 28, Common Computing Lab, 3rd Floor</p>
      <br>
      <a href="#about" class="about-btn scrollto">About of Code Ignition</a>
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
            <p>Code Ignition has multiple rounds.<br># PUZZLE<br># Fully Technical(Problem Solving and Solution Finding)<br>#</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>3rd Floor, Common Computing Lab, SSCET</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Feb 28 - 2K2K<br>Friday</p>
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
<div class="modal-body">
  <form method="POST" action="#">
  
      <div class="form-group">
        <input type="text" class="form-control" name="team-name" placeholder="Team Name *">
      </div>
  
        <div class="form-group">
            <input type="text" class="form-control" name="head-name" placeholder="Team Head Name *">
          </div>
        
          <div class="form-group">
            <select id="ticket-type" name="ticket-type" class="form-control" >
              <option value="standard-access">CSE</option>
              <option value="standard-access-1">ECE</option>
              <option value="pro-access">Mech</option>
              <option value="premium-access">Agri</option>
              <option value="premium-access-1">Civil</option>
            </select>
          </div>
        
          <div class="form-group">
            <select id="ticket-type" name="ticket-type" class="form-control" >
              <option value="standard-access">1st Year</option>
              <option value="standard-access-1">2nd Year</option>
              <option value="pro-access">3rd Year</option>
              
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="first-name" placeholder="First  Team Member Name*">
          </div>
          <div class="form-group">
            <select id="ticket-type" name="ticket-type" class="form-control" >
              <option value="standard-access">CSE</option>
              <option value="standard-access-1">ECE</option>
              <option value="pro-access">Mech</option>
              <option value="premium-access">Agri</option>
              <option value="premium-access-1">Civil</option>
            </select>
          </div>
        
          <div class="form-group">
            <select id="ticket-type" name="ticket-type" class="form-control" >
              <option value="standard-access">1st Year</option>
              <option value="standard-access-1">2nd Year</option>
              <option value="pro-access">3rd Year</option>
              
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="second-name" placeholder="Second  Team Member Name*">
          </div>
          <div class="form-group">
            <select id="ticket-type" name="ticket-type" class="form-control" >
              <option value="standard-access">CSE</option>
              <option value="standard-access-1">ECE</option>
              <option value="pro-access">Mech</option>
              <option value="premium-access">Agri</option>
              <option value="premium-access-1">Civil</option>
            </select>
          </div>
        
          <div class="form-group">
            <select id="ticket-type" name="ticket-type" class="form-control" >
              <option value="standard-access">1st Year</option>
              <option value="standard-access-1">2nd Year</option>
              <option value="pro-access">3rd Year</option>
              
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="thired-email" placeholder="Thired  Team Member Name *">
          </div>

          <div class="form-group">
            <select id="ticket-type" name="ticket-type" class="form-control" >
              <option value="standard-access">CSE</option>
              <option value="standard-access-1">ECE</option>
              <option value="pro-access">Mech</option>
              <option value="premium-access">Agri</option>
              <option value="premium-access-1">Civil</option>
            </select>
          </div>
        
          <div class="form-group">
            <select id="ticket-type" name="ticket-type" class="form-control" >
              <option value="standard-access">1st Year</option>
              <option value="standard-access-1">2nd Year</option>
              <option value="pro-access">3rd Year</option>
              
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class="btn">Register</button>
          </div>
        </form>
      </div>
     </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
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
	          <img class="  img-fluid" src="img/kishore_fintech.jpeg" style=" border-radius: 70%;" width="350" alt=""/>
          	</div>
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
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">Round 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">Round 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">Round 3</a>
          </li>
        </ul>

        <h3 class="sub-heading">Build Your Ideas</h3>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            <div class="row schedule-item">
              <div class="col-md-2"><time>09:30 AM</time></div>
              <div class="col-md-10">
                <h4>Registration</h4>
                <p>Fugit voluptas iusto maiores temporibus autem numquam magnam.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/1.jpg')}}" alt="Brenden Legros">
                </div>
                <h4>Keynote <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/2.jpg')}}" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/3.jpg')}}" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/4.jpg')}}" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/5.jpg')}}" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/6.jpg')}}" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/1.jpg')}}" alt="Brenden Legros">
                </div>
                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/2.jpg')}}" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/3.jpg')}}" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/4.jpg')}}" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/5.jpg')}}" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/6.jpg')}}" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/2.jpg')}}" alt="Hubert Hirthe">
                </div>
                <h4>Et voluptatem iusto dicta nobis. <span>Hubert Hirthe</span></h4>
                <p>Maiores dignissimos neque qui cum accusantium ut sit sint inventore.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/3.jpg')}}" alt="Cole Emmerich">
                </div>
                <h4>Explicabo et rerum quis et ut ea. <span>Cole Emmerich</span></h4>
                <p>Veniam accusantium laborum nihil eos eaque accusantium aspernatur.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>12:00 AM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/1.jpg')}}" alt="Brenden Legros">
                </div>
                <h4>Libero corrupti explicabo itaque. <span>Brenden Legros</span></h4>
                <p>Facere provident incidunt quos voluptas.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>02:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/4.jpg')}}" alt="Jack Christiansen">
                </div>
                <h4>Qui non qui vel amet culpa sequi. <span>Jack Christiansen</span></h4>
                <p>Nam ex distinctio voluptatem doloremque suscipit iusto.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>03:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/5.jpg')}}" alt="Alejandrin Littel">
                </div>
                <h4>Quos ratione neque expedita asperiores. <span>Alejandrin Littel</span></h4>
                <p>Eligendi quo eveniet est nobis et ad temporibus odio quo.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>04:00 PM</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="{{url('img/speakers/6.jpg')}}" alt="Willow Trantow">
                </div>
                <h4>Quo qui praesentium nesciunt <span>Willow Trantow</span></h4>
                <p>Voluptatem et alias dolorum est aut sit enim neque veritatis.</p>
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
          <p>Event venue location Comman Computing Lab 3'rd Floor</p>
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
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
        <a href="{{url('img/gallery/compony.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{url('img/gallery/compony.jpg')}}" alt=""></a>
        <a href="{{url('img/gallery/fintech_1.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{url('img/gallery/fintech_1.jpg')}}" alt=""></a>
        <a href="{{url('img/gallery/gre_fin.jpg')}}" class="venobox" data-gall="gallery-carousel"><img src="{{url('img/gallery/gre_fin.jpg')}}" alt=""></a>
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
                
              <img src="{{url('img/supporters/greefi.png')}}" class="img-fluid"  alt=""><br>
              </div>
              Greefi Technologies
            </div>
          </div>
          
          <div class="col-lg-4 col-md-4 col-xs-4">
            <div class="supporter-logo">
              <img src="{{url('img/supporters/fintechgie.jpg')}}" class="img-fluid" alt="">
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
