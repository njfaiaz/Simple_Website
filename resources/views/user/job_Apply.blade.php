@extends('user.user_dashboard')

@section('title','Job Apply')

@section('contant')
<section class="container my-lg-5">

    <div class="d-flex flex-column align-items-center ">


        <h1 class="text-center fw-bold mb-lg-5 text-primary mt-2 mt-lg-5">Let's start your career with us!</h1>

        <div class="col-11 col-lg-6">
            <form action="{{ route('user.jobStore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Your name :">
                    <label>Your name :</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control " placeholder="Email : " id="Q_ID_NUMBER">
                    <label>Email : </label>
                </div>


                <div class="form-floating mb-3">
                    <input type="text" name="phone" class="form-control" placeholder="Mobile Number :">
                    <label>Mobile Number :</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                    <label>Subject :</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="File" name="file" class="form-control" placeholder="Subject">
                    <label>Attached your CV (PDF)</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea name="job_des" class="form-control"   placeholder="Write Your Message" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Write Your Message</label>
                </div>

                <button type="submit" class="btn btn-primary text-black fw-bold border-0 w-100">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection
