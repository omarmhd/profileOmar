@extends("layouts.front")

@section("content")
<!-- Main header -->
<main class="main-body services-page">
    <div class="container mt-64">
        <div class="main-title">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">الـــخــــــدمــــــــات</h2>
        </div>
        @foreach($types as $type)
        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
            <div class="d-flex justify-content-between flex-wrap mt-64">
                <h4 class="font700">{{$type->name}}</h4>
                <a href="{{route("front.contact")}}" class="btn cs-btn v2">تواصل معي</a>
            </div>
            <div class="services-slider owl-carousel owl-slider mt-4">

                @foreach($type->services as $service)

                <a href="{{route("front.service",$service->id)}}">
                    <div class="serivce-card">
                        <figure>
                            <img src="{{asset("images/".$service->image)}}" alt="" srcset="">
                        </figure>
                        <h2>{{$service->name}}</h2>
                    </div>
                </a>
                @endforeach

            </div>
        </div>
        @endforeach

    </div>
</main>
<!-- main-footer -->


@endsection
