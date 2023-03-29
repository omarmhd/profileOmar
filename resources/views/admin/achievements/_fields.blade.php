<div class="row g-9 mb-8">



    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">اسم الانجاز</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title=" اسم الانجاز "></i>
        </label>
        <!--end::Label-->
        <input id="" type="text" class="form-control form-control-solid"
               placeholder="اسم الانجاز"
               name="name" value="{{old('name',$achievement->name)}}"/>

    </div>



    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required"> النص المقتطف</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title="النص المقتطف"></i>
        </label>

        <!--end::Label-->
        <input id="" type="text" class="form-control form-control-solid"
               placeholder="النص المقتطف"
               name="excerpt" value="{{old("excerpt",$achievement->excerpt)}}"/>

    </div>

    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required"> تاريخ الانجاز</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title="تاريخ الانجاز"></i>
        </label>

        <!--end::Label-->
        <input id="" type="date" class="form-control form-control-solid"
               placeholder="تاريخ الانجاز"
               name="date" value="{{old("date",$achievement->date)}}"/>

    </div>
    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">الوصف للانجاز</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title="الرجاء ادخال وصف الانجازو"></i>
        </label>

        <!--end::Label-->
        <textarea id="" type="text" class="form-control form-control-solid"
               placeholder="الوصف للانجاز"
               name="description" >
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
