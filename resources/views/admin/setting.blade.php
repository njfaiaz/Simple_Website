@extends('admin.admin_dashboard')

@section('title','Setting')
@section('content')
<section class="content">
    <div class="">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Create Member</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a>
                        </li>
                        <li class="breadcrumb-item active">Create Member</li>
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
                            <h2><strong>Add Slider Form</strong> </h2>
                        </div>
                        <div class="body">
                            <form action="{{route('setting.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $setting->id }}">

                                <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <label for=""> Logo </label>
                                        <div class="form-group form-float">
                                            <input type="file" name="logo" value="{{ $setting->logo }}" placeholder="Category Name" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <label for=""> Profile </label>
                                        <div class="form-group form-float">
                                            <input type="file" name="profile" value="{{ $setting->profile }}" placeholder="Category Name" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <label for=""> Profile </label>
                                        <div class="form-group form-float">
                                            <input type="text" name="name" value="{{ $setting->name }}" placeholder="Category Name" class="form-control" />
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <button type="submit"
                                            class="btn btn-primary btn-block waves-effect waves-light">Add Marquee</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.alert')


    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

</section>
@endsection





