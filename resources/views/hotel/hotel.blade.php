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
                                    <input class="form-control" disabled value="{{$rec->type}} {{$rec->name}}" type="text" placeholder="">
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
                                    <button class="btn btn-primary btn-lg btn-grad" id="sub" type="submit">جستجو کردن</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h5 class="mb-4" id="title">هتل های موجود</h5>
                            </div>
                            <div class="lds-ellipsis" id="loading" style="display: none">
                                <div></div><div></div><div></div><div></div>
                            </div>
                            <div id="HOTELS">

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
                <div class="p-4 shadow ml-lg-4 rounded sticky-top" style="top: 15px;">
                    <form action="{{ route('post.hotels.booking') }}" method="POST">
                        @csrf
                    <div id="titleRooms">اتاق انتخاب کنید</div>
                    <div class="row" id="contracts"></div>
                    <hr class="my-4">
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <label for="bookingDate" class="form-label">نام</label>
                                <input type="text" name="first_name" class="form-control">
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-group">
                                <label for="bookingDate" class="form-label">نام خانوادگی</label>
                                <input type="text" name="last_name" class="form-control" >
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="bookingDate" class="form-label">کد ملی</label>
                            <input type="text" name="national_code" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="bookingDate" class="form-label">موبایل</label>
                            <input type="text" name="phone_number" class="form-control" >
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="bookingDate" class="form-label">شهر مبدا</label>
                                    <input type="text" name="city" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="bookingDate" class="form-label">آقا/خانم</label>
                                    <select name="Sir_Madam" class="form-control">
                                        <option value="M">اقا</option>
                                        <option value="F">خانم</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="date1" name="date1">
                        <input type="hidden" id="date2" name="date2">
                        <input type="hidden" id="roomid" name="roomid">
                        <input type="hidden" id="hotelid" name="hotelid">
                        <input type="hidden" id="contract" name="contract">
                        <input type="hidden" id="price" name="price">
                        <input type="hidden" id="room" name="room">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">رزرو و تایید</button>
                        </div>
                    <hr class="my-4">
                    <div class="text-center">
                        <p> <a href="#" class="text-secondary text-sm"> <i class="fa fa-heart"></i> این هتل ها را علامت
                                گذاری کنید</a></p>
                    </div>
                    </form>
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
    return Number( str.replace(/[٠١٢٣٤٥٦٧٨٩]/g, function(d) {
        return d.charCodeAt(0) - 1632; // Convert Arabic numbers
    }).replace(/[۰۱۲۳۴۵۶۷۸۹]/g, function(d) {
        return d.charCodeAt(0) - 1776; // Convert Persian numbers
    }) );
}
var DateFrom = "";
var DateEnd = "";

  $("#sub").click(function () {
    document.getElementById("HOTELS").innerHTML = "";
    document.getElementById('loading').style.display = "initial";

     DateF = $("#date-picker").val();
     DateS = DateF.split("/");
     DateFro = parseArabic(DateS[0])+"/"+parseArabic(DateS[1])+"/"+parseArabic(DateS[2]);

     DateFi = $("#date-picker-out").val();
     DateSi = DateFi.split("/");
     DateFroi = parseArabic(DateSi[0])+"/"+parseArabic(DateSi[1])+"/"+parseArabic(DateSi[2]);

     DateFrom = moment(DateFro).format('YYYY/MM/DD');
     DateEnd = moment(DateFroi).format('YYYY/MM/DD');

        dataSend = {
            token: "mzoc1CEq401565108119FTd7QvbGea",
            from : DateFrom,
            to : DateEnd,
            hotel_id: "{{$rec->id}}",
        };
        DataHotel(dataSend);
    });

    var rooms = [];
    var hotelid = "";
function DataHotel(dataSend) {
    $('html,body').animate({ scrollTop: 500 }, 'slow');
    $.ajax({
        type: 'GET',
        url: 'http://recepshen.ir/api/fetchRooms',
        data: dataSend,
        success: function (D) {
            if(D["error"] == undefined){
                if(D["data"]["rooms"].length != 0){

                document.getElementById("title").innerHTML ="<h2>اتاق های موجود</h2>";
                document.getElementById('loading').style.display = "none";

            FIELD= "";
            hotelid= D["data"]["id"];
            rooms = D["data"]["rooms"];
            for (i = 0; i < D["data"]["rooms"].length; i++)
            {
                if (D["data"]["rooms"][i]["images"].length == 0) {
                    image = "http://recepshen.com/image/imageNotFound.jpg";
                }else{
                    image = D["data"]["rooms"][i]["images"]["0"];
                }
                    FIELD += "<article class=\"TravelGo-category-listing fl-wrap\">";
                    FIELD += "<div class=\"row\">";
                    FIELD += "<div class=\"col-lg-5 col-md-6 col-sm-12\">";
                    FIELD += "<div class=\"TravelGo-category-img TravelGo-category-list-img\"> <a href=\"hotel-detailed.html\"><img src=\""+image+"\" alt=\"\"></a>";
                    FIELD += "<div class=\"TravelGo-category-opt\">";
                    FIELD += "<div class=\"listing-rating card-popup-rainingvis\" data-starrating2=\"5\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>";
                    FIELD += "<div class=\"rate-class-name\">";
                    FIELD += "<div class=\"score\"><strong>بسیار خوب</strong> 27 بررسی</div>";
                    FIELD += "<span>5.0</span>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "<div class=\"col-lg-7 col-md-6 col-sm-12\">";
                    FIELD += "<div class=\"TravelGo-category-content fl-wrap title-sin_item\">";
                    FIELD += "<div class=\"TravelGo-category-content-title fl-wrap\">";
                    FIELD += "<div class=\"TravelGo-category-content-title-item\">";
                    FIELD += "<h3 class=\"title-sin_map\"><a href=\"hotel-detailed.html\">"+D["data"]["rooms"][i]["name"]+"</a></h3>";
                    FIELD += "<div class=\"TravelGo-category-location fl-wrap\"><i class=\"fa fa-check-square-o\"></i>"+D["data"]["rooms"][i]["contracts"]["0"]["name"]+"<span>"+D["data"]["rooms"][i]["contracts"]["0"]["price"]+"</span><span></span> </div>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "<ul class=\"facilities-list fl-wrap\">";

                    for (let index = 0; index < D["data"]["rooms"][i]["specifications"].length; index++) {
                        FIELD += "<li><img style=\" width: 30px;  height: 30px;\" src=\""+D["data"]["rooms"][i]["specifications"][index]["icon"]+"\" alt=\"\"><span>"+D["data"]["rooms"][i]["specifications"][index]["name"]+"</span></li>";
                    }

                    FIELD += "</ul>";
                    FIELD += "<div class=\"TravelGo-category-footer fl-wrap\">";
                    FIELD += "<a onclick=\"selectRoom("+i+")\" class=\"TravelGo-category-price btn-grad\">انتخاب اتاق</a>";
                    FIELD += "<div class=\"TravelGo-opt-list\"> <a href=\"#\" class=\"single-map-item\"><i class=\"fas fa-map-marker-alt\"></i><span class=\"TravelGo-opt-tooltip\">روی نقشه</span></a> <a href=\"#\" class=\"TravelGo-js-favorite\"><i class=\"fas fa-heart\"></i><span class=\"TravelGo-opt-tooltip\">صرفه جویی</span></a> <a href=\"#\" class=\"TravelGo-js-booking\"><i class=\"fas fa-retweet\"></i><span class=\"TravelGo-opt-tooltip\">مسیرها را پیدا                                                    کنید</span></a> </div>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "</div>";
                    FIELD += "</article>";
            }
                document.getElementById("HOTELS").innerHTML = FIELD;
                }else{
                    document.getElementById("title").innerHTML ="<h2>در این تاریخ اتاقی موجود نیست</h2>";
                    document.getElementById('loading').style.display = "none";
                }
            }else{
                document.getElementById("title").innerHTML ="<h2>"+ D["error"]+"</h2>";
                document.getElementById('loading').style.display = "none";
            }

        },
        error: function (e) {
            document.getElementById("title").innerHTML ="<h2>خطایی رخ داده لطفا دوباره تلاش نمایید</h2>";
            document.getElementById('loading').style.display = "none";
        }

    });

    }


    function selectRoom(id) {
        titleRoom = "";
        contracts = "";

        titleRoom += "<img src=\""+rooms[id]["images"][0]+"\" style=\"width: 100%;height: auto;\">";
        titleRoom += "<p class=\"text-muted\">اتاق <span class=\"text-primary\">"+rooms[id]["name"]+"</span> </p>";
        titleRoom += "<hr>";
        titleRoom += "<label>انتخاب نوع اقامت:</label>";

            for (az = 0; az < rooms[id].contracts.length; az++) {

            var breakfast="";
            var lunch="";
            var dinner="";
            var stay="";

            if (rooms[id].contracts[az].stay = 1) {
                 stay = "اقامت";
            }
            if (rooms[id].contracts[az].breakfast == 1) {
                 breakfast = "صبحانه";
            }
            if (rooms[id].contracts[az].lunch == 1) {
                lunch = "نهار";
            }
            if (rooms[id].contracts[az].dinner == 1) {
                dinner = "شام";
            }

            contracts += "<div class=\"col\">";
            contracts += "<div class=\"form-group\">";
            contracts += "<input type=\"radio\" name=\"gender\" value=\""+rooms[id].contracts[az].id+"\"> "+ stay +" "+ breakfast +" "+ lunch +" "+ dinner +"<br>";
            if (rooms[id].contracts[az].discount_price == null) {
                contracts += (rooms[id].contracts[az].price + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
                price = rooms[id].contracts[az].price;
            }else{
                contracts += (rooms[id].contracts[az].discount_price + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
                contracts += "<strike>"+(rooms[id].contracts[az].price + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")+"</strike>";
                price = rooms[id].contracts[az].price;
            }
            contracts += " ريال </input>";
            contracts += "</div>";
            contracts += "</div>";
        }
        document.getElementById("date1").value = DateFrom;
        document.getElementById("date2").value = DateEnd;
        document.getElementById("roomid").value = rooms[id].id;
        document.getElementById("hotelid").value = hotelid;
        document.getElementById("price").value = price;
        document.getElementById("contract").value = stay +" "+ breakfast +" "+ lunch +" "+ dinner;
        document.getElementById("room").value = rooms[id]["name"];

        document.getElementById("titleRooms").innerHTML = titleRoom;
        document.getElementById("contracts").innerHTML = contracts;

    }

</script>
@endsection
