@extends('user.user_dashboard')

@section('title','Profile')

@section('contant')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



<div class="page-content pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row">


                    <div class="col-md-9">
                        <div class="tab-content account dashboard-content pl-50">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Account Password Change</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('user.password.store') }}" method="POST">
                                            @csrf

                                            <div class="row">

                                                <div class="form-group col-md-12">
                                                    <label>Old Password :<span class="required">*</span></label>
                                                    <input type="password" name="old_password" class="form-control" placeholder="Enter Old password" />
                                                    @error('old_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>New Password : <span class="required">*</span></label>
                                                    <input  type="password" name="new_password" class="form-control" placeholder="Enter New password" />
                                                    @error('new_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Confirmed Password : <span class="required">*</span></label>
                                                    <input  type="password" name="con_password" class="form-control" placeholder="Enter Confirm password" />
                                                    @error('con_password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <br><br>


                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info submit font-weight-bold" name="submit" value="Submit">Save Change</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
