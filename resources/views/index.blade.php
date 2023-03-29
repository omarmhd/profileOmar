
@extends("layouts.front")

@section("content")
<!-- main -->
<main class="main-body">
    <!-- banner-section -->
    <section class="banner-section">
        <div class="container">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <figure>
                            <img src="assets/images/banner-img.png" class="img-fluid wow zoomIn" data-wow-duration="1s"
                                data-wow-delay="0.1s" alt="" srcset="">
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">هل أنت مستعد للانتقال
                            للمستوى <span>القادم</span>؟!</h1>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">إذا كنت تبحث عن التخطيط
                            والترتيب والتطوير فقد وصلت إلى المكان الصحيح!</p>
                        <a href="{{route('front.contact')}}" class="btn cs-btn v2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            تواصل معي</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./banner-section -->

    <!-- partners-section -->
    <div class="partners-section">
        <div class="container">
            <div class="content">
                <div class="main-title">
                    <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">شركاء المسيرة</h2>
                </div>
                <div class="partners-slider owl-carousel owl-slider mt-4">

                    @foreach($partners as $partner)
                        <div class="partenr-card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <figure>
                            <img src="{{asset("images")}}/{{$partner->image}}" alt="" srcset="">
                        </figure>
                        <h6>{{$partner->title}}</h6>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- ./partners-section -->

    <!-- about-section -->
    <div class="about-section">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-7">
                        <h4 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            من هو عمر هوساوي?!
                        </h4>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                            {{$about_us}}

                        </p>
                    </div>
                    <div class="col-lg-5">
                        <figure>
                            <img src="assets/images/about-img.png" class="img-fluid wow zoomIn" data-wow-duration="1s"
                                data-wow-delay="0.1s" alt="" srcset="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./about-section -->

    <!-- companies-section -->
    <div class="companies-section">
        <div class="container">
            <div class="content">
                <div class="main-title">
                    <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">الشركات المعتمدة للمهندس عمر
                    </h2>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4 flex-wrap">

                    @foreach($companies as $company)

                    <figure class="scale-hover">
                        <img src="{{asset("images")}}/{{$company->value}}" alt="" class=" wow zoomIn" data-wow-duration="1s"
                            data-wow-delay="0.1s" srcset="">
                    </figure>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- ./companies-section -->

    <!-- clients-section -->
    <div class="clients-section">
        <div class="main-title">
            <h2 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">ما يقوله عملائنا عنا</h2>
        </div>
        <div class="container">
            <div class="content">
                <div class="clients-slider owl-carousel owl-slider mt-4">

                    @foreach($reviews as $review)
                    <div class="client-card">
                        <figure>
                            <img src="{{asset("images")}}/{{$review->image}}" class="img-fluid wow zoomIn" data-wow-duration="1s" data-wow-delay="0.1s" alt="" srcset="">
                        </figure>
                        <div class="client-card-body wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            {{$review->content}}
                        </div>
                        <div class="client-card-footer">
                            <h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"> {{$review->title}}</h5>
                            <h6 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"> {{$review->subtitle}} </h6>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
    <!-- ./clients-section -->
</main>
<!-- ./main -->
@endsection
