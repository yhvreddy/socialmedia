<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\DefaultModel;
use Auth;
class HomeModel extends DefaultModel
{
    public function uploadpostData($insertdata){
        $data = $this->insert_data('sm_posts',$insertdata);
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

    public function suggestfrends()
    {
        $rdata = DB::table('sm_friends_list')
                    ->where('from_id',Auth::user()->id)
                    ->get();

        
        $data = DB::table('sm_users')
                    //->join('sm_friends_list','sm_friends_list.to_id','=','sm_users.id')
                    ->where('id','!=',Auth::user()->id)
                    //->whereNotIn('sm_friends_list.to_id', $rids)
                    ->orderBy('id','DESC')
                    ->get();
        return $data;
    }

    public function usersrequest()
    {
        $select = DB::table('sm_friends_list')
                    ->where('from_id',Auth::user()->id)
                    ->get();
        return $select;
    }

    public function sendRequestsave($data)
    {
        $rdata = $this->insert_data('sm_friends_list',$data);
        return $rdata;
    }

}
