<?php

use App\Http\Controllers\User\UserController;
Use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BordOfDeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\MarqueeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\User\PasswordChange;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('admin/login',[AdminController::class,'AdminLogin']);

// ===================================== Admin Dashboard All Part =====================================

Route::group(['prefix'=>'admin','middleware' =>['admin','auth'],'namespace'=>'Admin'], function(){

    // ------------------------------ Admin Home Page ----------------------------------
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::post('profile/store', [AdminController::class, 'Store'])->name('admin.profile.store');
    Route::get('password/change', [AdminController::class, 'ChangePassword'])->name('admin.ChangePassword');
    Route::post('password/change', [AdminController::class, 'ChangeStore'])->name('admin.password.store');


    // ------------------------------ Admin Slider Page ----------------------------------
    Route::get('slider', [SliderController::class, 'index'])->name('slider');
    Route::get('slider/add', [SliderController::class, 'add'])->name('slider.add');
    Route::post('slider/store', [SliderController::class, 'Store'])->name('slider.store');
    Route::get('slider/edit/{id}', [SliderController::class, 'Edit'])->name('slider.edit');
    Route::post('slider/update/{id}', [SliderController::class, 'Update'])->name('slider.update');
    Route::get('slider/delete/{id}', [SliderController::class, 'Delete'])->name('slider.delete');


    // ------------------------------ Admin Slider Page ----------------------------------
    Route::get('marque', [MarqueeController::class, 'index'])->name('marque');
    Route::get('marque/add', [MarqueeController::class, 'add'])->name('marque.add');
    Route::post('marque/store', [MarqueeController::class, 'Store'])->name('marque.store');
    Route::get('marque/edit/{id}', [MarqueeController::class, 'Edit'])->name('marque.edit');
    Route::post('marque/update/{id}', [MarqueeController::class, 'Update'])->name('marque.update');
    Route::get('marque/delete/{id}', [MarqueeController::class, 'Delete'])->name('marque.delete');

    // ------------------------------ Admin Category Page----------------------------------
    Route::get('category', [CategoryController::class, 'index'])->name('category');
    Route::get('category/add', [CategoryController::class, 'add'])->name('category.add');
    Route::post('category/store', [CategoryController::class, 'Store'])->name('category.store');
    Route::get('category/edit/{id}', [CategoryController::class, 'Edit'])->name('category.edit');
    Route::post('category/update/{id}', [CategoryController::class, 'Update'])->name('category.update');
    Route::get('category/delete/{id}', [CategoryController::class, 'Delete'])->name('category.delete');

    // ------------------------------ Admin Sub-Category Page----------------------------------
    Route::get('subcategory', [SubCategoryController::class, 'index'])->name('subcategory');
    Route::get('subcategory/add', [SubCategoryController::class, 'add'])->name('subcategory.add');
    Route::post('subcategory/store', [SubCategoryController::class, 'Store'])->name('subcategory.store');
    Route::get('subcategory/edit/{id}', [SubCategoryController::class, 'Edit'])->name('subcategory.edit');
    Route::post('subcategory/update/{id}', [SubCategoryController::class, 'Update'])->name('subcategory.update');
    Route::get('subcategory/delete/{id}', [SubCategoryController::class, 'Delete'])->name('subcategory.delete');
    Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);

    // ------------------------------ Admin Country Page----------------------------------
    Route::get('country', [CountryController::class, 'index'])->name('country');
    Route::get('country/add', [CountryController::class, 'add'])->name('country.add');
    Route::post('country/store', [CountryController::class, 'Store'])->name('country.store');
    Route::get('country/edit/{id}', [CountryController::class, 'Edit'])->name('country.edit');
    Route::post('country/update/{id}', [CountryController::class, 'Update'])->name('country.update');
    Route::get('country/delete/{id}', [CountryController::class, 'Delete'])->name('country.delete');


    // ------------------------------ Admin Board Of Directors Speech  Page----------------------------------
    Route::get('board', [BordOfDeController::class, 'index'])->name('board');
    Route::get('board/add', [BordOfDeController::class, 'add'])->name('board.add');
    Route::post('board/store', [BordOfDeController::class, 'Store'])->name('board.store');
    Route::get('board/edit/{id}', [BordOfDeController::class, 'Edit'])->name('board.edit');
    Route::post('board/update/{id}', [BordOfDeController::class, 'Update'])->name('board.update');
    Route::get('board/delete/{id}', [BordOfDeController::class, 'Delete'])->name('board.delete');


});



Route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'User'], function(){
    // Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');


    // ------------------------------ User Profile Page----------------------------------
    Route::get('profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::get('profile/page', [ProfileController::class, 'Profile'])->name('profile.edit');
    Route::post('profile/update', [ProfileController::class, 'SettingUpdate'])->name('profile.update');
    Route::post('profile/pass/update', [ProfileController::class, 'PassSettingUpdate'])->name('pass.profile.update');
    Route::post('profile/Qid/update', [ProfileController::class, 'QidSettingUpdate'])->name('Qid.profile.update');
    Route::post('profile/lob/update', [ProfileController::class, 'LobSettingUpdate'])->name('lob.profile.update');
    Route::post('profile/oth/update', [ProfileController::class, 'othSettingUpdate'])->name('oth.profile.update');
    Route::post('profile/sig/update', [ProfileController::class, 'sigSettingUpdate'])->name('sig.profile.update');


    Route::get('password/change', [PasswordChange::class, 'ChangePassword'])->name('user.ChangePassword');
    Route::post('password/change', [PasswordChange::class, 'ChangeStore'])->name('user.password.store');


});



Route::get('/',[IndexController::class,'index'])->name('user.dashboard');
Route::get('board/dec',[IndexController::class,'BoardOfDer'])->name('user.boardOf');




