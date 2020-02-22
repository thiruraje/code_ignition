@extends('admin.layout.master')


@section('content')

 <div class="subheader">
    <h1 class="subheader-title">
        <i class='subheader-icon fal fa-edit'></i> Add Team
    </h1>
</div>

 <div class="row">
    <div class="col-xl-12">
        <div class="panel">
            <div class="panel-hdr">
                <h2>
                    Add Team
                </h2>
               
            </div><br>
            
            <div class="box-body">
                    <form class="form-horizontal"  action="{{ action('AdminController\TeamListController@store') }}" method="POST">
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
                                </div><br>
                                @endfor
                                
                               
                        
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
</div>
@endsection