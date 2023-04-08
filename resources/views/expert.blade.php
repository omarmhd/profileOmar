
@extends("layouts.front")

@section("content")
<!-- Main header -->
<main class="main-body general-deltails-page expert-page">
    <div class="container">
        <div class="content mt-64">
            <h1>{{$expert->name}}</h1>
            <h6>{{$expert->job}}</h6>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <figure>
                        <img src="{{asset("images/".$expert->image)}}" class="img-fluid w-100" alt="" srcset="">
                    </figure>
                </div>
                <div class="col-lg-7">
                    <p>
                        {{$expert->description}}
                    </p>
                    <div class="text-right">
                        <a href="{{route("front.contact")}}" class="btn cs-btn v2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">تواصل مع الخبير</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- main-footer -->

@endsection
