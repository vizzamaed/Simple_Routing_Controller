<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $data=array(
            "PL"=>"Programming Language",
        );
        return view('skills', ['data'=>$data]);
    }
}
