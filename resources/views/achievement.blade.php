
@extends("layouts.front")

@section("content")
<main class="main-body general-deltails-page expert-page">
    <div class="container">
        <div class="content mt-64">
            <h1> {{$achievement->name}}</h1>
            <h6> {{$achievement->date}}</h6>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <figure>
                        <img src="{{asset("images/".$achievement->image)}}" class="img-fluid" alt="" srcset="">
                    </figure>
                </div>
                <div class="col-lg-7">
                    <p>
                 {{$achievement->description}}
                    </p>

                </div>
{{--                <div class="col-lg-7 mt-4 mx-auto">--}}
{{--                    <div style="border: 1px solid #c7bfbf1a;">--}}
{{--                        <video width="100%" height="100%" controls>--}}
{{--                            <source src="movie.mp4" type="video/mp4">--}}
{{--                            <source src="movie.ogg" type="video/ogg">--}}
{{--                            Your browser does not support the video tag.--}}
{{--                          </video>--}}

{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</main>

@endsection
