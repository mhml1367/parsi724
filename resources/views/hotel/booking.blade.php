@extends('layout.index')
@section('style')
<link href="/css/persian-datepicker.css" rel="stylesheet">
@endsection

@section('content')
<section class="pt80 pb80 booking-section login-area thanksYou">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="login-box Booking-box">
                                <h3>مشخصات رزرو اتاق</h3>
{{-- @dd($rec->all()) --}}
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="bookex">نام و نام خانوادگی:</td>
                                        <td>{{$rec->first_name}}  {{$rec->last_name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">کدملی:</td>
                                        <td>{{$rec->first_name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">شماره موبایل:</td>
                                        <td>{{$rec->mobile}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">شهر:</td>
                                        <td>{{$rec->city}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">آقا/خانم:</td>
                                        <td>@if ($rec->city == "m")
                                            خانم
                                        @endif @if ($rec->city == "f")
                                        آقا
                                    @endif</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">اتاق:</td>
                                        <td>{{$rec->city}}
                                        مبلغ: 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">اقامت:</td>
                                        <td>{{$rec->city}}
                                        مبلغ: 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">جمع مبلغ پرداختی</td>
                                        <td>
                                        مبلغ: 
                                        </td>
                                    </tr>


                                </tbody>
                            </table>



                            <div class="login-top cardInfo">
                                <h3>تایید مشخصات و رزرو اتاق</h3>
                                <p>لطفا مشخصات خود و اتاق رزرو را حتما چک کنید
                                    <br>

                                </p>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-lg btn-grad" id="sub" type="submit">تایید رزرو و پرداخت</button>
                                </div>
                            </div>



                            <div class="login-top cardInfo">
                                <h3>مشاهده جزئیات رزرو</h3>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="listing-item ">
                    <article class="TravelGo-category-listing fl-wrap">
                        <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img
                                    src="images/hotels/room8.jpg" alt=""></a>
                            <div class="TravelGo-category-opt">
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                <div class="rate-class-name">
                                    <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                    <span>5.0</span>
                                </div>
                            </div>
                        </div>
                        <div class="TravelGo-category-content fl-wrap title-sin_item">
                            <div class="TravelGo-category-content-title fl-wrap">
                                <div class="TravelGo-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="hotel-detailed.html">کروز آسیا و آفریقا</a></h3>
                                    <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i
                                                class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a>
                                        <span>200 تومان </span><a href="#" class="map-item"></a><span></span> </div>
                                </div>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.</p>
                            <ul class="facilities-list fl-wrap">
                                <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                                <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                                <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                                <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                            </ul>
                            <div class="TravelGo-category-footer fl-wrap">
                                <div class="TravelGo-category-price btn-grad"><span>ویرایش کنید</span></div>
                            </div>
                            <div class="TravelGo-category-content-title-item others-details">
                                <h3 class="title-sin_map"><a href="hotel-detailed.html">جزئیات دیگر</a></h3>
                            </div>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="bookex">نوع اتاق:</td>
                                        <td>لوکس</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">غذا و ناهار خوری:</td>
                                        <td>200 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">CRUISE PRICE:</td>
                                        <td>300 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">مالیات:</td>
                                        <td>300 تومان</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex"><strong>جمع:</strong></td>
                                        <td><strong>1200 تومان</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </article>
                </div>
                <div class="listing-item">
                    <article class="TravelGo-category-listing fl-wrap">
                        <div class="TravelGo-category-content fl-wrap title-sin_item">
                            <div class="TravelGo-category-content-title fl-wrap NeedHelp">
                                <div class="TravelGo-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="hotel-detailed.html">کمک خواستن؟</a></h3>
                                    <div class="TravelGo-category-location fl-wrap"></div>
                                </div>
                            </div>
                            <div class="NeedhelpSection">
                                <p>ما بسیار خوشحال می شویم که به شما کمک کنیم. مشاور تیم ما 24/7 در خدمت شماست تا به شما
                                    کمک کند.</p>
                                <ul>
                                    <li><span><i class="fas fa-phone-volume"></i></span> +921 215 2154 214</li>
                                    <li><span><i class="far fa-envelope"></i></span> Info@travelGo.com</li>
                                    <li><span><i class="fab fa-skype"></i> </span> TravelG @ اسکایپ</li>
                                </ul>
                            </div>
                        </div>
                    </article>
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

@endsection
