<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\JobApply;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class JobApplyController extends Controller
{
    public function jobStore(Request $request){

        $data =new JobApply();
        $file=$request->file;
        $file_name=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$file_name);
        $data->file=$file_name;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->subject=$request->subject;
        $data->job_des=$request->job_des;
        $data->created_at= Carbon::now();
        $data->save();


        $notification=array(
            'message'=>'Slider Uploaded Successfully ',
            'alert'=>'success'
        );
        return Redirect()->route('user.dashboard')->with($notification);

    }// End Method

    public function JobView(){
        $data = JobApply::all();
        return view('admin.job.index',compact('data'));
    }

    public function download(Request $request,$file){
        return response()->download(public_path('assets/'.$file));
    }

}
