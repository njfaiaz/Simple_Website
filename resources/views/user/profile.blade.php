@extends('user.user_dashboard')

@section('title','Profile')

@section('contant')
<body class="bg-profile">


    <!-- Profile Info -->
    <main class="container py-5">
        <section class="">
            <div class="text-center mb-3">
                <img src="{{ asset($setting->photo) }}" alt="" class="rounded-circle" height="150px" width="150px">
            </div>
            <h4 class="fw-bolder text-center">
                <span class="bg-primary py-1 px-2 d-inline-block rounded-2">YEASIN ARAFAT </span>
            </h4>
            <h4 class="fw-bolder text-center">
                <span class="bg-primary py-1 px-2 d-inline-block rounded-2">29205011275</span>
            </h4>

        </section>


        <section class="pt-4">
            <div class="d-flex justify-content-between">
                <h4>Registration: </h4>
                <a href="{{ route('profile.edit') }}" class="btn btn-primary text-black border-0 fw-bolder"><i
                        class="fa-solid fa-pen-to-square me-2"></i> EDIT</a>
            </div>
            <ol class="profile__info">
                <li>Employee No: <span class="fw-bolder"> {{ $setting->id }}</span></li>
                <li>Qatar ID/ VISA No: <span class="fw-bolder">{{ $setting->visa_no }}</span></li>
                <li>Qatar ID/ VISA EXPIRATION DATE: <span class="fw-bolder">{{ $setting->visa_exp_date }}</span></li>
                <li>NATIONALITY: <span class="fw-bolder">{{ $setting->nationality }}</span></li>
                <li>Passport No: <span class="fw-bolder">{{ $setting->passport_no }}</span></li>
                <li>Passport EXPIRATION DATE: <span class="fw-bolder">{{ $setting->passport_expiration_date }}</span></li>
                <li>Joined Date: <span class="fw-bolder">{{ $setting->join_date }}</span></li>
                <li>Occupation / Profession: <span class="fw-bolder">{{ $setting->profession }}</span></li>
                <li>Gender: <span class="fw-bolder">{{ $setting->gender }}</span></li>



                <li>Contact Mobile No in Qatar: <span class="fw-bolder">{{ $setting->phone_qatar }}</span></li>
                <li>Contact Mobile No in Your Country: <span class="fw-bolder">{{ $setting->phone_country }}</span></li>
                <li>Address as far National Address in Qatar <br>
                    <p class="d-flex flex-wrap">
                        <span>Zone no: <span class="fw-bolder">{{ $setting->Zone_no_address }}</span>,</span>
                        <span>Street no: <span class="fw-bolder">{{ $setting->Street_no_address }}</span>,</span>
                        <span>House no / Building no: <span class="fw-bolder">{{ $setting->House_no_address }}</span>,</span>
                        <span>Unit no: <span class="fw-bolder">{{ $setting->Unit_no_address }}</span></span>
                    </p>
                </li>
                <li>Address as far Passport: <span class="fw-bolder">{{ $setting->passport_address }}</span></li>
                <li>Reference Person's Name: <span class="fw-bolder">{{ $setting->Reference_Person_Name }}</span></li>
                <li>Reference Person's Mobile no: <span class="fw-bolder">{{ $setting->Reference_Person_Mobile_no }}</span></li>
                <li>Salary Information: <span class="fw-bolder">{{ $setting->Salary_Information }}</span><span class="fw-bolder">TK</span></li>
                <li>Notification: <span class="fw-bolder">{{ $setting->Notification }}</span></li>
                <li>Warning: <span class="fw-bolder">{{ $setting->Warning }}</span></li>
                <li>Note: <span class="fw-bolder">{{ $setting->Note }}</span></li>
                <li>Documents: </li>
                <ol type="A" class="d-flex flex-wrap column-gap-5">
                    <li><a href="{{ asset($setting->qid_image) }}"  class="text-decoration-none text-black fw-bolder"
                            download>QID</a>
                            <div class="col-sm-9 text-secondary">
                                <img src="{{ asset( $setting->qid_image ) }}"
                                    alt="Admin" style="width: 100px" height="100px" id="showImage">

                            </div>
                    </li>
                    <li><a href="{{ asset($setting->passport_image) }}" class="text-decoration-none text-black fw-bolder"
                            download>Passport</a>
                            <div class="col-sm-9 text-secondary">
                                <img src="{{ asset( $setting->passport_image ) }}"
                                    alt="Admin" style="width: 100px" height="100px" id="showImage">

                            </div>
                    </li>
                    <li><a href="{{ asset($setting->labor_cont_image) }}" class="text-decoration-none text-black fw-bolder"
                            download>Labor Contract Paper</a>
                            <div class="col-sm-9 text-secondary">
                                <img src="{{ asset( $setting->labor_cont_image ) }}"
                                    alt="Admin" style="width: 100px" height="100px" id="showImage">

                            </div>
                    </li>
                    <li><a href="{{ asset($setting->other_image) }}" class="text-decoration-none text-black fw-bolder"
                            download>Others (if any)</a>
                            <div class="col-sm-9 text-secondary">
                                <img src="{{ asset( $setting->other_image ) }}"
                                    alt="Admin" style="width: 100px" height="100px" id="showImage">

                            </div>
                    </li>
                </ol>

                <li>Singnature: <a href="{{ asset($setting->other_image) }}" class="text-decoration-none text-black fw-bolder"
                        download>Sing</a>
                        <div class="col-sm-9 text-secondary">
                            <img src="{{ asset( $setting->other_image ) }}"
                                alt="Admin" style="width: 100px" height="100px" id="showImage">

                        </div>
                </li>


            </ol>
        </section>

    </main>



</body>
@endsection


