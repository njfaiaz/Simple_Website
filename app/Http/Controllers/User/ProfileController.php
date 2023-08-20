<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\User;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $setting = User::find(1);
        return view('user.profile',compact('setting'));
    }

    public function Profile(){
        $setting = User::find(1);
        $categories = Country::orderBy('country_name','ASC')->get();
        return view('user.profile_edit',compact('setting','categories'));
    }

    public function SettingUpdate(Request $request){

        $setting_id = $request->id;

        if ($request->file('photo')) {

        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(180,56)->save('media/profile/'.$name_gen);
        $save_url = 'media/profile/'.$name_gen;


        User::findOrFail($setting_id)->update([
            'nationality' => $request->nationality,
            'passport_no' => $request->passport_no,
            'passport_expiration_date' => $request->passport_expiration_date,
            'profession' => $request->profession,
            'join_date' => $request->join_date,
            'profession' => $request->profession,
            'gender' => $request->gender,
            'phone_qatar' => $request->phone_qatar,
            'phone_country' => $request->phone_country,
            'passport_address' => $request->passport_address,
            'Zone_no_address' => $request->Zone_no_address,
            'Street_no_address' => $request->Street_no_address,
            'House_no_address' => $request->House_no_address,
            'Unit_no_address' => $request->Unit_no_address,
            'Reference_Person_Name' => $request->Reference_Person_Name,
            'Reference_Person_Mobile_no' => $request->Reference_Person_Mobile_no,
            'Salary_Information' => $request->Salary_Information,
            'Notification' => $request->Notification,
            'Warning' => $request->Warning,
            'Note' => $request->Note,
            'Documents' => $request->Documents,
            'photo' => $save_url,
            'updated_at' => Carbon::now(),
        ]);

       $notification = array(
            'message' => 'Site Setting Updated with image Successfully',
            'alert' => 'success'
        );

        return redirect()->back()->with($notification);

        } else {

            User::findOrFail($setting_id)->update([
            'nationality' => $request->nationality,
            'passport_no' => $request->passport_no,
            'passport_expiration_date' => $request->passport_expiration_date,
            'profession' => $request->profession,
            'join_date' => $request->join_date,
            'profession' => $request->profession,
            'gender' => $request->gender,
            'phone_qatar' => $request->phone_qatar,
            'phone_country' => $request->phone_country,
            'passport_address' => $request->passport_address,
            'Zone_no_address' => $request->Zone_no_address,
            'Street_no_address' => $request->Street_no_address,
            'House_no_address' => $request->House_no_address,
            'Unit_no_address' => $request->Unit_no_address,
            'Reference_Person_Name' => $request->Reference_Person_Name,
            'Reference_Person_Mobile_no' => $request->Reference_Person_Mobile_no,
            'Salary_Information' => $request->Salary_Information,
            'Notification' => $request->Notification,
            'Warning' => $request->Warning,
            'Note' => $request->Note,
            'Documents' => $request->Documents,
            'updated_at' => Carbon::now(),
        ]);

       $notification = array(
            'message' => 'Site Setting Updated without image Successfully',
            'alert' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end else

    }// End Method

    public function PassSettingUpdate(Request $request){

        $setting_id = $request->id;

        $image = $request->file('passport_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(180,56)->save('media/passport_image/'.$name_gen);
        $save_url = 'media/passport_image/'.$name_gen;


        User::findOrFail($setting_id)->update([
            'passport_image' => $save_url,
            'updated_at' => Carbon::now(),
        ]);



       $notification = array(
            'message' => 'Site Setting Updated without image Successfully',
            'alert' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method

    public function QidSettingUpdate(Request $request){

        $setting_id = $request->id;

        $image = $request->file('qid_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(180,56)->save('media/qid_image/'.$name_gen);
        $save_url = 'media/qid_image/'.$name_gen;

        User::findOrFail($setting_id)->update([
            'qid_image' => $save_url,
            'updated_at' => Carbon::now(),
        ]);



       $notification = array(
            'message' => 'Site Setting Updated without image Successfully',
            'alert' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method

    public function LobSettingUpdate(Request $request){

        $setting_id = $request->id;


        $image = $request->file('labor_cont_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(180,56)->save('media/labor_cont_image/'.$name_gen);
        $save_url = 'media/labor_cont_image/'.$name_gen;

        User::findOrFail($setting_id)->update([
            'labor_cont_image' => $save_url,
            'updated_at' => Carbon::now(),
        ]);



       $notification = array(
            'message' => 'Site Setting Updated without image Successfully',
            'alert' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method

    public function othSettingUpdate(Request $request){

        $setting_id = $request->id;

        $image = $request->file('other_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(180,56)->save('media/other_image/'.$name_gen);
        $save_url = 'media/other_image/'.$name_gen;


        User::findOrFail($setting_id)->update([
            'other_image' => $save_url,
            'updated_at' => Carbon::now(),
        ]);

       $notification = array(
            'message' => 'Site Setting Updated without image Successfully',
            'alert' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method

    public function sigSettingUpdate(Request $request){

        $setting_id = $request->id;

        $image = $request->file('sig_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(180,56)->save('media/sig_image/'.$name_gen);
        $save_url = 'media/sig_image/'.$name_gen;


        User::findOrFail($setting_id)->update([
            'sig_image' => $save_url,
            'updated_at' => Carbon::now(),
        ]);

       $notification = array(
            'message' => 'Site Setting Updated without image Successfully',
            'alert' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method
}
