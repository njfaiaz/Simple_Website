@extends('admin.admin_dashboard')
@section('title','Sub Category Edit')
@section('content')
<link href="{{ asset('admin/assets') }}/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Edit Member Details</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Member Details</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Edit Slifrt data Form</strong> </h2>
                        </div>
                        <div class="body">
                            <form action="{{route('subcategory.update',$subcategory->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $subcategory->id }}">
                                <div class="row clearfix">

                                    <div class="col-sm-6">
                                        <select name="category_id" class="form-control show-tick">
                                            <option value="">-- Please select --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $subcategory->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="text" name="subcategory_name" class="form-control" value="{{ $subcategory->subcategory_name }}" />

                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <button type="submit"
                                            class="btn btn-primary btn-block waves-effect waves-light">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>


</section>
@endsection
