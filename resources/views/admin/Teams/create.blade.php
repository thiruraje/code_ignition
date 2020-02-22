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
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label>Member </label>
                                                <input type="text" class="form-control" placeholder="member 1" name="member[]" id="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label>Roll Number</label>
                                                <input type="number" class="form-control" placeholder="Roll Num"  name="roll_num[]" id="mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label>Department</label>
                                                <select id="department" name="department[]"class="form-control">
												  <option value="">Select Department</option>
												  <option value="cse">cse</option>
												  <option value="ece">ece</option>
												  <option value="mech">mech</option>
												  <option value="civil">civil</option>
												  <option value="Agri">Agri</option>
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
												  <option value="1 st">1 st</option>
												  <option value="2 st">2 st</option>
												  <option value="3 st">3 st</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                               
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="member 2" name="member[]" id="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control"  placeholder="Roll Num" name="roll_num[]" id="mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <select id="department" name="department[]"class="form-control">
												  <option value="">Select Department</option>
												  <option value="cse">cse</option>
												  <option value="ece">ece</option>
												  <option value="mech">mech</option>
												  <option value="civil">civil</option>
												  <option value="Agri">Agri</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <select id="department" name="year[]"class="form-control">
												  <option value="">Select Year</option>
												  <option value="1 st">1 st</option>
												  <option value="2 st">2 st</option>
												  <option value="3 st">3 st</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="member 3" name="member[]" id="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control" placeholder="Roll Num" name="roll_num[]" id="mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <select id="department" name="department[]"class="form-control">
												  <option value="">Select Department</option>
												  <option value="cse">cse</option>
												  <option value="ece">ece</option>
												  <option value="mech">mech</option>
												  <option value="civil">civil</option>
												  <option value="Agri">Agri</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <select id="department" name="year[]"class="form-control">
												  <option value="">Select Year</option>
												  <option value="1 st">1 st</option>
												  <option value="2 st">2 st</option>
												  <option value="3 st">3 st</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="member 4"  name="member[]" id="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="number" class="form-control" placeholder="Roll Num" name="roll_num[]" id="mobile">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <select id="department"name="department[]" class="form-control">
												  <option value="">Select Department</option>
												  <option value="cse">cse</option>
												  <option value="ece">ece</option>
												  <option value="mech">mech</option>
												  <option value="civil">civil</option>
												  <option value="Agri">Agri</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <select id="department" name="year[]"class="form-control">
												  <option value="">Select Year</option>
												  <option value="1 st">1 st</option>
												  <option value="2 st">2 st</option>
												  <option value="3 st">3 st</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                </div><br><br>
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