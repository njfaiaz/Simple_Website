<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('admin.category.index',compact('categories'));

    } // End Index Method

    public function add(){
        return view('admin.category.create');

    }// End add Method

    public function Store(Request $request){
        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
            'created_at' => Carbon::now(),
        ]);
        $notification=array(
            'message'=>'Category Image Uploaded Successfully ',
            'alert'=>'success'
        );
        return Redirect()->route('category')->with($notification);

    }// End Method

    public function Edit($id){
        $category = Category::findOrFail($id);
        return view('admin.category.edit',compact('category'));

    }// End Method

    public function Update(Request $request){
        $category_id = $request->id;

            Category::findOrFail($category_id)->Update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
                'updated_at' => Carbon::now(),
            ]);
            $notification=array(
                'message'=>'Category Updated With Image Successfully ',
                'alert'=>'success'
            );
            return Redirect()->route('category')->with($notification);

    } // End Method

    public function Delete($id){

        Category::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Category Data Delete Successfully ',
            'alert'=>'success'
        );
        return Redirect()->back()->with($notification);
    } // End Method
}
