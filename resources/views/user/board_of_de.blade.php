@extends('user.user_dashboard')

@section('title','Board Of Der')

@section('contant')

<section class="container my-5">
    <h1 class="text-center fw-bold mb-5">Board Of Directors Speech </h1>
    <div class="row row-cols-1 g-3">

@foreach ($board as $item)

    <div class="col">
        <div class="card">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{ asset($item->image) }}" height="250px" class="card-img-top">
                </div>
                <div class="col-lg-9">
                    <div class="card-body">
                        <h3>{{ $item->name }}</h3>
                        <p class="bod-description" id="textContainer">
                            {{$item->disc}}

                        </p>
                        <span class="show-more border-0 btn btn-primary fw-bold text-black"
                            onclick="showMore(event)">Show More...</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endforeach

    </div>
</section>

@endsection
