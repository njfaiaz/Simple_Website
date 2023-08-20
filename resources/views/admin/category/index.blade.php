@extends('admin.admin_dashboard')
@section('title','Catrgory')
@section('content')
<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Members List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a>
                        </li>
                        <li class="breadcrumb-item active">Members List</li>
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
                            <h2><strong>All members list</strong> </h2>
                            @if(session()->has('success'))
                            <div class="alert-success d-flex justify-content-center">{{session('success')}}</div>
                            @endif
                            @if(session()->has('delete'))
                            <div class="alert-danger d-flex justify-content-center">{{session('delete')}}</div>
                            @endif
                            <ul class="header-dropdown">

                                <li class="remove">
                                    <a href="{{ route('category.add') }}" class="btn btn-primary btn-block waves-effect waves-light">Add Category</a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($categories as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->category_name }}</td>
                                            <td>
                                                <a href="{{ route('category.edit',$item->id) }}" class="btn btn-info">Edit</a>
                                                <a href="{{ route('category.delete',$item->id) }}" id="delete" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
