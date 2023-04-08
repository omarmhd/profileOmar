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
            <span class="required">رابط الخبير</span>

        </label>

        <!--end::Label-->
        <input id="" type="url" class="form-control form-control-solid"
               placeholder="الرابط"
               name="link" value="{{old("link",$expert->link)}}"/>

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


    <div class="col-md-6">
        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
            <span class="required">الصورة</span>

        </label>
        <!--begin::Image input-->
        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
            <!--begin::Preview existing avatar-->
            <div class="image-input-wrapper w-125px h-125px" style="background: url({{asset("images")}}/{{$expert->image}}) no-repeat content-box; background-position: center;"></div>
            <!--end::Preview existing avatar-->
            <!--begin::Label-->
            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="تغير الصورة">
                <i class="bi bi-pencil-fill fs-7"></i>
                <!--begin::Inputs-->
                <input type="file" name="image" accept=".png, .jpg, .jpeg">
                <input type="hidden" name="avatar_remove">
                <!--end::Inputs-->
            </label>
            <!--end::Label-->
            <!--begin::Cancel-->
            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
            <!--end::Cancel-->
            <!--begin::Remove-->
            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="حذف الصورة">
																<i class="bi bi-x fs-2"></i>
															</span>
            <!--end::Remove-->
        </div>
        <!--end::Image input-->
        <!--begin::Hint-->






        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
        <!--end::Hint-->
    </div>




</div>
