@extends('admin.layouts.admin')
@section('title','اضافة صفحة سياسة الخصوصية ')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">اضافة صفحة من نحن   
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">

                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.terms-condition.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <!-- the photo of the article -->
                                            <div class="form-group">
                                                <label id="projectinput7" class="btn btn-float btn-float-lg btn-outline-pink">
                                                    <i class="la la-camera"></i>تعجيل صورة للصفحة<span>يجب ان يكون حجم الصورة  "780x470px"</span>
                                                    <input type="file" style="display: none;" id="file" name="photo" >
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i>اضافة معلومات الصفحة </h4>
                                                <!-- title of the erticle and the slug -->
                                                <div class="row">
                                                    {{--  عنوان المقالة --}}
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">عنوان الصفحة </label>
                                                            <input type="text" id="name"
                                                                   class="form-control"
                                                                   placeholder="من نحن"
                                                                   value="{{old('name')}}"
                                                                   name="name">
                                                            @error("name")
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    {{--  رابط الصفحة --}}
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم الرابط
                                                            </label>
                                                            <input type="text" id="name"
                                                                    class="form-control"
                                                                    placeholder="about"
                                                                    value="{{old('slug')}}"
                                                                    name="slug">
                                                            @error("slug")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" >
                                                    {{--  محتوى المقالة --}}
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1">محتوى المقالة: </label>
                                                            <div class="form-group">
                                                                <textarea id="ckeditor" name="description" value="{{old('description')}}" ></textarea>
                                                                <small id="description_error" class="form-text text-danger"></small>
                                                                <script> CKEDITOR.replace('ckeditor' );</script>
                                                            </div>
                                                            @error("description")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- the status of the article -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" value="1"
                                                                   name="active"
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"
                                                                   checked/>
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">الحالة</label>

                                                            @error("active")
                                                            <span class="text-danger"> </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="form-body">

                                                    <h4 class="form-section"><i class="ft-home"></i>اضافة معلومات SEO </h4>
                                                    <!-- title of the erticle and the slug -->
                                                    <div class="row">
                                                        {{--  عنوان SEO --}}
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">عنوان المقالة </label>
                                                                <input type="text" id="seo_title"
                                                                       class="form-control"
                                                                       placeholder="من نحن"
                                                                       value="{{old('seo_title')}}"
                                                                       name="seo_title">
                                                                @error("seo_title")
                                                                <span class="text-danger"> {{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        {{--  SEo الوصف --}}
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">الوصف
                                                                </label>
                                                                <input type="text" id="name"
                                                                       class="form-control"
                                                                       placeholder="يجب الا يتجاوز االوصف 160 حرفا"
                                                                       value="{{old('seo_description')}}"
                                                                       name="seo_description">
                                                                @error("seo_description")
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row" >
                                                        {{--   كلمات البحث الرئيسية --}}
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="projectinput1">كلمات البحث الرئيسية: </label>
                                                                <div class="form-group">
                                                                    <textarea multiple name="seo_keyword" placeholder="بنشر, تبديل تواير, كهربائي, ميكانيكي" class="form-control" value="{{old('seo_keyword')}}" ></textarea>
                                                                </div>
                                                                @error("seo_keyword")
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> الرجوع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i>اضافة
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection
<!-- Text editor (ckeditor)  -->
<script src="{{asset('assets/admin/vendors/js/editors/ckeditor/ckeditor.js')}}"></script>
