<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Marquee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MarqueeController extends Controller
{
    public function index(){
        $marque = Marquee::latest()->get();
        return view('admin.marque.index',compact('marque'));
    } // End Method


    public function add(){
        return view('admin.marque.create');

    }// End add Method

    public function Store(Request $request){

        Marquee::insert([
            'marque' => $request->marque,
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Slider Uploaded Successfully ',
            'alert'=>'success'
        );
        return Redirect()->route('marque')->with($notification);

    }// End Method

    public function Edit($id){
        $marque = Marquee::findOrFail($id);
        return view('admin.marque.edit',compact('marque'));

    }// End Method

    public function Update(Request $request){
        $banner_id = $request->id;


            Marquee::findOrFail($banner_id)->Update([
                'marque' => $request->marque,
                'updated_at' => Carbon::now(),
            ]);
            $notification=array(
                'message'=>'Banner Updated Without Image Successfully ',
                'alert'=>'success'
            );
            return Redirect()->route('marque')->with($notification);

    } // End Method

    public function Delete($id){
        Marquee::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Banner Data Delete Successfully ',
            'alert'=>'success'
        );
        return Redirect()->back()->with($notification);
    } // End Method
}
