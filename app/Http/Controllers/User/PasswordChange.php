<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PasswordChange extends Controller
{
    public function ChangePassword(){
        return view('user.user_pass_change');
    } // End Method

     // Update Password ------------------------------------------------------------------------------
     public function ChangeStore(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'con_password' => 'required|min:8',
        ]);

        $db_pass = Auth::user()->password;
        $current_password = $request->old_password;
        $newPass = $request->new_password;
        $confirmPass = $request->con_password;

       if (Hash::check($current_password,$db_pass)) {
          if ($newPass === $confirmPass) {
              User::findOrFail(Auth::id())->update([
                'password' => Hash::make($newPass)
              ]);

              Auth::logout();
              $notification=array(
                'message'=>' Your Password Change Success. Now Login With New Password',
                'alert'=>'success'
            );
            return Redirect()->route('login')->with($notification);

          }else {

            $notification=array(
                'message'=>' New Password And Confirm Password Not Same',
                'alert'=>'error'
            );
            return back()->with($notification);
          }
       }else {
        $notification=array(
            'message'=>' Old Password Not Match',
                'alert'=>'error'
        );
        return Redirect()->back()->with($notification);
        }
    }// End Method
}
