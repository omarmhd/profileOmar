<div class="row g-9 mb-8">



    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">اسم الخدمة</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title=" اسم الخدمة "></i>
        </label>
        <!--end::Label-->
        <input id="" type="text" class="form-control form-control-solid"
               placeholder="اسم الخدمة"
               name="name" value="{{old('name',$service->name)}}"/>

    </div>

    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">نوع الخدمة</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title=""></i>
        </label>

        <select name="type_id" id="" class="form-control form-control-solid">

            @foreach($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach


        </select>
        <a href="{{route("admin.typeService.create")}}"> إدخال نوع خدمة جديد</a>

    </div>
    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required"> الاسم اللطيف</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title="الاسم اللطيف"></i>
        </label>

        <!--end::Label-->
        <input id="" type="text" class="form-control form-control-solid"
               placeholder="الاسم اللطيف"
               name="slug" value="{{old("slug",$service->slug)}}"/>

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
               name="excerpt" value="{{old("excerpt",$service->excerpt)}}"/>

    </div>
    <div class="col-md-6 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">الوصف للخدمة</span>
            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
               title="الرجاء ادخال وصف الخدمة"></i>
        </label>

        <!--end::Label-->
        <textarea id="" type="text" class="form-control form-control-solid"
                  placeholder="الوصف للخدمة"
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
