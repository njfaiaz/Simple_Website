@extends('user.user_dashboard')

@section('title','Profile edit')

@section('contant')

<body class="bg-profile">

    <!-- Profile Info -->
    <main class="container py-5">
        <section class="">
            <div class="text-center mb-3">
                <img src="./assets/IMAGES/person.jpg" alt="" class="rounded-circle" height="150px" width="150px">
            </div>
            <h4 class="fw-bolder text-center">
                <span class="bg-primary py-1 px-2 d-inline-block rounded-2">YEASIN ARAFAT </span>
            </h4>
            <h4 class="fw-bolder text-center">
                <span class="bg-primary py-1 px-2 d-inline-block rounded-2">29205011275</span>
            </h4>

        </section>

        <!-- Registartion -->

        <section class="pt-4 col-lg-10 mx-auto">
                <ol class="profile__info">
                    <li>Employee No: <span class="fw-bolder">{{ $setting->id }}</span></li>
                    <li>Qatar ID/ VISA No: <span class="fw-bolder" value="{{ $setting->visa_no }}">{{ $setting->visa_no }}</span></li>
                    <li>Qatar ID/ VISA EXPIRATION DATE: <span class="fw-bolder">{{ $setting->visa_exp_date }}</span></li>
                    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $setting->id }}">

                    <!-- Start Edit -->
                    <li>
                        <div class="input-group mt-2 mb-3">

                            <label class="input-group-text" for="inputGroupSelect01">NATIONALITY : </label>

                            <div class="col-sm-6">
                                <select name="nationality" class="form-control show-tick">
                                    <option value="">-- Please select --</option>
                                    @foreach ($categories as $country)
                                    <option value="{{ $country->id }}">{{ $country->country_name }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                    </li>

                    <li>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> Passport No :</span>
                            <input type="text" class="form-control" name="passport_no" placeholder="EX : 767887" value="{{ $setting->passport_no }}">
                        </div>
                    </li>

                    <li>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control text-white" placeholder="Expire of Id Date"
                                id="expireOdDate__Input" name="passport_expiration_date" value="{{ $setting->passport_expiration_date }}">
                            <label>Passport EXPIRATION DATE : </label>
                            <span class=" position-absolute pe-3" id="expireOdDate__Span">DD-MM-YYY</span>
                        </div>
                    </li>
                    <li>
                        <div class="form-floating mb-3">
                            <input type="date" name="join_date" class="form-control text-white" placeholder="Expire of Id Date"
                                id="joinedDate__Input" value="{{ $setting->join_date }}">
                            <label>Joined Date : </label>
                            <span class=" position-absolute pe-3" id="joinedDate__Span">DD-MM-YYY</span>
                        </div>
                    </li>
                    <!-- <li>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Joined Date : </span>
                            <input type="date" class="form-control" placeholder="">
                        </div>
                    </li> -->
                    <li>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Occupation / Profession : </span>
                            <input type="text" name="profession" class="form-control" placeholder="EX : Student" value="{{ $setting->profession }}">
                        </div>
                    </li>

                    <li>
                        <div class="input-group mb-3 d-flex align-items-center">
                            <div class="form-group">
                                <label>Gender</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" value="Male" id="male" name="gender">
                                        <label class="custom-control-label" for="male">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input class="custom-control-input" type="radio" value="Female" id="female" name="gender">
                                        <label class="custom-control-label" for="female">Female</label>
                                    </div>
                            </div>

                        </div>


                    </li>
                    <li>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> Profile Image : </span>
                            <input type="file" name="photo" class="form-control" placeholder="EX: 7234637856" value="{{ $setting->photo }}">
                        </div>
                    </li>
                    <li>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> Contact Mobile No in Qatar : </span>
                            <input type="text" name="phone_qatar" class="form-control" placeholder="EX: 7234637856" value="{{ $setting->phone_qatar }}">
                        </div>
                    </li>
                    <li>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Contact Mobile No in Your Country :</span>
                            <input type="text" name="phone_country" class="form-control" placeholder="EX: 7234637858996" value="{{ $setting->phone_country }}">
                        </div>
                    </li>

                    <li>
                        <span class="input-group-text ">Address as far National Address in Qatar</span> <br>
                        <div class="d-lg-flex gap-3 mb-3">
                            <div class="mb-2 m-lg-0">
                                <span class="form-label">Zone no :</span>
                                <input type="text" name="Zone_no_address" class="form-control" placeholder="EX: 6787" value="{{ $setting->Zone_no_address }}">
                            </div>
                            <div class=" mb-2 m-lg-0">
                                <span class="form-label">Street no:</span>
                                <input type="text" name="Street_no_address" class="form-control" placeholder="EX: 6787" value="{{ $setting->Street_no_address }}">
                            </div>
                            <div class=" mb-2 m-lg-0">
                                <span class="form-label">House no / Building no :</span>
                                <input type="text" name="House_no_address" class="form-control" placeholder="EX: 6787" value="{{ $setting->House_no_address }}">
                            </div>
                            <div class=" mb-2 m-lg-0">
                                <span class="form-label">Unit no : </span>
                                <input type="text" name="Unit_no_address" class="form-control" placeholder="EX: 6" value="{{ $setting->Unit_no_address }}">
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="input-group mb-3">
                            <span class="input-group-text"> Address as far Passport : </span>
                            <input type="text" name="passport_address" class="form-control" placeholder="EX: hh,Qatar" value="{{ $setting->passport_address }}">
                        </div>

                    </li>


                    <li>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Reference Person's Name : </span>
                            <input type="text" name="Reference_Person_Name" class="form-control" placeholder="EX: John" value="{{ $setting->Reference_Person_Name }}">
                        </div>
                    </li>
                    <li>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Reference Person's Mobile no : </span>
                            <input type="text" name="Reference_Person_Mobile_no" class="form-control" placeholder="EX: 978678" value="{{ $setting->Reference_Person_Mobile_no }}">
                        </div>
                    </li>
                    <li>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Salary Information : </span>
                            <input type="text"  name="Salary_Information" class="form-control" placeholder="EX: 60000.0" value="{{ $setting->Salary_Information }}"">
                            <select name="Salary_Information" id="" class="form-select">
                                <option value="TK">TK</option>
                                <option value="Dolar">Dolar</option>
                            </select>
                        </div>

                    </li>
                    <!-- <li>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Notification : </span>
                            <input type="text" class="form-control" placeholder="EX: hhhhhhhhhhhh">
                        </div>
                        <span class="fw-bolder"></span>
                    </li>
                    <li>Warning: <span class="fw-bolder">hhhhhhhhhhhh</span></li>
                    <li>Note: <span class="fw-bolder">hhhhhhhhhhhh</span></li> -->


                    <div class="d-flex justify-content-between  mb-3">
                        <h4>Registration: </h4>
                        <div>
                            <button type="submit" class="btn btn-success fw-bolder">
                                <i class="fa-solid fa-hard-drive me-2"></i>
                                SAVE
                            </button>
                            <a class="btn btn-success fw-bolder" href="{{ route('user.profile') }}">
                                <i class="fa-solid fa-user me-2"></i>
                                Profile
                            </a>
                        </div>
                    </div>

                </ol>
            </form>
            <li>Documents: </li>
                    <ol type="A" class="">
                        <form method="post" action="{{ route('Qid.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $setting->id }}">
                            <li>
                                <div class="input-group mb-3 mt-2">
                                    <span class="input-group-text">QID : </span>
                                    <input type="file" name="qid_image" id="image" class="form-control" aria-label="file example" value="{{ $setting->qid_image }}" >
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0"></h6>
                                </div>

                                <div class="col-sm-9 text-secondary">
                                    <img src="{{ asset( $setting->qid_image ) }}"
                                        alt="Admin" style="width: 100px" height="100px" id="showImage">

                                </div>
                            </li>
                            <div class="d-flex justify-content-between  mb-3">
                                <h4>Registration: </h4>
                                <div>
                                    <button type="submit" class="btn btn-success fw-bolder">
                                        <i class="fa-solid fa-hard-drive me-2"></i>
                                        SAVE
                                    </button>
                                    <a class="btn btn-success fw-bolder" href="{{ route('user.profile') }}">
                                        <i class="fa-solid fa-user me-2"></i>
                                        Profile
                                    </a>
                                </div>
                            </div>
                        </form>

                        <form method="post" action="{{ route('pass.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $setting->id }}">

                            <li>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Passport : </span>
                                    <input type="file" id="image" name="qid_image" name="passport_image" class="form-control" aria-label="file example" value="{{ $setting->passport_image }}">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0"></h6>
                                </div>

                                <div class="col-sm-9 text-secondary">
                                    <img src="{{ asset( $setting->passport_image ) }}"
                                        alt="Admin" style="width: 100px" height="100px" id="showImage">

                                </div>
                            </li>
                            <div class="d-flex justify-content-between  mb-3">
                                <h4>Registration: </h4>
                                <div>
                                    <button type="submit" class="btn btn-success fw-bolder">
                                        <i class="fa-solid fa-hard-drive me-2"></i>
                                        SAVE
                                    </button>
                                    <a class="btn btn-success fw-bolder" href="{{ route('user.profile') }}">
                                        <i class="fa-solid fa-user me-2"></i>
                                        Profile
                                    </a>
                                </div>
                            </div>
                        </form>
                        <form method="post" action="{{ route('lob.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $setting->id }}">

                            <li>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Labor Contract Paper : </span>
                                    <input type="file" id="image" name="labor_cont_image" class="form-control" aria-label="file example" value="{{ $setting->labor_cont_image }}">
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="mb-0"></h6>
                                </div>

                                <div class="col-sm-9 text-secondary">
                                    <img src="{{ asset( $setting->labor_cont_image ) }}"
                                        alt="Admin" style="width: 100px" height="100px" id="showImage">

                                </div>
                            </li>
                            <div class="d-flex justify-content-between  mb-3">
                                <h4>Registration: </h4>
                                <div>
                                    <button type="submit" class="btn btn-success fw-bolder">
                                        <i class="fa-solid fa-hard-drive me-2"></i>
                                        SAVE
                                    </button>
                                    <a class="btn btn-success fw-bolder" href="{{ route('user.profile') }}">
                                        <i class="fa-solid fa-user me-2"></i>
                                        Profile
                                    </a>
                                </div>
                            </div>
                        </form>

                        <form method="post" action="{{ route('oth.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $setting->id }}">

                            <li>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Others (if any) : </span>
                                    <input type="file" id="image" name="other_image" class="form-control" aria-label="file example" value="{{ $setting->other_image }}">
                                </div>

                                <div class="col-sm-3">
                                    <h6 class="mb-0"></h6>
                                </div>

                                <div class="col-sm-9 text-secondary">
                                    <img src="{{ asset( $setting->other_image ) }}"
                                        alt="Admin" style="width: 100px" height="100px" id="showImage">

                                </div>
                            </li>
                            <div class="d-flex justify-content-between  mb-3">
                                <h4>Registration: </h4>
                                <div>
                                    <button type="submit" class="btn btn-success fw-bolder">
                                        <i class="fa-solid fa-hard-drive me-2"></i>
                                        SAVE
                                    </button>
                                    <a class="btn btn-success fw-bolder" href="{{ route('user.profile') }}">
                                        <i class="fa-solid fa-user me-2"></i>
                                        Profile
                                    </a>
                                </div>
                            </div>
                        </form>

                        <form method="post" action="{{ route('sig.profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $setting->id }}">

                            <li>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Singnature : </span>
                                    <input type="file" id="image" name="sig_image" class="form-control" aria-label="file example" value="{{ $setting->sig_image }}">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0"></h6>
                                    </div>

                                    <div class="col-sm-9 text-secondary">
                                        <img src="{{ asset( $setting->sig_image ) }}"
                                            alt="Admin" style="width: 100px" height="100px" id="showImage">

                                    </div>
                                </div>

                            </li>
                            <div class="d-flex justify-content-between  mb-3">
                                <h4>Registration: </h4>
                                <div>
                                    <button type="submit" class="btn btn-success fw-bolder">
                                        <i class="fa-solid fa-hard-drive me-2"></i>
                                        SAVE
                                    </button>
                                    <a class="btn btn-success fw-bolder" href="{{ route('user.profile') }}">
                                        <i class="fa-solid fa-user me-2"></i>
                                        Profile
                                    </a>
                                </div>
                            </div>
                        </form>

                    </ol>

        </section>

    </main>

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



    <script src="./assets/JS/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b3b2e162b5.js"></script>
    <script src="./assets/JS/script.js"></script>
</body>
@endsection
