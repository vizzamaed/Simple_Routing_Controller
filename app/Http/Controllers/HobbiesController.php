<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index()
    {
        $data=array(
            "h1"=>"Cooking",
            "h2"=>"Crocheting",
            "h3"=>"Sleeping"
        );
        return view('hobbies', ['data'=>$data]);
    }
}
