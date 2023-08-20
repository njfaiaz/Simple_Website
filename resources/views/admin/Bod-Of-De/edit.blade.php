@extends('admin.admin_dashboard')
@section('title','Slider Edit')
@section('content')
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
                            <form action="{{route('board.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $slider->id }}">
                                <div class="row clearfix">

                                    <div class="col-sm-12">
                                        <h6 class="mb-0">Banner Image</h6>
                                    </div>
                                    <div class=" col-sm-9 text-secondary">
                                        <input type="file" name="image" class="form-control" id="image" />
                                    </div>


                                    <div class="col-sm-3">
                                        <h6 class="mb-0"></h6>
                                    </div>

                                    <div class="col-sm-9 text-secondary">
                                        <img src="{{ asset( $slider->image ) }}"
                                            alt="Admin" style="width: 100px" height="100px" id="showImage">

                                    </div>

                                    <div class="col-sm-12 mt-3">
                                        <div class="form-group form-float">
                                            <textarea name="disc" cols="30" rows="5" placeholder="Description" class="form-control no-resize" required> {{ $slider->disc }} </textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="form-control" value="{{ $slider->name }}" />

                                    </div>
                                </div>




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
