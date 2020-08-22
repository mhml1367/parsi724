@extends('layout.index')
@section('style')
<link href="/css/persian-datepicker.css" rel="stylesheet">
@endsection

@section('content')

<section class="p-0 height-700 parallax-bg" style="background:url(/index_files/03.jpg) no-repeat 65% 0%; background-size:cover;">
    <div class="container h-100">
        <div class="row justify-content-between align-items-center h-100">
            <div class="col-md-8 mb-7">
                <h4>بدون نگرانی هتل خود را رزرو کنید</h4>
                <h1 class="display-4 font-weight-bold">پارسی 724</h1>
            </div>
        </div>
    </div>
</section>

    <section class="mt-lg-n9 mt-sm-0 pb-0 z-index-9 booking-search">
        <div class="container ">
            <div class="row shadow border-radius-3">
                <div class="col-md-12 np">
                    <div class="feature-box h-100">
                        <div class="tab_container">
                            <input id="tab1" type="radio" name="tabs" checked="" wfd-invisible="true">
                            <label for="tab1"><i class="fas fa-utensils"></i><span>هتل ها</span></label>
                            {{-- <input id="tab2" type="radio" name="tabs" wfd-invisible="true">
                            <label for="tab2"><i class="fas fa-helicopter"></i><span>پروازها</span></label>
                            <input id="tab3" type="radio" name="tabs" wfd-invisible="true">
                            <label for="tab3"><i class="fas fa-car-side"></i><span>ماشین ها</span></label>
                            <input id="tab4" type="radio" name="tabs" wfd-invisible="true">
                            <label for="tab4"><i class="fas fa-ship"></i><span>سفرهای دریایی</span></label>
                            <input id="tab5" type="radio" name="tabs" wfd-invisible="true">
                            <label for="tab5"><i class="fas fa-route"></i><span>تورها</span></label> --}}
                            <section id="content1" class="tab-content">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="fas fa-map-marker-alt"></span>
                                            <select class="custom-select select-big mb-3" id="city" name="option">
                                                @foreach ($city as $item)
                                                <option value="{{$item->name_en}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="far fa-calendar-alt"></span>
                                            <input class="form-control" type="text" id="date-picker" placeholder="تاریخ ورود">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="far fa-calendar-alt"></span>
                                            <input class="form-control" type="text" id="date-picker-out" placeholder="تاریخ خروج">
                                        </div>
                                    </div>
                    
                        
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg btn-grad" id="send">جستجو کردن
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="content2" class="tab-content" wfd-invisible="true">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="fas fa-map-marker-alt"></span>
                                            <input class="form-control" type="text" placeholder="مبدا">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="fas fa-map-marker-alt"></span>
                                            <input class="form-control" type="text" placeholder="مقصد">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="far fa-calendar-alt"></span>
                                            <input class="form-control hasDatepicker" type="text" id="date-picker-1" autocomplete="off" placeholder="تاریخ ورود">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="far fa-calendar-alt"></span>
                                            <input class="form-control hasDatepicker" type="text" id="date-picker-2" autocomplete="off" placeholder="تاریخ خروج">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg btn-grad" type="submit">جستجو کردن
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="content3" class="tab-content" wfd-invisible="true">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="fas fa-map-marker-alt"></span>
                                            <input class="form-control" type="text" placeholder="محل حرکت">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="fas fa-map-marker-alt"></span>
                                            <input class="form-control" type="text" placeholder="محل توقف">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="far fa-calendar-alt"></span>
                                            <input class="form-control hasDatepicker" type="text" id="date-picker-3" autocomplete="off" placeholder="تاریخ حرکت">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="far fa-calendar-alt"></span>
                                            <input class="form-control hasDatepicker" type="text" id="date-picker-4" autocomplete="off" placeholder="تاریخ توقف">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg btn-grad" type="submit">جستجو کردن
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="content4" class="tab-content" wfd-invisible="true">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 padding8">
                                        <div class="form-group"><span class="fas fa-map-marker-alt"></span>
                                            <input class="form-control" type="text" placeholder="انتخاب کنید">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="far fa-calendar-alt"></span>
                                            <input class="form-control hasDatepicker" type="text" id="date-picker-5" autocomplete="off" placeholder="تاریخ عزیمت">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group">
                                            <select class="custom-select select-big">
                                                <option selected="">طول کروز</option>
                                                <option value="location1">1-2 شب</option>
                                                <option value="location2">2-3 شب</option>
                                                <option value="location3">شب 3-4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group">
                                            <select class="custom-select select-big">
                                                <option selected="">خط کروز</option>
                                                <option value="location1">Cruises Club Azamara</option>
                                                <option value="location2">سفرهای مشهور</option>
                                                <option value="location3">کروز و دریایی</option>
                                                <option value="location4">سفرهای دریایی اقیانوسیه</option>
                                                <option value="location5">سفرهای پیتر دیلمان</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg btn-grad" type="submit">جستجو کردن
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="content5" class="tab-content" wfd-invisible="true">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="fas fa-map-marker-alt"></span>
                                            <input class="form-control" type="text" placeholder="مبدا">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="fas fa-map-marker-alt"></span>
                                            <input class="form-control" type="text" placeholder="مقصد">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="far fa-calendar-alt"></span>
                                            <input class="form-control hasDatepicker" type="text" id="date-picker-6" autocomplete="off" placeholder="تاریخ ورود">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="far fa-calendar-alt"></span>
                                            <input class="form-control hasDatepicker" type="text" id="date-picker-7" autocomplete="off" placeholder="تاریخ خروج">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg btn-grad" type="submit">جستجو کردن
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="service pt80 pb80 service-home">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="title text-center">
                        <h2>چرا پارسی 724 ؟</h2>
                        <p class="mb-0">با داشتن سیستم رزرو مستقیم و بدون دخالت کاربر هیچ گونه نگرانی از بابت جا نداشتن هتل و یا اشتباهات کاربران نخواهید داشت 
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-30">
                    <div class="featureBox icon-grad h-100">
                        <div class="feature-box-icon"><i class="fas fa-route"></i></div>
                        <h3 class="feature-box-title">جستجوی همه هتل ها</h3>
                        <p class="feature-box-desc">جستجو در لیست کامل هتل های مشهد که به شما حق انتخاب بهترین قیمت و بهترین هتل را می دهد
                            
                        </p>
                        <a class="mt-3" href="#">بیشتر ببین!</a></div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="featureBox icon-grad h-100">
                        <div class="feature-box-icon"><i class="fab fa-avianex"></i></div>
                        <h3 class="feature-box-title">بهترین پشتیبانی</h3>
                        <p class="feature-box-desc">پشتیبانی 24 ساعته ،تخیفف های شگفت انگیز ، کنسلی آنی ،بهترین هتل ها
                            
                        </p>
                        <a class="mt-3" href="#">بیشتر ببین!</a></div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="featureBox icon-grad h-100">
                        <div class="feature-box-icon"><i class="fas fa-bullhorn"></i></div>
                        <h3 class="feature-box-title">ضمانت بهترین قیمت</h3>
                        <p class="feature-box-desc">با توجه به حذف واسطه ها و ارتباط مستقیم هتلدار با مسافر بهترین نرخ ها را از پارسی تهیه کنید 
                          
                        </p>
                        <a class="mt-3" href="#">بیشتر ببین!</a></div>
                </div>
            </div>
        </div>
    </section>


    <section class="Categories pt80 pb60 ">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <p class="subtitle text-secondary nopadding">جستجوی کامل</p>
                    <h1 class="paddtop1 font-weight lspace-sm">پایین ترین نرخ هتل ها</h1>
                </div>
                <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="#" class="blist text-sm ml-2"> مشاهده
                    همه هتل ها<i class="fas fa-angle-double-left ml-2"></i></a></div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="listroBox">
                        <figure><a href="#" class="wishlist_bt"></a> <a href="#"><img src="./index_files/room5.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="#">اتاق مدرن و مرتب1</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <a class="address" href="#">دریافت جهات</a></div>
                            <ul class="facilities-list fl-wrap">
                                <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                            </ul>
                        <ul>
                            <li>
                                <p class="card-text text-muted"><span class="h4 text-primary">80 تومان</span> در شب</p>
                            </li>
                            <li>
                                <div class="R_retings">
                                    <div class="list-rat-ch list-room-rati"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="listroBox">
                        <figure><a href="#" class="wishlist_bt"></a> <a href="#"><img src="./index_files/room1.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="#">2اتاق مدرن و مرتب</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <a class="address" href="#">دریافت جهات</a></div>
                            <ul class="facilities-list fl-wrap">
                                <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                            </ul>
                        <ul>
                            <li>
                                <p class="card-text text-muted"><span class="h4 text-primary">80 تومان</span> در شب</p>
                            </li>
                            <li>
                                <div class="R_retings">
                                    <div class="list-rat-ch list-room-rati"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="listroBox">
                        <figure><a href="#" class="wishlist_bt"></a> <a href="#"><img src="./index_files/room5.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="#">اتاق مدرن و مرتب3</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <a class="address" href="#">دریافت جهات</a></div>
                            <ul class="facilities-list fl-wrap">
                                <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                            </ul>
                        <ul>
                            <li>
                                <p class="card-text text-muted"><span class="h4 text-primary">80 تومان</span> در شب</p>
                            </li>
                            <li>
                                <div class="R_retings">
                                    <div class="list-rat-ch list-room-rati"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="listroBox">
                        <figure><a href="#" class="wishlist_bt"></a> <a href="#"><img src="./index_files/room7.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="#"> و مرتب</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <a class="address" href="#">دریافت جهات</a></div>
                        <ul>
                            <li>
                                <p class="card-text text-muted"><span class="h4 text-primary">80 تومان</span> در شب</p>
                            </li>
                            <li>
                                <div class="R_retings">
                                    <div class="list-rat-ch list-room-rati"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="listroBox">
                        <figure><a href="#" class="wishlist_bt"></a> <a href="#"><img src="./index_files/room8.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="#">اتاق مدرن و مرتب</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <a class="address" href="#">دریافت جهات</a></div>
                        <ul>
                            <li>
                                <p class="card-text text-muted"><span class="h4 text-primary">80 تومان</span> در شب</p>
                            </li>
                            <li>
                                <div class="R_retings">
                                    <div class="list-rat-ch list-room-rati"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="listroBox">
                        <figure><a href="#" class="wishlist_bt"></a> <a href="#"><img src="./index_files/room6.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="#">اتاق مدرن و مرتب</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <a class="address" href="#">دریافت جهات</a></div>
                        <ul>
                            <li>
                                <p class="card-text text-muted"><span class="h4 text-primary">80 تومان</span> در شب</p>
                            </li>
                            <li>
                                <div class="R_retings">
                                    <div class="list-rat-ch list-room-rati"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <section class="bg-light pt80 pb60 solutions">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center mb-5">
                    <h2 class="title text-center">همین الان رزرو کنید</h2>
                    <p>تنها با انجام دادن 4 مرحله می توانید هتل خود را رزرو کنید</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"><span class="alt-font text-light-gray display-2 font-italic opacity-2">1</span> <span class="d-block mb-4"><i class="far fa-hotel display-2 text-grad"></i></span> <a class="h5" href="#">جستجوی هتل
                       </a></div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"><span class="alt-font text-light-gray display-2 font-italic opacity-2">2</span> <span class="d-block mb-4"><i class="far fa-bed display-2 text-grad"></i></span> <a class="h5" href="#">انتخاب اتاق
                      </a></div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"><span class="alt-font text-light-gray display-2 font-italic opacity-2">3</span> <span class="d-block mb-4"><i class="fas fa-ticket-alt display-2 text-grad"></i></span> <a class="h5" href="#">پرداخت آنلاین
                      </a></div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"><span class="alt-font text-light-gray display-2 font-italic opacity-2">4</span> <span class="d-block mb-4"><i class="fas fa-child display-2 text-grad"></i></span> <a class="h5" href="#">دریافت واچر هتل
                        </a></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascript')
<script src="/js/jalali-moment.browser.js"></script>
<script src="/js/persian-date.js"></script>
<script src="/js/persian-datepicker.js"></script>

<script>
$("#send").click(function () {
    city = document.getElementById("city").value;
    DateFrom = document.getElementById("date-picker").value;
    DateEnd = document.getElementById("date-picker-out").value;
        document.location = "/hotels/" + city +"?DateFrom=" + DateFrom +"&DateEnd=" + DateEnd ;
    });



</script>

@endsection
