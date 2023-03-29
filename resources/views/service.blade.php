
@extends("layouts.front")

@section("content")

<main class="main-body general-deltails-page">
    <div class="container">
        <div class="content mt-64">
            <h1>{{$service->name}}</h1>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <figure>
                        <img src="{{asset("images/".$service->image)}}" class="img-fluid" alt="" srcset="">
                    </figure>
                </div>
                <div class="col-lg-7">
                    <p>
                     {{$service->excerpt}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
