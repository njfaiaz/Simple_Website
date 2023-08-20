@extends('admin.admin_dashboard')
@section('title','Slider')
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
                                    <a href="{{ route('marque.add') }}" class="btn btn-primary btn-block waves-effect waves-light">Add Slider</a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th> Image</th>
                                            <th>Name</th>
                                            <th>Text</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach($board as $key=> $member)
                                        <tr>
                                            <td>{{$member->id}}</td>
                                            <td>
                                                <div style="height: 50px; width:50px;">
                                                    <img alt="" src="{{ asset($member->image) }}">
                                                </div>
                                            </td>
                                            <td>{{$member->name}}</td>
                                            <td>{{Str::limit($member->disc, 25) }}</td>

                                            <td>
                                                <a href="{{route('board.edit',['id'=>$member->id])}}" class="btn btn-info">Edit</a>
                                                <a href="{{route('board.delete',['id'=>$member->id])}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th> Image</th>
                                            <th>Name</th>
                                            <th>Text</th>
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
