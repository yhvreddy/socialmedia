<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\HomeModel;
use App\Http\Controllers\defaultController;

class HomeController extends defaultController
{

    public function __construct()
    {
        $this->home = new HomeModel;
    }

    public function index()
    {
        $suggestfriends = $this->home->suggestfrends();
        $postdata = $this->home->selectData();
        $friendrequestsent = $this->home->usersrequest();
        $requests = [];
        foreach($friendrequestsent as $values)
        {
            $requests[] = $values->to_id;
        }
        return view('home',compact('postdata','suggestfriends','requests'));
    }

    public function uploadPostData(Request $request)
    {
        if($request->hasFile('select_file'))
        {
            $image = $request->file('select_file');
            $new_name = rand() . '_' .Auth::user()->id.'_'.date('dmY').'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $imagepath = asset('public/images/'.$new_name);
        }else{
            $imagepath = '';
        }

        $data = ['description'=>$request->description, 'image'=>$imagepath, 'user_id'=>Auth::user()->id];
        $insert = $this->home->uploadpostData($data);
        if($insert != 0){
            $lastdata = $this->home->selectLastData($insert);
            $dataresponce = response()->json(['responsive'=>$insert,'message'=>'Post as successfully posted..!','lastdata'=>$lastdata]);
        }else{
            $dataresponce = response()->json(['responsive'=>$insert,'message'=>'Post as failed to posted..!','lastdata'=>'']);
        }
        return $dataresponce;
    }

    public function sendRequest(Request $request)
    {
        $data = array('from_id'=>$request->sender_id,'to_id'=> $request->request_id,'confirm'=>1);
        $insert = $this->home->sendRequestsave($data);
        if($insert != 0){
            $dataresponce = response()->json(['responsive'=>$insert,'message'=>'Post as successfully posted..!']);
        }else{
            $dataresponce = response()->json(['responsive'=>$insert,'message'=>'Post as failed to posted..!']);
        }
        return $dataresponce;
    }

    public function friendsList()
    {
        $friendrequestsent = $this->home->usersrequest();
        $suggestfriends = $this->home->suggestfrends();
        $requests = [];
        foreach($friendrequestsent as $values)
        {
            $requests[] = $values->to_id;
        }
        return view('friends',compact('suggestfriends','requests'));
    }

    public function messagesList()
    {
        return view('messages');
    }

}
