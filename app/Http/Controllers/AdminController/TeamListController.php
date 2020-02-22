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
              ->addColumn('action',
                    '<a href="{{ action(\'AdminController\TeamListController@show\',[$id]) }}" class="btn btn-md"><i class="fa fa-eye"></i></a>
                    <a href="{{ action(\'AdminController\TeamListController@edit\',[$id]) }}" class="btn btn-md" ><i class="fa fa-edit"></i></a>
                    <a href="{{ action(\'AdminController\TeamListController@destroy\',[$id]) }}" class="btn btn-md Delete" data-toggle="tooltip" data-placement="right" DeleteMessage="Delete Vehicle"><i class="fa fa-trash"></i></i></a>
                    <a href="" class="btn btn-primary" data-toggle="tooltip" data-placement="right" DeleteMessage="Delete Vehicle">Add</a>'
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'team_name' => 'required',
            'member[]' => 'required',
            'roll_num[]' => 'required',
            'department[]' => 'required',
            'year[]' => 'required',
        ]);
        // return request('department');
         try {
            $team_name=new Teamname;
            $team_name->team_name=request('team_name');
            $team_name->save();




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
        $Data['Team_name']=Teamname::where([['id',$id]])->get()->pluck('team_name');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
