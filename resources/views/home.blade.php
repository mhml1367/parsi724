@extends('layout.index')
@section('style')
<link href="/css/persian-datepicker.css" rel="stylesheet">
@endsection

@section('content')

<section class="p-0 height-700 parallax-bg" style="background:url(/index_files/03.jpg) no-repeat 65% 0%; background-size:cover;">
    <div class="container h-100">
        <div class="row justify-content-between align-items-center h-100">
            <div class="col-md-8 mb-7">
                <h4>به آسودگی مسافرت کنید</h4>
                <h1 class="display-4 font-weight-bold">آژانس پارسی</h1>
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
                            <input id="tab2" type="radio" name="tabs" wfd-invisible="true">
                            <label for="tab2"><i class="fas fa-helicopter"></i><span>پروازها</span></label>
                            <input id="tab3" type="radio" name="tabs" wfd-invisible="true">
                            <label for="tab3"><i class="fas fa-car-side"></i><span>ماشین ها</span></label>
                            <input id="tab4" type="radio" name="tabs" wfd-invisible="true">
                            <label for="tab4"><i class="fas fa-ship"></i><span>سفرهای دریایی</span></label>
                            <input id="tab5" type="radio" name="tabs" wfd-invisible="true">
                            <label for="tab5"><i class="fas fa-route"></i><span>تورها</span></label>
                            <section id="content1" class="tab-content">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="fas fa-map-marker-alt"></span>
                                            <select class="custom-select select-big mb-3" id="city" name="option">
                                                @foreach ($city as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="far fa-calendar-alt"></span>
                                            <input class="form-control hasDatepicker" type="text" id="date-picker" autocomplete="off" placeholder="تاریخ ورود">
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group"><span class="far fa-calendar-alt"></span>
                                            <input class="form-control hasDatepicker" type="text" id="date-picker-out" autocomplete="off" placeholder="تاریخ خروج">
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group">
                                            <select class="custom-select select-big">
                                                <option selected="">اتاقها</option>
                                                <option value="location1">01</option>
                                                <option value="location2">02</option>
                                                <option value="location3">03</option>
                                                <option value="location4">04</option>
                                                <option value="location5">05</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12 padding8">
                                        <div class="form-group">
                                            <select class="custom-select select-big">
                                                <option selected="">مهمان</option>
                                                <option value="location1">01</option>
                                                <option value="location2">02</option>
                                                <option value="location3">03</option>
                                                <option value="location4">04</option>
                                                <option value="location5">05</option>
                                            </select>
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
    <section class="Categories pt80 pb60">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <p class="subtitle text-secondary nopadding">بیشترین تعداد سرمایه ها</p>
                    <h1 class="paddtop1 font-weight lspace-sm">مقصد محبوب</h1>
                </div>
                <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="http://travelgo.iranneginhotel.ir/#" class="blist text-sm ml-2"> همه
                    شهرها را ببینید<i class="fas fa-angle-double-left ml-2"></i></a></div>
            </div>
            <div class="row">
                <div class="col-md-6"><a href="http://travelgo.iranneginhotel.ir/#">
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"><img src="./index_files/home.jpg" alt=""></div>
                        <div class="list-mig-lc-con">
                            <h5>ایالات متحده</h5>
                            <p>81 شهر </p>
                        </div>
                    </div>
                </a></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6"><a href="http://travelgo.iranneginhotel.ir/#">
                            <div class="list-mig-like-com">
                                <div class="list-mig-lc-img"><img src="./index_files/home2.jpg" alt=""></div>
                                <div class="list-mig-lc-con list-mig-lc-con2">
                                    <h5>انگلستان</h5>
                                    <p>81 شهر </p>
                                </div>
                            </div>
                        </a></div>
                        <div class="col-md-6"><a href="http://travelgo.iranneginhotel.ir/#">
                            <div class="list-mig-like-com">
                                <div class="list-mig-lc-img"><img src="./index_files/home3.jpg" alt=""></div>
                                <div class="list-mig-lc-con list-mig-lc-con2">
                                    <h5>استرالیا</h5>
                                    <p>81 شهر </p>
                                </div>
                            </div>
                        </a></div>
                        <div class="col-md-6"><a href="http://travelgo.iranneginhotel.ir/#">
                            <div class="list-mig-like-com">
                                <div class="list-mig-lc-img"><img src="./index_files/home4.jpg" alt=""></div>
                                <div class="list-mig-lc-con list-mig-lc-con2">
                                    <h5>آلمان</h5>
                                    <p>81 شهر </p>
                                </div>
                            </div>
                        </a></div>
                        <div class="col-md-6"><a href="http://travelgo.iranneginhotel.ir/#">
                            <div class="list-mig-like-com">
                                <div class="list-mig-lc-img"><img src="./index_files/home1.jpg" alt=""></div>
                                <div class="list-mig-lc-con list-mig-lc-con2">
                                    <h5>هند</h5>
                                    <p>81 شهر </p>
                                </div>
                            </div>
                        </a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="grayBG pt80 pb80">
        <div class="container ">
            <div class="row">
                <div class="col-md-8 mx-auto text-center mb-5">
                    <h2 class="title text-center">خدمات ما</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box h-100 text-center px-4 py-5">
                        <div class="feature-box-icon"><img class="w-25" src="./index_files/check-mark.svg" alt=""></div>
                        <h3 class="feature-box-title">رزرو هتل</h3>
                        <p class="feature-box-desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                            از طراحان گرافیک است.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box h-100 text-center all-text-white bg-grad px-4 py-5 border-radius-3">
                        <div class="feature-box-icon"><img class="w-25" src="./index_files/editor.svg" alt=""></div>
                        <h3 class="feature-box-title">رزرو بلیط</h3>
                        <p class="feature-box-desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                            از طراحان گرافیک است.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box h-100 text-center px-4 py-5">
                        <div class="feature-box-icon"><img class="w-25" src="./index_files/envelope.svg" alt=""></div>
                        <h3 class="feature-box-title">تور شگفت انگیز</h3>
                        <p class="feature-box-desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                            از طراحان گرافیک است.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="Categories pt80 pb60 ">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <p class="subtitle text-secondary nopadding">مانند محلی بمانید و بخورید</p>
                    <h1 class="paddtop1 font-weight lspace-sm">هتل های معروف</h1>
                </div>
                <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="http://travelgo.iranneginhotel.ir/#" class="blist text-sm ml-2"> مشاهده
                    همه هتل ها<i class="fas fa-angle-double-left ml-2"></i></a></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="listroBox">
                        <figure><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html" class="wishlist_bt"></a> <a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/room5.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">اتاق مدرن و مرتب</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                            <a class="address" href="http://travelgo.iranneginhotel.ir/#">دریافت جهات</a></div>
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
                        <figure><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html" class="wishlist_bt"></a> <a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/room1.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">اتاق مدرن و مرتب</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <a class="address" href="http://travelgo.iranneginhotel.ir/#">دریافت جهات</a></div>
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
                        <figure><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html" class="wishlist_bt"></a> <a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/room2.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">اتاق مدرن و مرتب</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <a class="address" href="http://travelgo.iranneginhotel.ir/#">دریافت جهات</a></div>
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
                        <figure><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html" class="wishlist_bt"></a> <a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/room7.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">اتاق مدرن و مرتب</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <a class="address" href="http://travelgo.iranneginhotel.ir/#">دریافت جهات</a></div>
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
                        <figure><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html" class="wishlist_bt"></a> <a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/room8.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">اتاق مدرن و مرتب</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <a class="address" href="http://travelgo.iranneginhotel.ir/#">دریافت جهات</a></div>
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
                        <figure><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html" class="wishlist_bt"></a> <a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/room6.jpg" class="img-fluid" alt="">
                            <div class="read_more"><span>بیشتر بخوانید</span></div>
                        </a></figure>
                        <div class="listroBoxmain">
                            <h3><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">اتاق مدرن و مرتب</a></h3>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است</p>
                            <a class="address" href="http://travelgo.iranneginhotel.ir/#">دریافت جهات</a></div>
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

    <!-- =======================
        service -->
    <section class="service pt80 pb80 service-home">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="title text-center">
                        <h2>میدونی؟</h2>
                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                            گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-30">
                    <div class="featureBox icon-grad h-100">
                        <div class="feature-box-icon"><i class="fas fa-route"></i></div>
                        <h3 class="feature-box-title">بهترین نماینده مسافرتی</h3>
                        <p class="feature-box-desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                            از طراحان گرافیک است.
                        </p>
                        <a class="mt-3" href="http://travelgo.iranneginhotel.ir/#">بیشتر ببین!</a></div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="featureBox icon-grad h-100">
                        <div class="feature-box-icon"><i class="fab fa-avianex"></i></div>
                        <h3 class="feature-box-title">اعتماد و ایمنی</h3>
                        <p class="feature-box-desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                            از طراحان گرافیک است.
                        </p>
                        <a class="mt-3" href="http://travelgo.iranneginhotel.ir/#">بیشتر ببین!</a></div>
                </div>
                <div class="col-md-4 mt-30">
                    <div class="featureBox icon-grad h-100">
                        <div class="feature-box-icon"><i class="fas fa-bullhorn"></i></div>
                        <h3 class="feature-box-title">ضمانت بهترین قیمت</h3>
                        <p class="feature-box-desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                            از طراحان گرافیک است.
                        </p>
                        <a class="mt-3" href="http://travelgo.iranneginhotel.ir/#">بیشتر ببین!</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
        service -->

    <section class="Categories pt80 pb60 Categories-home">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <p class="subtitle text-secondary nopadding">مانند محلی بمانید و بخورید</p>
                    <h1 class="paddtop1 font-weight lspace-sm">آخرین سفرهای دریایی</h1>
                </div>
                <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="http://travelgo.iranneginhotel.ir/#" class="blist text-sm ml-2"> مشاهده
                    همه سفرهای دریایی<i class="fas fa-angle-double-left ml-2"></i></a></div>
            </div>
            <div class="row">
                <div class="swiper-container guides-slider-home-cruises swiper-container-horizontal swiper-container-rtl">
                    <!-- Additional required wrapper-->
                    <div class="swiper-wrapper" style="transform: translate3d(1155px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide h-auto px-2 swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/4.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div><div class="swiper-slide h-auto px-2 swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/5.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div><div class="swiper-slide h-auto px-2 swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="5" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/6.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- Slides-->

                        <div class="swiper-slide h-auto px-2 swiper-slide-active" data-swiper-slide-index="0" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/1.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="swiper-slide h-auto px-2 swiper-slide-next" data-swiper-slide-index="1" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/2.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="swiper-slide h-auto px-2" data-swiper-slide-index="2" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/3.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="swiper-slide h-auto px-2" data-swiper-slide-index="3" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/4.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="swiper-slide h-auto px-2" data-swiper-slide-index="4" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/5.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="swiper-slide h-auto px-2 swiper-slide-duplicate-prev" data-swiper-slide-index="5" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/6.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    <div class="swiper-slide h-auto px-2 swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/1.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div><div class="swiper-slide h-auto px-2 swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/2.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div><div class="swiper-slide h-auto px-2 swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 370px; margin-left: 15px;">
                            <div class="listing-item ">
                                <article class="TravelGo-category-listing fl-wrap">
                                    <div class="TravelGo-category-img"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html"><img src="./index_files/3.jpg" alt=""></a>
                                        <div class="TravelGo-category-opt">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                            <div class="rate-class-name">
                                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                <span>5.0</span></div>
                                        </div>
                                    </div>
                                    <div class="TravelGo-category-content fl-wrap title-sin_item">
                                        <div class="TravelGo-category-content-title fl-wrap">
                                            <div class="TravelGo-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="http://travelgo.iranneginhotel.ir/hotel-detailed.html">کروز آسیا و
                                                    آفریقا</a></h3>
                                                <div class="TravelGo-category-location fl-wrap"><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                                    <span>200 تومان </span><a href="http://travelgo.iranneginhotel.ir/#" class="map-item"></a><span></span></div>
                                            </div>
                                        </div>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                            گرافیک است.</p>
                                        <ul class="facilities-list fl-wrap">
                                            <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                            <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                            <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                            <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                        </ul>
                                        <div class="TravelGo-category-footer fl-wrap">
                                            <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                                            <div class="TravelGo-opt-list"><a href="http://travelgo.iranneginhotel.ir/#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a>
                                                <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="http://travelgo.iranneginhotel.ir/#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div></div>
                    <div class="swiper-pagination d-md-none swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-bullets-dynamic" style="width: 40px;" wfd-invisible="true"><span class="swiper-pagination-bullet swiper-pagination-bullet-active swiper-pagination-bullet-active-main" tabindex="0" role="button" aria-label="Go to slide 1" style="right: 16px;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-next" tabindex="0" role="button" aria-label="Go to slide 2" style="right: 16px;"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active-next-next" tabindex="0" role="button" aria-label="Go to slide 3" style="right: 16px;"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4" style="right: 16px;"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5" style="right: 16px;"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6" style="right: 16px;"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </section>


    <section class="bg-light pt80 pb60 solutions">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center mb-5">
                    <h2 class="title text-center">چرا ما را انتخاب کنید</h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"><span class="alt-font text-light-gray display-2 font-italic opacity-2">1</span> <span class="d-block mb-4"><i class="fas fa-road display-2 text-grad"></i></span> <a class="h5" href="http://travelgo.iranneginhotel.ir/#">رزرو راه
                        آهن</a></div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"><span class="alt-font text-light-gray display-2 font-italic opacity-2">2</span> <span class="d-block mb-4"><i class="fas fa-utensils display-2 text-grad"></i></span> <a class="h5" href="http://travelgo.iranneginhotel.ir/#">رزرو
                        هتل</a></div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"><span class="alt-font text-light-gray display-2 font-italic opacity-2">3</span> <span class="d-block mb-4"><i class="fas fa-ticket-alt display-2 text-grad"></i></span> <a class="h5" href="http://travelgo.iranneginhotel.ir/#">رزرو
                        بلیط</a></div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"><span class="alt-font text-light-gray display-2 font-italic opacity-2">4</span> <span class="d-block mb-4"><i class="fas fa-child display-2 text-grad"></i></span> <a class="h5" href="http://travelgo.iranneginhotel.ir/#">تور
                        شگفت انگیز</a></div>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing pricing-center whiteBG pb60">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto mb-5">
                    <div class="title text-center">
                        <h2> بسته های قیمت گذاری</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- pricing item -->
                <div class="col-md-4">
                    <div class="pricing-box h-100">
                        <h5>بسته ماه عسل</h5>
                        <div class="plan-price"><span class="price text-grad"> <sup class="text-grad"></sup>20 <sup class="text-grad">تومان</sup></span> در روز
                        </div>
                        <p>4 شب در مجموعه هانی مون. <br>
                            انتقال فرودگاه لوکس خصوصی. <br>
                            صبحانه روزانه سوئیت خود را.</p>
                        <a class="btn btn-outline-light mt-4" href="http://travelgo.iranneginhotel.ir/#!">اکنون سفارش دهید!</a></div>
                </div>
                <!-- pricing item -->
                <div class="col-md-4 ">
                    <div class="pricing-box h-100 shadow no-border box">
                        <div class="ribbon"><span>محبوب</span></div>
                        <h5>بسته خانواده</h5>
                        <div class="plan-price"><span class="price text-grad"> <sup class="text-grad"></sup>50 <sup class="text-grad">تومان</sup></span> در روز
                        </div>
                        <p>4 شب در مجموعه هانی مون. <br>
                            انتقال فرودگاه لوکس خصوصی. <br>
                            صبحانه روزانه سوئیت خود را.</p>
                        <a class="btn btn-grad mt-4" href="http://travelgo.iranneginhotel.ir/#!">اکنون سفارش دهید!</a></div>
                </div>
                <!-- pricing item -->
                <div class="col-md-4">
                    <div class="pricing-box h-100">
                        <h5>همه فراگیر</h5>
                        <div class="plan-price"><span class="price text-grad"> <sup class="text-grad"></sup>99 <sup class="text-grad">تومان</sup></span> در روز
                        </div>
                        <p>4 شب در مجموعه هانی مون. <br>
                            انتقال فرودگاه لوکس خصوصی. <br>
                            صبحانه روزانه سوئیت خود را.</p>
                        <a class="btn btn-outline-light mt-4" href="http://travelgo.iranneginhotel.ir/#!">اکنون سفارش دهید!</a></div>
                </div>
            </div>
        </div>
    </section>


    <!-- =======================
        newsletter -->
    <section class="bg-light pattern-overlay-1-dark">
        <div class="container">
            <div class="col-md-12 col-lg-9 mx-auto p-4 p-sm-5">
                <div class="text-center px-0 px-sm-5">
                    <p class="mb-3 lead">21،215+ هتل و اقامتگاه های موجود!</p>
                    <form>
                        <div class="input-group px-0 px-md-5">
                            <input class="form-control border-radius-right-0 border-right-0 bg-transparent" type="text" name="search" placeholder="جستجو مقصد">
                            <button type="button" class="btn btn-grad mb-0 border-radius-left-0"><span class=" d-md-block">اکنون جستجو کن</span>
                                <span class="d-md-none" wfd-invisible="true"><i class="fab fa-paper-plane-o m-0"></i></span></button>
                        </div>
                    </form>
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
$('#date-picker').persianDatepicker({
    initialValue: true,
    initialValueType: 'en',
    format: "YYYY/MM/DD",
    autoClose: true
});
$('#date-picker-out').persianDatepicker({
    initialValue: true,
    initialValueType: 'en',
    format: "YYYY/MM/DD",
    autoClose: true
});


$("#send").click(function () {
        document.location = "/hotels";
    });



</script>

@endsection
