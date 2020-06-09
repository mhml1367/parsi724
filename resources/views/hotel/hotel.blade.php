@extends('layout.index')
@section('style')
<link href="/css/persian-datepicker.css" rel="stylesheet">
@endsection

@section('content')

<section>
    <!-- Slider main container-->
    <div class="swiper-container detail-slider slider-gallery swiper-container-horizontal swiper-container-rtl">
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper">
            <!-- Slides-->
            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 634.333px;"><a
                    data-toggle="gallery-top" title="خیابان ما"><img src="{{$rec->images["0"]}}" alt="{{$rec->name}}"
                        class="img-fluid"></a></div>
        </div>
</section>


<section class="pt80 pb80 listingDetails Campaigns">
    <div class="container">
        <div class="row">

            <!-- Tab line -->
            <div class="col-lg-8 col-md-12 col-sm-12 ">
                <ul class="nav nav-tabs tab-line">
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-1"> شرح </a> </li>
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab-de-2"> اتاق ها </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-3"> امکانات </a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-4"> تقویم </a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-5"> گالری </a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab-de-6"> بررسی ها </a> </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="tab-de-1">
                        <div class="text-block NopaddingDetails">
                            <h5 class="mb-4">{{$rec->type}} {{$rec->name}} @for ($i = 0; $i < $rec->stars; $i++)
                                <i class="fa fa-star" style="color: yellow;"></i>
                                @endfor</h5>
                        <p class="text-muted font-weight-light">{{$rec->description}}</p>

                            <div class="media d-block d-sm-flex review">
                                <div class="media-body">
                                    <h4 class="mt-2 mb-1">قوانین رزرو</h4>
                                    <p class="text-muted text-sm">{{$rec->refundRule}}
                                    </p>
                                </div>
                            </div>
                            <div class="media d-block d-sm-flex review">
                            <div class="media-body">
                                <h4 class="mt-2 mb-1">پارکینگ</h4>
                                <p class="text-muted text-sm">{{$rec->parking}}
                                </p>
                            </div>
                            </div>
                            <div class="media d-block d-sm-flex review">
                            <div class="media-body">
                                <h4 class="mt-2 mb-1">حیوانات</h4>
                                <p class="text-muted text-sm">{{$rec->AnimalRule}}
                                </p>
                            </div>
                            </div>
                            <div class="media d-block d-sm-flex review">
                            <div class="media-body">
                                <h4 class="mt-2 mb-1">کودکان</h4>
                                <p class="text-muted text-sm">{{$rec->childRule}}
                                </p>
                            </div>
                            </div>
                            <div class="media d-block d-sm-flex review">
                                <div class="media-body">
                                    <h4 class="mt-2 mb-1">زبان های پشتیبانی</h4>
                                     @if ($rec->languges->english == 1)
                                     انگلیسی:    <i class="fa fa-check-circle"></i>
                                    @endif
                                     @if ($rec->languges->arabic == 1)
                                     عربی:    <i class="fa fa-check-circle"></i>
                                    @endif
                                     @if ($rec->languges->hindi == 1)
                                     هندی:    <i class="fa fa-check-circle"></i>
                                    @endif
                                     @if ($rec->languges->urdu == 1)
                                     اوردو:    <i class="fa fa-check-circle"></i>
                                    @endif
                                     @if ($rec->languges->chinese == 1)
                                     چینی:   <i class="fa fa-check-circle"></i>
                                    @endif
                                </div>
                            </div>



                        </div>

                        <!-- Amenities-->
                        <div class="text-block">
                            <h5 class="mb-4">امکانات {{$rec->type}}</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-2"><i
                                                class="fa fa-wifi text-secondary w-1rem mr-3 text-center"></i> <span
                                                class="text-sm">وای فای</span></li>
                                        <li class="mb-2"><i class="fa fa-tv text-secondary w-1rem mr-3 text-center"></i>
                                            <span class="text-sm">تلویزیون کابلی</span></li>
                                        <li class="mb-2"><i
                                                class="fa fa-snowflake text-secondary w-1rem mr-3 text-center"></i>
                                            <span class="text-sm">تهویه هوا</span></li>
                                        <li class="mb-2"><i
                                                class="fa fa-thermometer-three-quarters text-secondary w-1rem mr-3 text-center"></i>
                                            <span class="text-sm">گرمایش</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-2"><i
                                                class="fa fa-bath text-secondary w-1rem mr-3 text-center"></i><span
                                                class="text-sm">لوازم توالت</span></li>
                                        <li class="mb-2"><i
                                                class="fa fa-utensils text-secondary w-1rem mr-3 text-center"></i><span
                                                class="text-sm">آشپزخانه مجهز</span></li>
                                        <li class="mb-2"><i
                                                class="fa fa-laptop text-secondary w-1rem mr-3 text-center"></i><span
                                                class="text-sm">میز کار</span></li>
                                        <li class="mb-2"><i
                                                class="fa fa-tshirt text-secondary w-1rem mr-3 text-center"></i><span
                                                class="text-sm">ماشین لباسشویی</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane booking-search show active" id="tab-de-2">




                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding8">
                                <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                                    <input class="form-control" type="text" placeholder="انتخاب کنید">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                                <div class="form-group"> <span class="far fa-calendar-alt"></span>
                                    <input class="form-control hasDatepicker" type="text" id="date-picker"
                                        autocomplete="off" placeholder="تاریخ ورود">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                                <div class="form-group"> <span class="far fa-calendar-alt"></span>
                                    <input class="form-control hasDatepicker" type="text" id="date-picker-out"
                                        autocomplete="off" placeholder="تاریخ خروج">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 padding8">
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
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 padding8">
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
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 padding8">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-lg btn-grad" type="submit">جستجو کردن</button>
                                </div>
                            </div>
                        </div>











                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 class="mb-4">هتل های موجود</h5>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="listing-item ">
                                    <article class="TravelGo-category-listing fl-wrap">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="TravelGo-category-img TravelGo-category-list-img"> <a
                                                        href="hotel-detailed.html"><img src="images/hotels/room8.jpg"
                                                            alt=""></a>
                                                    <div class="TravelGo-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                            <span>5.0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-sm-12">
                                                <div class="TravelGo-category-content fl-wrap title-sin_item">
                                                    <div class="TravelGo-category-content-title fl-wrap">
                                                        <div class="TravelGo-category-content-title-item">
                                                            <h3 class="title-sin_map"><a href="hotel-detailed.html">هتل
                                                                    های آسیا و آفریقا</a></h3>
                                                            <div class="TravelGo-category-location fl-wrap"><a href="#"
                                                                    class="map-item"><i
                                                                        class="fas fa-map-marker-alt"></i>بیست و هفتم
                                                                    بروکلین نیویورک ، </a> <span>200 تومان
                                                                </span><span></span> </div>
                                                        </div>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است.</p>
                                                    <ul class="facilities-list fl-wrap">
                                                        <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                                        <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                                        <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر
                                                                سیگاری</span></li>
                                                        <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                                    </ul>
                                                    <div class="TravelGo-category-footer fl-wrap">
                                                        <div class="TravelGo-category-price btn-grad"><span>2 روز 3
                                                                شب</span></div>
                                                        <div class="TravelGo-opt-list"> <a href="#"
                                                                class="single-map-item"><i
                                                                    class="fas fa-map-marker-alt"></i><span
                                                                    class="TravelGo-opt-tooltip">روی نقشه</span></a> <a
                                                                href="#" class="TravelGo-js-favorite"><i
                                                                    class="fas fa-heart"></i><span
                                                                    class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a
                                                                href="#" class="TravelGo-js-booking"><i
                                                                    class="fas fa-retweet"></i><span
                                                                    class="TravelGo-opt-tooltip">مسیرها را پیدا
                                                                    کنید</span></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="listing-item ">
                                    <article class="TravelGo-category-listing fl-wrap">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="TravelGo-category-img TravelGo-category-list-img"> <a
                                                        href="hotel-detailed.html"><img src="images/hotels/room7.jpg"
                                                            alt=""></a>
                                                    <div class="TravelGo-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                            <span>5.0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-sm-12">
                                                <div class="TravelGo-category-content fl-wrap title-sin_item">
                                                    <div class="TravelGo-category-content-title fl-wrap">
                                                        <div class="TravelGo-category-content-title-item">
                                                            <h3 class="title-sin_map"><a href="hotel-detailed.html">هتل
                                                                    های آسیا و آفریقا</a></h3>
                                                            <div class="TravelGo-category-location fl-wrap"><a href="#"
                                                                    class="map-item"><i
                                                                        class="fas fa-map-marker-alt"></i>بیست و هفتم
                                                                    بروکلین نیویورک ، </a> <span>200 تومان
                                                                </span><span></span> </div>
                                                        </div>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است.</p>
                                                    <ul class="facilities-list fl-wrap">
                                                        <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                                        <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                                        <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر
                                                                سیگاری</span></li>
                                                        <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                                    </ul>
                                                    <div class="TravelGo-category-footer fl-wrap">
                                                        <div class="TravelGo-category-price btn-grad"><span>2 روز 3
                                                                شب</span></div>
                                                        <div class="TravelGo-opt-list"> <a href="#"
                                                                class="single-map-item"><i
                                                                    class="fas fa-map-marker-alt"></i><span
                                                                    class="TravelGo-opt-tooltip">روی نقشه</span></a> <a
                                                                href="#" class="TravelGo-js-favorite"><i
                                                                    class="fas fa-heart"></i><span
                                                                    class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a
                                                                href="#" class="TravelGo-js-booking"><i
                                                                    class="fas fa-retweet"></i><span
                                                                    class="TravelGo-opt-tooltip">مسیرها را پیدا
                                                                    کنید</span></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="listing-item ">
                                    <article class="TravelGo-category-listing fl-wrap">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="TravelGo-category-img TravelGo-category-list-img"> <a
                                                        href="hotel-detailed.html"><img src="images/hotels/room6.jpg"
                                                            alt=""></a>
                                                    <div class="TravelGo-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                            <span>5.0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-sm-12">
                                                <div class="TravelGo-category-content fl-wrap title-sin_item">
                                                    <div class="TravelGo-category-content-title fl-wrap">
                                                        <div class="TravelGo-category-content-title-item">
                                                            <h3 class="title-sin_map"><a href="hotel-detailed.html">هتل
                                                                    های آسیا و آفریقا</a></h3>
                                                            <div class="TravelGo-category-location fl-wrap"><a href="#"
                                                                    class="map-item"><i
                                                                        class="fas fa-map-marker-alt"></i>بیست و هفتم
                                                                    بروکلین نیویورک ، </a> <span>200 تومان
                                                                </span><span></span> </div>
                                                        </div>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است.</p>
                                                    <ul class="facilities-list fl-wrap">
                                                        <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                                        <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                                        <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر
                                                                سیگاری</span></li>
                                                        <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                                    </ul>
                                                    <div class="TravelGo-category-footer fl-wrap">
                                                        <div class="TravelGo-category-price btn-grad"><span>2 روز 3
                                                                شب</span></div>
                                                        <div class="TravelGo-opt-list"> <a href="#"
                                                                class="single-map-item"><i
                                                                    class="fas fa-map-marker-alt"></i><span
                                                                    class="TravelGo-opt-tooltip">روی نقشه</span></a> <a
                                                                href="#" class="TravelGo-js-favorite"><i
                                                                    class="fas fa-heart"></i><span
                                                                    class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a
                                                                href="#" class="TravelGo-js-booking"><i
                                                                    class="fas fa-retweet"></i><span
                                                                    class="TravelGo-opt-tooltip">مسیرها را پیدا
                                                                    کنید</span></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="listing-item ">
                                    <article class="TravelGo-category-listing fl-wrap">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="TravelGo-category-img TravelGo-category-list-img"> <a
                                                        href="hotel-detailed.html"><img src="images/hotels/room4.jpg"
                                                            alt=""></a>
                                                    <div class="TravelGo-category-opt">
                                                        <div class="listing-rating card-popup-rainingvis"
                                                            data-starrating2="5"><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                                class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                        <div class="rate-class-name">
                                                            <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                                            <span>5.0</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-sm-12">
                                                <div class="TravelGo-category-content fl-wrap title-sin_item">
                                                    <div class="TravelGo-category-content-title fl-wrap">
                                                        <div class="TravelGo-category-content-title-item">
                                                            <h3 class="title-sin_map"><a href="hotel-detailed.html">هتل
                                                                    های آسیا و آفریقا</a></h3>
                                                            <div class="TravelGo-category-location fl-wrap"><a href="#"
                                                                    class="map-item"><i
                                                                        class="fas fa-map-marker-alt"></i>بیست و هفتم
                                                                    بروکلین نیویورک ، </a> <span>200 تومان
                                                                </span><span></span> </div>
                                                        </div>
                                                    </div>
                                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است.</p>
                                                    <ul class="facilities-list fl-wrap">
                                                        <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                                        <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                                        <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر
                                                                سیگاری</span></li>
                                                        <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                                                    </ul>
                                                    <div class="TravelGo-category-footer fl-wrap">
                                                        <div class="TravelGo-category-price btn-grad"><span>2 روز 3
                                                                شب</span></div>
                                                        <div class="TravelGo-opt-list"> <a href="#"
                                                                class="single-map-item"><i
                                                                    class="fas fa-map-marker-alt"></i><span
                                                                    class="TravelGo-opt-tooltip">روی نقشه</span></a> <a
                                                                href="#" class="TravelGo-js-favorite"><i
                                                                    class="fas fa-heart"></i><span
                                                                    class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a
                                                                href="#" class="TravelGo-js-booking"><i
                                                                    class="fas fa-retweet"></i><span
                                                                    class="TravelGo-opt-tooltip">مسیرها را پیدا
                                                                    کنید</span></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-de-3">
                        <div class="text-block NopaddingDetails">
                            <h5 class="mb-4">امکانات</h5>
                            <p class="mb-4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                طراحان گرافیک است.
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-2"><i
                                                class="fa fa-wifi text-secondary w-1rem mr-3 text-center"></i> <span
                                                class="text-sm">وای فای</span></li>
                                        <li class="mb-2"><i class="fa fa-tv text-secondary w-1rem mr-3 text-center"></i>
                                            <span class="text-sm">تلویزیون کابلی</span></li>
                                        <li class="mb-2"><i
                                                class="fa fa-snowflake text-secondary w-1rem mr-3 text-center"></i>
                                            <span class="text-sm">تهویه هوا</span></li>
                                        <li class="mb-2"><i
                                                class="fa fa-thermometer-three-quarters text-secondary w-1rem mr-3 text-center"></i>
                                            <span class="text-sm">گرمایش</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-2"><i
                                                class="fa fa-bath text-secondary w-1rem mr-3 text-center"></i><span
                                                class="text-sm">لوازم توالت</span></li>
                                        <li class="mb-2"><i
                                                class="fa fa-utensils text-secondary w-1rem mr-3 text-center"></i><span
                                                class="text-sm">آشپزخانه مجهز</span></li>
                                        <li class="mb-2"><i
                                                class="fa fa-laptop text-secondary w-1rem mr-3 text-center"></i><span
                                                class="text-sm">میز کار</span></li>
                                        <li class="mb-2"><i
                                                class="fa fa-tshirt text-secondary w-1rem mr-3 text-center"></i><span
                                                class="text-sm">ماشین لباسشویی</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-de-4">
                        <div class="text-block NopaddingDetails">
                            <!-- Gallery-->
                            <h5 class="mb-4">تقویم</h5>
                            <div id="calendar">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="lastmonth">30</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td class="hastask">4</td>
                                            <td>5</td>
                                            <td>6</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="current">8</td>
                                            <td class="hastask">9</td>
                                            <td>10</td>
                                            <td>11</td>
                                            <td class="hastask">12</td>
                                            <td>13</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td class="hastask">15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td class="hastask">21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td class="hastask">26</td>
                                            <td>27</td>
                                        </tr>
                                        <tr>
                                            <td>28</td>
                                            <td>29</td>
                                            <td class="hastask">30</td>
                                            <td>31</td>
                                            <td class="nextmonth">1</td>
                                            <td>2</td>
                                            <td>3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-de-5">
                        <div class="text-block NopaddingDetails">
                            <!-- Gallery-->
                            <h5 class="mb-4">گالری</h5>
                            <div class="row gallery ml-n1 mr-n1">
                                <div class="row gallery ml-n1 mr-n1">
                                    @for ($ii = 0; $ii < count($rec->images_sm); $ii++)
                                        <div class="col-lg-4 col-6 px-1 mb-2">
                                            <img src="{{$rec->images_sm["0"]}}" alt="{{$rec->images_sm["0"]}}" class="img-fluid">
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-de-6">
                        <div class="text-block NopaddingDetails">
                            <h5 class="mb-4">بررسی ها</h5>
                            <div class="media d-block d-sm-flex review">
                                <div class="text-md-center mr-4 mr-xl-5"><img src="images/img-22.jpg"
                                        alt="Padmé Amidala" class="avatar avatar-xl p-2 mb-2"></div>
                                <div class="media-body">
                                    <h6 class="mt-2 mb-1">دهو اسمیت</h6>
                                    <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i> </div>
                                    <p class="text-muted text-sm">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                        چاپ و با استفاده از طراحان گرافیک است.
                                    </p>
                                </div>
                            </div>
                            <div class="media d-block d-sm-flex review">
                                <div class="text-md-center mr-4 mr-xl-5"><img src="images/img-11.jpg" alt="جبا هات"
                                        class="avatar avatar-xl p-2 mb-2"></div>
                                <div class="media-body">
                                    <h6 class="mt-2 mb-1">اس. اسمیترز</h6>
                                    <div class="mb-2"><i class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i><i
                                            class="fa fa-xs fa-star text-primary"></i> </div>
                                    <p class="text-muted text-sm">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                        چاپ و با استفاده از طراحان گرافیک است.
                                    </p>
                                </div>
                            </div>
                            <div class="rebiew_section">
                                <div id="leaveReview" class="mt-4 collapse show" style="">
                                    <h5 class="mb-4">یک بررسی بگذارید</h5>
                                    <form id="contact-form" method="get" action="#" class="form">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" placeholder="نام کاربری"
                                                        required="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <select name="rating" id="rating"
                                                        class="custom-select focus-shadow-0">
                                                        <option value="5">★★★★★ (5/5)</option>
                                                        <option value="4">★★★★ ☆ (4/5)</option>
                                                        <option value="3">★★★ ☆☆ (3/5)</option>
                                                        <option value="2">★★ ☆☆☆ (2/5)</option>
                                                        <option value="1">★ ☆☆☆☆ (1/5)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" placeholder="ایمیل" required=""
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="4" name="review" id="review" placeholder="پیام" required=""
                                                class="form-control"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">بررسی ارسال</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 right_Details">
                <div class="p-4 shadow ml-lg-4 rounded sticky-top" style="top: 100px;">
                    <p class="text-muted"><span class="text-primary h2">80 تومان</span> در هر شب</p>
                    <hr class="my-4">
                    <form id="booking-form" method="get" action="#" autocomplete="off" class="form">
                        <div class="form-group">
                            <label for="bookingDate" class="form-label">اقامت شما *</label>
                            <div class="datepicker-container datepicker-container-right">
                                <input type="text" name="bookingDate" id="bookingDate" placeholder="انتخاب تاریخ"
                                    required="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="guests" class="form-label">مهمان *</label>
                            <select name="guests" id="guests" class="form-control">
                                <option value="1">1 مهمان</option>
                                <option value="2">2 مهمان</option>
                                <option value="3">3 مهمان</option>
                                <option value="4">4 مهمان</option>
                                <option value="5">5 مهمان</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="guests" class="form-label">کودک *</label>
                            <select name="guests" id="guests" class="form-control">
                                <option value="1">1 کودک</option>
                                <option value="2">2 کودک</option>
                                <option value="3">3 کودک</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">رزرو را تأیید کنید</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div class="text-center">
                        <p> <a href="#" class="text-secondary text-sm"> <i class="fa fa-heart"></i> این هتل ها را علامت
                                گذاری کنید</a></p>
                    </div>
                </div>
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

    function parseArabic(str) {
        return Number(str.replace(/[٠١٢٣٤٥٦٧٨٩]/g, function (d) {
            return d.charCodeAt(0) - 1632; // Convert Arabic numbers
        }).replace(/[۰۱۲۳۴۵۶۷۸۹]/g, function (d) {
            return d.charCodeAt(0) - 1776; // Convert Persian numbers
        }));
    }
</script>
@endsection
