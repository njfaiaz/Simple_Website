<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function Setting(){
        $setting = Setting::find(1);
        return view('admin.setting',compact('setting'));
    }



    public function SettingView(Request $request){

        $setting_id = $request->id;

        if ($request->file('logo','profile')) {

        $image = $request->file('logo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(180,56)->save('media/admin/'.$name_gen);
        $save_url = 'media/admin/'.$name_gen;

        $image = $request->file('profile');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(180,56)->save('media/admin/'.$name_gen);
        $save_url = 'media/admin/'.$name_gen;


        Setting::findOrFail($setting_id)->update([
            'name' => $request->name,
            'logo' => $save_url,
            'profile' => $save_url,
            'updated_at' => Carbon::now(),
        ]);

       $notification = array(
            'message' => 'Site Setting Updated with image Successfully',
            'alert' => 'success'
        );

        return redirect()->back()->with($notification);

        } else {

            Setting::findOrFail($setting_id)->update([
            'name' => $request->name,
            'updated_at' => Carbon::now(),
        ]);

       $notification = array(
            'message' => 'Site Setting Updated without image Successfully',
            'alert' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end else

    }// End Method
}
