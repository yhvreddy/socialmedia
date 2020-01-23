<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\defaultModel;
use App\User;
use DB;
use Session;
class defaultController extends Controller
{

    public function users(){
        return User::all();
    }

    public function isLoggedin(){
        if(session()->exists('islogin') && session()->get('islogin') == 1){
        }else{
            redirect('/');
        }
    }

    public function uploadfile($request,$name,$path){
        if($request->hasfile($name)){
            $file = $request->file($name);
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move($path,$filename);
            return $path.'/'.$filename;
        }else{
            return 0;
        }
    }

    function genPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function print_r($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

}
