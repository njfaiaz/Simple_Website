<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function index(){
        $slider = Slider::latest()->get();
        return view('admin.slider.index',compact('slider'));
    } // End Method


    public function add(){
        return view('admin.slider.create');

    }// End add Method

    public function Store(Request $request){
        $image = $request->file('slider');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1920,1080)->save('media/banner/'.$name_gen);
        $save_url = ('media/banner/'.$name_gen);



        Slider::insert([
            'slider' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Slider Uploaded Successfully ',
            'alert'=>'success'
        );
        return Redirect()->route('slider')->with($notification);

    }// End Method

    public function Edit($id){
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit',compact('slider'));

    }// End Method

    public function Update(Request $request){
        $banner_id = $request->id;
        $old_img = $request->old_image;

            $image = $request->file('slider');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1920,1080)->save('media/banner/'.$name_gen);
            $save_url = ('media/banner/'.$name_gen);

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Slider::findOrFail($banner_id)->Update([
                'slider' => $save_url,
                'updated_at' => Carbon::now(),
            ]);
            $notification=array(
                'message'=>'Slider Updated With Image Successfully ',
                'alert'=>'success'
            );
            return Redirect()->route('slider')->with($notification);

            $notification=array(
                'message'=>'Banner Updated Without Image Successfully ',
                'alert'=>'success'
            );
            return Redirect()->route('slider')->with($notification);

    } // End Method

    public function Delete($id){
        $banner = Slider::findOrFail($id);
        $img = $banner->slider;
        unlink($img);

        Slider::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Banner Data Delete Successfully ',
            'alert'=>'success'
        );
        return Redirect()->back()->with($notification);
    } // End Method


}
