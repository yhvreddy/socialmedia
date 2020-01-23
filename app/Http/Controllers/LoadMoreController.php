<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\defaultController;
class LoadMoreController extends defaultController
{
    public function load_data(Request $request)
    {
        if ($request->ajax())
        {
            if($request->id > 0)
            {
                $data = DB::table('sm_posts')
                            ->where('id','<', $request->id)
                            ->orderBy('id','DESC')
                            ->limit(5)
                            ->get();
            }else{
                $data = DB::table('sm_posts')
                    ->orderBy('id','DESC')
                    ->limit(5)
                    ->get();
            }

            $output = '';
            $last_id = '';
            if(!$data->isEmpty())
            {

                foreach ($data as $key => $value)
                {
                    $output .= '
                        <div class="post-bar">
                            <div class="post_topbar">
                                <div class="usy-dt">';
                                    if(Auth::user()->image != '') {
                                        $output .= '<img src="{{asset(Auth::user()->image)}}" alt="" style="max-width: 15%;">';
                                    }else{
                                        $output .= '<img src="{{asset(' . 'public/images/avatar.jpg' . ')}}" style="max-width: 15%;" alt="">';
                                    };
                        $output .= '<div class="usy-name">
                                        <h3>{{Auth::user()->name}}</h3>
                                        <span><img src="{{asset('."public/images/clock.png".')}}" alt="">3 min ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="job_descp">
                                <p>'.$value->description.'</p>
                            </div>
                            <div class="job-status-bar">
                                <ul class="like-com">
                                    <li>
                                        <a href="#"><i class="fas fa-heart"></i> Like</a>
                                        <img src="{{asset(\'public/images/liked-img.png\')}}" alt="">
                                        <span>25</span>
                                    </li>
                                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                </ul>
                                <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                            </div>
                        </div>
                    ';
                    $last_id = $value->id;
                }

                $output .= '
                    <div id="load_more">
                      <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="'.$last_id.'" id="load_more_button">Load More.</button>
                    </div>
                ';

            }else{
                $output .= '
                    <div id="load_more">
                          <button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found.</button>
                    </div>
                ';
            }
            echo $output;
        }
    }
}
