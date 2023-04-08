
@extends("layouts.front")

@section("content")
<main class="main-body contact-us">
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 90px"    >
            <div class="col-xl-5 col-lg-6  col-md-8">
                <form class="form" action="{{route('front.contact.store')}}" method="post">
                    @csrf
                    <h1>ما هي استشارتك؟!</h1>



                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="" method="get">
                        <div class="form-group">
                            <label for="">اسم جهة التواصل </label>
                            <input type="text" name="name" class="form-control cs-input" placeholder=" ">
                        </div>
                        <div class="form-group">
                            <label for="">رقم الهاتف</label>
                            <input type="text" name="phone" class="form-control cs-input" placeholder="رقم الهاتف">
                        </div>
                        <div class="form-group">
                            <label for="">الإيميل</label>
                            <input type="email" name="email" class="form-control cs-input" placeholder="" dir="ltr">
                        </div>
                        <div class="form-group">
                            <label for="">العنوان</label>
                            <input type="text"name="address" class="form-control cs-input" placeholder="عنوان الرسالة">
                        </div>
                        <div class="form-group">
                            <label for="">نص الرسالة</label>
                          <textarea name="message" id=""  class="form-control cs-input"  cols="30" rows="7" placeholder="النص هنا"></textarea>
                        </div>

                        @if(session("success"))
                            <p class="text-success">{{session("success")}}</p>
                            @endif

                        <div class="mt-3">
                            <button type="submit" class="btn cs-btn v2 w-100">ارسال</button>
                            <a href="index.html" class="btn cs-btn v3 mt-2 w-100">الغاء</a>
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>

</main>
@endsection
