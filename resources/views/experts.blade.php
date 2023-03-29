
@extends("layouts.front")

@section("content")
<!-- Main header -->
<main class="main-body experts-page">
    <div class="container mt-64">
        <div class="main-title">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">الـــخــــــــبراء</h2>
            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                لمحة تعريفية عن الخبراء لمحة تعريفية عن الخبراء لمحة تعريفية عن الخبراء لمحة تعريفية عن الخبراء لمحة
                تعريفية عن الخبراء لمحة تعريفية عن الخبراء لمحة تعريفية عن الخبراء لمحة تعريفية عن الخبراء لمحة تعريفية
                عن الخبراء لمحة تعريفية عن الخبراء لمحة تعريفية عن الخبراء
            </p>
            <a href="{{route("front.contact")}}" class="btn cs-btn v2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">كن من
                الخبراء</a>
        </div>
        <div class="content">
            <div class="row mt-4">

                @foreach($experts as $expert)
                <div class="col-lg-6">
                    <a href="{{route("front.expert",$expert->id)}}">
                        <div class="media-expert wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            <figure class="mb-0">
                                <img src="{{asset("images/".$expert->image)}}" class="img-fluid" alt="" srcset="">
                            </figure>
                            <div class="media-expert-body">
                                <h4>{{$expert->name}}</h4>
                                <h6>{{$expert->job}}</h6>
                                <p>
                                    {{$expert->excerpt}}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
            <div class="row justify-content-end">
                <div class="col-2">
                    <div class="pagination">
                        <a href="#">
                            <div class="arrow-right">
                                <svg id="arrow-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                    <path id="Vector" d="M0,15.881,6.487,9.344a2,2,0,0,0,0-2.807L0,0" transform="translate(8.929 4.059)" fill="none" stroke="#0a558c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(24 24) rotate(180)" fill="none" opacity="0"/>
                                  </svg>
                            </div>
                        </a>
                        <div>
                            <span>1</span>
                            <span>من</span>
                            <span>10</span>
                        </div>
                        <a href="#">
                            <div class="arrow-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24">
                                    <g id="arrow-right" transform="translate(24 24) rotate(180)">
                                      <path id="Vector" d="M0,15.881,6.487,9.344a2,2,0,0,0,0-2.807L0,0" transform="translate(8.929 4.059)" fill="none" stroke="#0a558c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                      <path id="Vector-2" data-name="Vector" d="M0,0H24V24H0Z" transform="translate(24 24) rotate(180)" fill="none" opacity="0"/>
                                    </g>
                                  </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- main-footer -->
@endsection
