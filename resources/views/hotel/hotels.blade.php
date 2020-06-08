@extends('layout.index')
@section('style')

@endsection

@section('content')

<section class="pt80 pb80 listingDetails Campaigns">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 ">
          <div class="tab-content">
            <div class="tab-pane booking-search show active" id="tab-de-2">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                    <input class="form-control" type="text" placeholder="انتخاب کنید">
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="far fa-calendar-alt"></span>
                    <input class="form-control hasDatepicker" type="text" id="date-picker" autocomplete="off" placeholder="تاریخ ورود">
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="far fa-calendar-alt"></span>
                    <input class="form-control hasDatepicker" type="text" id="date-picker-out" autocomplete="off" placeholder="تاریخ خروج">
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
                  <h5 class="mb-4">هتل های موجود</h5>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="listing-item ">
                    <article class="TravelGo-category-listing fl-wrap">
                      <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                          <div class="TravelGo-category-img TravelGo-category-list-img"> <a href="hotel-detailed.html"><img src="/images/room8.jpg" alt=""></a>
                            <div class="TravelGo-category-opt">
                              <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                              <div class="rate-class-name">
                                <div class="score"><strong>بسیار خوب</strong> 27 بررسی</div>
                                <span>5.0</span> </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12">
                          <div class="TravelGo-category-content fl-wrap title-sin_item">
                            <div class="TravelGo-category-content-title fl-wrap">
                              <div class="TravelGo-category-content-title-item">
                                <h3 class="title-sin_map"><a href="hotel-detailed.html">هتل های آسیا و آفریقا</a></h3>
                                <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i>بیست و هفتم بروکلین نیویورک ، </a> <span>200 تومان </span><span></span> </div>
                              </div>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                            <ul class="facilities-list fl-wrap">
                              <li><i class="fas fa-wifi"></i><span>وای فای رایگان</span></li>
                              <li><i class="fas fa-parking"></i><span>پارکینگ</span></li>
                              <li><i class="fas fa-smoking-ban"></i><span>اتاقهای غیر سیگاری</span></li>
                              <li><i class="fas fa-utensils"></i><span> رستوران</span></li>
                            </ul>
                            <div class="TravelGo-category-footer fl-wrap">
                              <div class="TravelGo-category-price btn-grad"><span>2 روز 3 شب</span></div>
                              <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">روی نقشه</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">صرفه جویی</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">مسیرها را پیدا کنید</span></a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
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
              <form id="booking-form" method="get" action="#" autocomplete="off" class="form" _lpchecked="1">
                <div class="form-group">
                  <label for="bookingDate" class="form-label">اقامت شما *</label>
                  <div class="datepicker-container datepicker-container-right">
                    <input type="text" name="bookingDate" id="bookingDate" placeholder="انتخاب تاریخ" required="" class="form-control">
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
                <p> <a href="#" class="text-secondary text-sm"> <i class="fa fa-heart"></i> این هتل ها را علامت گذاری کنید</a></p>
              </div>
            </div>
          </div>
        
      </div>
    </div>
  </section>
@endsection

  @section('javascript')

  <script>
  $("#sub").click(function () {
    document.getElementById("HOTELS").innerHTML = "";
    document.getElementById('loadig').style.display = "initial";
    var DateF = $("#date").val();
    var DateS = DateF.split("/");
    var DateFro = parseArabic(DateS[0])+"/"+parseArabic(DateS[1])+"/"+parseArabic(DateS[2]);

    var DateFrom = moment(DateFro).format('YYYY/MM/DD');
    var DateEnd = moment(DateFro).add($("#date1").val(),'d').format('YYYY/MM/DD');
            
        dataSend = {
            token: "mzoc1CEq401565108119FTd7QvbGea",
            from : DateFrom,
            to : DateEnd,
            city_id: $("#city").val(),
        };
        DataHotel(dataSend);
    });
    
function DataHotel(dataSend) {
    $('html,body').animate({ scrollTop: 500 }, 'slow');
    var DateF = $("#date").val();
    var DateS = DateF.split("/");
    var DateFro = parseArabic(DateS[0])+"/"+parseArabic(DateS[1])+"/"+parseArabic(DateS[2]);

    var DateFrom = moment(DateFro).format('YYYY/MM/DD');
    var DateEnd = moment(DateFro).add($("#date1").val(),'d').format('YYYY/MM/DD');
    $.ajax({
        type: 'GET',
        url: 'http://recepshen.ir/api/fetchHotels',
        data: dataSend,
        success: function (D) {
            if(D["error"] == undefined){
                if(D["data"].length != 0){

                document.getElementById("title").innerHTML ="<h2>لیست هتل و اقامتگاه های <span>"+ D["data"]["0"]["city"]+"</span></h2>";
                document.getElementById('loadig').style.display = "none";

            var FIELD= "";
            for (i = 0; i < D["data"].length; i++) {
                FIELD += "<div class=\"col-lg-12 col-md-12 col-xs-12\">";
                FIELD += "<div class=\"single-pricing-table active\">";
                    if (D["data"][i]["discount"] != 0) {
                        FIELD += "<span class=\"table-highlight\">"+ D["data"][i]["discount"] +"%</span>";
                    }

                FIELD += "<h2>"+ D["data"][i]["type"] +" "+ D["data"][i]["name"];

                    for (b = 0; b < D["data"][i]["stars"]; b++) {
                        FIELD += "<i class=\"fa fa-star\" style=\"color: #ffa726;\"></i>";
                    }
var url="";
                FIELD += "</h2>";                
                FIELD += "<div class=\"row no-gutters\">";
                FIELD += "<div class=\"col-lg-4 col-md-12 col-xs-12\">";
                FIELD += "<img src="+ D["data"][i]["image"] +" alt=\"pricing-icon\">";
                FIELD += "</div>";
                FIELD += "<div class=\"col-lg-8 col-md-12 col-xs-12\">";
                FIELD += "<div class=\"row no-gutters\">";
                FIELD += "<div class=\"col-lg-10 col-md-12 col-xs-12\">";
                FIELD += "<p class=\"text-right\">";
                FIELD += "<i class=\"fa fa-map-marker\" style=\"color:darkgray;\"></i>"+ D["data"][i]["address"];
                FIELD += "</p>";
                FIELD += "<div class=\"row\">";
                FIELD += "<div class=\"col-lg-6 col-md-12 col-xs-12\">";
                num = D["data"][i]["min_price"];
                FIELD +=  "شروع قیمت: " + (num + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + "ريال";
                FIELD += "</div>";
                FIELD += "<div class=\"col-lg-6 col-md-12 col-xs-12\">";
                      if(D["data"][i]["name_en"] == null) { var url = D["data"][i]["name_en"]; }else{ var url = D["data"][i]["id"];}
                FIELD += "<a class=\"btn btn-primary btn-block\" href=/hotel/" + url + "?DateFrom=" + DateFrom + "&DateEnd=" + DateEnd + ">رزرو هتل</a>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
            }
                document.getElementById("HOTELS").innerHTML = FIELD;
                }else{
                    document.getElementById("title").innerHTML ="<h2>در این شهر هتلی موجود نیست</h2>";
                    document.getElementById('loadig').style.display = "none";
                }
            }else{
                document.getElementById("title").innerHTML ="<h2>"+ D["error"]+"</h2>";
                document.getElementById('loadig').style.display = "none";
            }

        },
        error: function (e) {
            document.getElementById("title").innerHTML ="<h2>خطایی رخ داده لطفا دوباره تلاش نمایید</h2>";
            document.getElementById('loadig').style.display = "none";
        }

    });
</script>
@endsection
