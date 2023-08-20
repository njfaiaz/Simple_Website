@extends('user.user_dashboard')

@section('title','Our Project')


@section('contant')

<section class="container my-5">
    <h1 class="text-center fw-bold mb-5">Our Project </h1>
    <div class="row row-cols-1 row-cols-lg-3 g-3">
    @foreach ($project as $item)

        <div class="col">
            <div class="card">
                <img src="{{ asset($item->image) }}" alt="" height="250px" class="card-img-top">
                <div class="card-body">
                    <h3>{{ $item->project_name }}</h3>
                    <p>
                        {{$item->project_dec}}.
                    </p>
                </div>
            </div>
        </div>
    @endforeach


    </div>
</section>
@endsection
