<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Teamname;
use App\Team;

class TeamListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax()){
           $teams =  Teamname::get();
            return DataTables::of($teams)
                ->addColumn('team_leader',function($team){
                    $TeamMember = $team->Team;
                    return $TeamMember->member_name.' ( '.ucfirst($TeamMember->department).' - '.integerToRoman($TeamMember->year).' ) ';
                })
              ->addColumn('action',
                    '<a href="{{ action(\'AdminController\TeamListController@show\',[$id]) }}" class="btn btn-md"><i class="fa fa-eye"></i></a>
                    <a href="{{ action(\'AdminController\TeamListController@edit\',[$id]) }}" class="btn btn-md" ><i class="fa fa-edit"></i></a>
                    <a href="{{ action(\'AdminController\TeamListController@destroy\',[$id]) }}" class="btn btn-md Delete" data-toggle="tooltip" data-placement="right" DeleteMessage="Delete Team"><i class="fa fa-trash"></i></i></a>
                    <a href="" class="btn btn-primary" data-toggle="tooltip" >Add</a>'
                )
                ->rawColumns(['action'])->make(true);
        }
        return view('admin.Teams.team_list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Teams.create');
    }


    public function store(Request $request){ 
        $this->validate(request(),[
            'team_name'=>'required',
            'member.0'=>'required',
            'email.0'=>'required',
            'roll_num.0'=>'required', 
            'department.0'=>'required', 
            'year.0'=>'required', 
        ],[
            'member.0.required'=>'First Team Member Name is Needed',
            'roll_num.0.required'=>'First Roll Number is Needed',
            'email.0.required'=>'First Email is Needed',
            'department.0.required'=>'First Team Member Name is Needed',
            'year.0.required'=>'First Team Member Name is Needed',
        ]);
        try{ 
            $Teamname=new Teamname; 
            $Teamname->team_name=request('team_name');
            $Teamname->save();

            foreach (request('member') as $key => $value) {
                if (!empty(request('member')[$key]) && !empty(request('roll_num')[$key])) {
                    $Team = new Team;
                    $Team->team_id = $Teamname->id;
                    $Team->member_name = request('member')[$key];
                    $Team->email = request('email')[$key];
                    $Team->roll_num = request('roll_num')[$key];
                    $Team->department = request('department')[$key];
                    $Team->year = request('year')[$key];
                    $Team->save();
                }
            }
            return back()->with('success',['Team','Added Successfully!']);
        }catch (Exception $e){
            return back()->with('danger','Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Data['Team_name']=Teamname::findorfail($id);
        $Data['Team_details']=Team::where([['team_id',$id]])->get();
        return view('admin.Teams.view',$Data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Data['TeamName']=Teamname::findorfail($id);
        $Data['TeamDetails']=Team::where([['team_id',$id]])->get();
        return view('admin.Teams.edit',$Data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'team_name'=>'required',
            'member.0'=>'required',
            'roll_num.0'=>'required', 
            'department.0'=>'required', 
        ]); 
        try{ 
            $Teamname=Teamname::findorfail($id); 
            $Teamname->team_name=request('team_name');
            $Teamname->save();

            foreach (request('member') as $key => $value) {
                if (!empty(request('member')[$key]) && !empty(request('roll_num')[$key])) {
                    if(isset(request('TeamDetailId')[$key])){
                        $Team = Team::findorfail(request('TeamDetailId')[$key]);
                    }else{
                        $Team = new Team;
                    }
                    $Team->team_id = $Teamname->id;
                    $Team->member_name = request('member')[$key];
                    $Team->roll_num = request('roll_num')[$key];
                    $Team->department = request('department')[$key];
                    $Team->year = request('year')[$key];
                    $Team->save();

                }
            }
            return back()->with('success',['Team','Added Successfully!']);
        }catch (Exception $e){
            return back()->with('danger','Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Teamname::findorfail($id)->delete();
            Team::where([['team_id',$id]])->delete();
            return $output = ['status' => 'success','msg' => 'Team Deleted Successfully'];
        }catch (\Exception $e){
            return back()->with('sorry','Sorry,Something went wrong!');
        }
    }
}
