<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\DefaultModel;

class HomeModel extends DefaultModel
{
    public function uploadpostData($insertdata){
        $data = $this->insert_data('sm_posts',$insertdata);
            //DB::table('sm_posts')->insertGetId($insertdata);
        return $data;
    }

    public function selectLastData($id)
    {
        $data = DB::table('sm_posts')->where(array('id'=>$id,'status'=>1))->orderBy('id','DESC')->get();
        return $data;
    }

    public function selectData()
    {
        $data = DB::table('sm_posts')->where(array('status'=>1))->orderBy('id','DESC')->get();
        return $data;
    }

}
