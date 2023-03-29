<div class="row g-9 mb-8">



    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">اسم الخبير</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title=" اسم الخبير "></i>
        </label>
        <!--end::Label-->
        <input id="" type="text" class="form-control form-control-solid"
               placeholder="اسم الخبير"
               name="name" value="{{old('name',$expert->name)}}"/>

    </div>


    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required"> المهنة</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title="job"></i>
        </label>

        <!--end::Label-->
        <input id="" type="text" class="form-control form-control-solid"
               placeholder="المهنة"
               name="job" value="{{old("slug",$expert->job)}}"/>

    </div>

    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">النص المقتطف</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title="الرجاء النص المقتطف"></i>
        </label>

        <!--end::Label-->
        <textarea id="" type="text" class="form-control form-control-solid"
                  placeholder="النص المقتطف"
                  name="excerpt" >
            {{$expert->excerpt}}
        </textarea>
    </div>
    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">الوصف للخبير</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title="الرجاء ادخال وصف الخدمة"></i>
        </label>

        <!--end::Label-->
        <textarea id="" type="text" class="form-control form-control-solid"
                  placeholder="الوصف للخبير"
                  name="description" >
                        {{$expert->description}}
        </textarea>
    </div>


    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required"> الصورة المميزة</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title="الصورة"></i>
        </label>

        <input type="file" name="image" class="form-control">

        <!--end::Label-->


    </div>




</div>
