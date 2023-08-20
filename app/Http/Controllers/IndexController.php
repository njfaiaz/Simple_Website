<?php

namespace App\Http\Controllers;

use App\Models\BodOfDe;
use App\Models\Marquee;
use App\Models\OurProject;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $slider = Slider::latest()->get();
        $marque = Marquee::first();

        return view('home',compact('slider','marque'));
    }

    public function BoardOfDer(){
        $board = BodOfDe::latest()->get();
        return view('user.board_of_de',compact('board'));
    }

    public function OurProject(){
        $project = OurProject::latest()->get();
        return view('user.ourProject',compact('project'));
    }

    public function jobApply(){
        return view('user.job_Apply');
    }
}
