<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BodOfDe;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class BordOfDeController extends Controller
{
    public function index(){
        $board = BodOfDe::latest()->get();
        return view('admin.Bod-Of-De.index',compact('board'));
    } // End Method


    public function add(){
        return view('admin.Bod-Of-De.create');

    }// End add Method

    public function Store(Request $request){
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(500,500)->save('media/board/'.$name_gen);
        $save_url = ('media/board/'.$name_gen);



        BodOfDe::insert([
            'name' => $request->name,
            'disc' => $request->disc,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Slider Uploaded Successfully ',
            'alert'=>'success'
        );
        return Redirect()->route('board')->with($notification);

    }// End Method

    public function Edit($id){
        $slider = BodOfDe::findOrFail($id);
        return view('admin.Bod-Of-De.edit',compact('slider'));

    }// End Method

    public function Update(Request $request){
        $banner_id = $request->id;
        $old_img = $request->old_image;

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,500)->save('media/board/'.$name_gen);
            $save_url = ('media/board/'.$name_gen);

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            BodOfDe::findOrFail($banner_id)->Update([
                'name' => $request->name,
                'disc' => $request->disc,
                'image' => $save_url,
                'updated_at' => Carbon::now(),
            ]);
            $notification=array(
                'message'=>'Slider Updated With Image Successfully ',
                'alert'=>'success'
            );
            return Redirect()->route('board')->with($notification);

            $notification=array(
                'message'=>'Banner Updated Without Image Successfully ',
                'alert'=>'success'
            );
            return Redirect()->route('board')->with($notification);

    } // End Method

    public function Delete($id){
        $banner = BodOfDe::findOrFail($id);
        $img = $banner->slider;
        unlink($img);

        BodOfDe::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Banner Data Delete Successfully ',
            'alert'=>'success'
        );
        return Redirect()->back()->with($notification);
    } // End Method
}
