<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        $subcategories = SubCategory::latest()->get();
        return view('admin.sub_category.index',compact('subcategories'));

    } // End Index Method

    public function add(){
        $categories = Category::orderBy('category_name','ASC')->get();
        return view('admin.sub_category.create',compact('categories'));

    }// End add Method

    public function Store(Request $request){
        SubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-',$request->subcategory_name)),
        ]);
        $notification=array(
            'message'=>' Sub Category Uploaded Successfully ',
            'alert'=>'success'
        );
        return Redirect()->route('subcategory')->with($notification);

    }// End Method

    public function Edit($id){
        $categories = Category::orderBy('category_name','ASC')->get();
        $subcategory = SubCategory::findOrFail($id);
        return view('admin.sub_category.edit',compact('categories','subcategory'));

    }// End Method

    public function Update(Request $request){
        $subCat_id = $request->id;
        SubCategory::findOrFail($subCat_id)->Update([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-',$request->subcategory_name)),
        ]);
        $notification=array(
            'message'=>' Sub Category Update Successfully ',
            'alert'=>'success'
        );
        return Redirect()->route('subcategory')->with($notification);

    }// End Method


    public function Delete($id){
        SubCategory::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Sub Category Data Delete Successfully ',
            'alert'=>'success'
        );
        return Redirect()->back()->with($notification);
    } // End Method


    // Category to Subcategory Lode in Javascript Ajax --------------------------------------------------

    public function GetSubCategory($category_id){

        $subcategory = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcategory);

    } //End Method
}
