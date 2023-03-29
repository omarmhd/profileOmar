<div class="row g-9 mb-8">



    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">الاسم/العنوان</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title=""></i>
        </label>
        <!--end::Label-->
        <input id="" type="text" class="form-control form-control-solid"
               placeholder="اسم الانجاز"
               name="title" value="{{old('title',$review->title)}}"/>

    </div>


    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required"> المهنة/العنوان الفرعي</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title=""></i>
        </label>
        <!--end::Label-->
        <input id="" type="text" class="form-control form-control-solid"
               placeholder="المهنة أو العنوان الفرعي"
               name="subtitle" value="{{old('subtitle',$review->subtitle)}}"/>

    </div>

    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">المحتوى/ المراجعة</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title=""></i>
        </label>
        <!--end::Label-->
        <input id="" type="text" class="form-control form-control-solid"
               placeholder="المحتوى"
               name="content" value="{{old('content',$review->content)}}"/>

    </div>

    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">ترتيب الظهور</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title=""></i>
        </label>
        <!--end::Label-->
        <input id="" type="number" min="0" class="form-control form-control-solid"
               placeholder="ترتيب الظهور"
               name="order" value="{{old('order',$review->order)}}"/>

    </div>
    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required"> الصورة </span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title="الصورة"></i>
        </label>

        <input type="file" name="image" class="form-control">

        <!--end::Label-->


    </div>




</div>
