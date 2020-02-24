
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="{{ url('img/fav.png') }}" rel="icon">
  <link href="{{ url('img/fav.png') }}" rel="apple-touch-icon">

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style type="text/css">
.div-style{
    margin-top : 4rem;
    padding : 6rem;
    background: white;
    width: 115%;
    height: 100%;
    border-radius: 20px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 0.5rem 1rem 0px;
}
.text-box{
    border-radius: 1rem;
    margin-top : 1rem;
}
.button-submit{
    width: 50%;
    border-radius: 1rem;
    margin-top : 1rem
}
.body-background {
    background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
}
.main-label{
    margin: 1rem;}
</style>
<body class="bg-image">
    <div class="container" style="width: 80%">
        <div class="row d-flex justify-content-center mx-auto">
            <div class="col-md-2 col-xs-6 div-style">
              <h2 class="center">Register</h2><br>
              <form class="form-horizontal"  action="{{ action('ParticipantController\TeamController@store') }}" method="POST">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <div class="col-sm-12">
                                        <label>Team Name</label>
                                        <input type="text" class="form-control" placeholder="Team Name" value="{{ old('team_name') }}" name="team_name" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        @for($i=1;$i<=4;$i++)
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>Member </label>
                                        <input type="text" class="form-control" placeholder="member {{ $i }}" name="member[]" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email"  name="email[]" >
                                    </div>
                                </div>
                            </div>
                             <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>Reg Number</label>
                                        <input type="number" class="form-control" placeholder="Reg Number"  name="roll_num[]" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>Department</label>
                                        <select  name="department[]"class="form-control">
                                          <option value="">Select Dept</option>
                                          <option value="cse">Cse</option>
                                          <option value="ece">Ece</option>
                                          <option value="mech">Mech</option>
                                          <option value="civil">Civil</option>
                                          <option value="agri">Agri</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>Year</label>
                                        <select   name="year[]"class="form-control">
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
                        </div><br>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</body>

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
  background-image: url("{{ url('img/intro-bg.jpg') }}");
  height: 100%; 
  background-position: center;
  background-repeat: repeat;
  background-size: cover;
}

  </style>
  @include('errors')
</body>
</html>