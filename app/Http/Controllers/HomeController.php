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
        $postdata = $this->home->selectData();
        return view('home',compact('postdata'));
    }

    public function uploadPostData(Request $request){

        //dd($request);

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
            $dataresponce = response()->json(['responsive'=>$insert,'message'=>'Post as successfully posted..!','data'=>$lastdata]);
        }else{
            $dataresponce = response()->json(['responsive'=>$insert,'message'=>'Post as failed to posted..!','data'=>'']);
        }
        return $dataresponce;
    }
}
