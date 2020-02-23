
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="body_bod">
<div class="bg-image"></div>
<div class="bg-text">
      <div class="container section-bg wow fadeInUp" id="contact" >
<h1 style="color: white;margin-top: -40px;">Register</h1>
<br>
  <form class="form-horizontal"  action="{{ action('ParticipantController\TeamController@store') }}" method="POST">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-sm-12">
                                    <label>Team Name</label>
                                    <input type="text" class="form-control" placeholder="Team Name" value="{{ old('team_name') }}" name="team_name" id="name">
                                </div>
                            </div>
                        </div>
                    </div><br>
                    @for($i=1;$i<=4;$i++)
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Member </label>
                                    <input type="text" class="form-control" placeholder="member {{ $i }}" name="member[]" id="password">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Roll Number</label>
                                    <input type="number" class="form-control" placeholder="Roll Number"  name="roll_num[]" id="mobile">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Department</label>
                                    <select id="department" name="department[]"class="form-control">
                                      <option value="">Select Department</option>
                                      <option value="cse">CSE</option>
                                      <option value="ece">ECE</option>
                                      <option value="mech">Mech</option>
                                      <option value="civil">Civil</option>
                                      <option value="agri">Agri</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Year</label>
                                    <select id="department"  name="year[]"class="form-control">
                                      <option value="">Select Year</option>
                                      <option value="1">I st</option>
                                      <option value="2">II nd</option>
                                      <option value="3">III rd</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-12" ><p align="center">
                                    <button type="submit" class="btn btn-success btn-block">Save</button>
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

     <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>


  <style type="text/css">
    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
.bg-image {
  /* The image used */
  background-image: url("img/intro-bg.jpg");
  
  /* Add the blur effect */
  filter: blur(3px);
  -webkit-filter: blur(3px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.8); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

  </style>
</body>
</html>