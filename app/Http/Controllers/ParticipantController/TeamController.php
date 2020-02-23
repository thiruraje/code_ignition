<?php

namespace App\Http\Controllers\ParticipantController;
use Illuminate\Contracts\Mail\Mailer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use App\Teamname;
use Mail;
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
                    $Team->roll_num = request('roll_num')[$key];
                    $Team->email = request('email')[$key];
                    $Team->department = request('department')[$key];
                    $Team->year = request('year')[$key];
                    $Team->save();
                }
            }
            return back()->with('success',['Team','Registered Successfully!']);
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

    public function mail()
    {
        $data = array('name'=>"Test Name");  
        Mail::send('email',["data"=>$data], function($message) { 
        $message->from('vklthiru2000@gmail.com','Sender');//mail=>to create view file where data to send data to view file  
        $message->to('thiruscholar@gmail.com', 'Thiru')->subject('Welcome To Cloudstar'); //To Sender mail id  $message->from('SenderMail@gmail.com','Sender //From Mail id  
        });   
        echo "Email Sent. Check your inbox.";  
    }


}
