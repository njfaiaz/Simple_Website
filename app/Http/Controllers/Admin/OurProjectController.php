<?php

namespace App\Http\Controllers\Admin;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Controller;
use App\Models\OurProject;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OurProjectController extends Controller
{
    public function index(){
        $board = OurProject::latest()->get();
        return view('admin.our_project.index',compact('board'));
    } // End Method


    public function add(){
        return view('admin.our_project.create');

    }// End add Method

    public function Store(Request $request){
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(500,500)->save('media/project/'.$name_gen);
        $save_url = ('media/project/'.$name_gen);



        OurProject::insert([
            'project_name' => $request->project_name,
            'project_dec' => $request->project_dec,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Slider Uploaded Successfully ',
            'alert'=>'success'
        );
        return Redirect()->route('project')->with($notification);

    }// End Method

    public function Edit($id){
        $slider = OurProject::findOrFail($id);
        return view('admin.our_project.edit',compact('slider'));

    }// End Method

    public function Update(Request $request){
        $banner_id = $request->id;
        $old_img = $request->old_image;

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,500)->save('media/project/'.$name_gen);
            $save_url = ('media/project/'.$name_gen);

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            OurProject::findOrFail($banner_id)->Update([
                'project_name' => $request->project_name,
                'project_dec' => $request->project_dec,
                'image' => $save_url,
                'updated_at' => Carbon::now(),
            ]);
            $notification=array(
                'message'=>'Slider Updated With Image Successfully ',
                'alert'=>'success'
            );
            return Redirect()->route('project')->with($notification);

            $notification=array(
                'message'=>'Banner Updated Without Image Successfully ',
                'alert'=>'success'
            );
            return Redirect()->route('project')->with($notification);

    } // End Method

    public function Delete($id){
        $banner = OurProject::findOrFail($id);
        $img = $banner->image;
        unlink($img);

        OurProject::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Banner Data Delete Successfully ',
            'alert'=>'success'
        );
        return Redirect()->back()->with($notification);
    } // End Method
}
