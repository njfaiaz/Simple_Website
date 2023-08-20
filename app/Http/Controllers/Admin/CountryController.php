<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        $categories = Country::latest()->get();
        return view('admin.country.index',compact('categories','country'));

    } // End Index Method

    public function add(){

        return view('admin.country.create');

    }// End add Method

    public function Store(Request $request){
        Country::insert([
            'country_name' => $request->country_name,
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Category Image Uploaded Successfully ',
            'alert'=>'success'
        );
        return Redirect()->route('country')->with($notification);

    }// End Method

    public function Edit($id){
        $category = Country::findOrFail($id);
        return view('admin.country.edit',compact('category'));

    }// End Method

    public function Update(Request $request){
        $category_id = $request->id;

        Country::findOrFail($category_id)->Update([
                'country_name' => $request->country_name,
                'updated_at' => Carbon::now(),
            ]);
            $notification=array(
                'message'=>'Category Updated With Image Successfully ',
                'alert'=>'success'
            );
            return Redirect()->route('country')->with($notification);

    } // End Method

    public function Delete($id){

        Country::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Category Data Delete Successfully ',
            'alert'=>'success'
        );
        return Redirect()->back()->with($notification);
    } // End Method
}
