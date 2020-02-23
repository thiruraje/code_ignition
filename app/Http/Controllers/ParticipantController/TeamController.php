<?php

namespace App\Http\Controllers\ParticipantController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use App\Teamname;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('create');
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
            'team_name'=>'required',
            'member.0'=>'required',
            'roll_num.0'=>'required', 
            'department.0'=>'required', 
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
        //
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
