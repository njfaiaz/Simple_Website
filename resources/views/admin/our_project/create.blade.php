@extends('admin.admin_dashboard')

@section('title','Our Project Add')
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
                            <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">

                                    <div class="col-sm-12">
                                        <label for="Image">Project Name</label>
                                        <div class="form-group form-float">
                                            <input type="text" name="project_name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <label for="Image">Image</label>
                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control" id="image"/>
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"></h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <img src="{{ url('media/profile/no_image.jpg') }}"
                                                alt="Admin" style="width: 100px" height="100px" id="showImage">
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <label for="Image">Project Desc Text</label>
                                        <div class="form-group form-float">
                                            <textarea name="project_dec" cols="30" rows="5" placeholder="Description" class="form-control no-resize" required></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 mb-3">
                                        <button type="submit"
                                            class="btn btn-primary btn-block waves-effect waves-light">Add Project</button>
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





