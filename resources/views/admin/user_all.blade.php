@extends('admin.admin_dashboard')
@section('title','All User')
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
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Image </th>
                                            <th>Name </th>
                                            <th>Email </th>
                                            <th>Status </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($users as $key => $item)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>
                                                <div style="height: 50px; width:100px;">
                                                    <img alt="" src="{{ asset($item->photo) }}">
                                                </div>
                                            </td>
                                            <td> {{ $item->name }} </td>
                                            <td> {{ $item->email }} </td>

                                            <td>
                                                @if($item->UserOnline())
                                                    <span class="badge badge-pill bg-success">Active Now </span>
                                                @else
                                                    <span class="badge badge-pill bg-danger"> {{ Carbon\Carbon::parse($item->last_seen)->diffForHumans() }} </span>
                                                @endif

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Image </th>
                                            <th>Name </th>
                                            <th>Email </th>
                                            <th>Status </th>
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
