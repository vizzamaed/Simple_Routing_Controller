<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        $data=array(
            "greetings"=>"Good Day!",
            "name"=>"Vizzamaed",
            "age"=>23
        );
        return view('about_me', ['data'=>$data]);
    }
}
