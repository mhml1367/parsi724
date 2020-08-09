@extends('layout.index')
@section('style')
<link href="/css/persian-datepicker.css" rel="stylesheet">
@endsection

@section('content')
<section class="pt80 pb80 cruise-grid-view">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="Filter-left">
            <form action="#" autocomplete="off">
                <div class="mb-left">
                <h6 class="form-label">شهر</h6>
                    <div class="form-group">
                        <select class="custom-select select-big mb-3" id="city" name="option">
                            @foreach ($city as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
              <div class="mb-left">
                <label for="form_dates" class="form-label">تاریخ</label>
                <div class="form-group">
                  <input class="form-control" type="text" id="date-picker" value="{{request()->input('DateFrom')}}" placeholder="تاریخ ورودی">
                </div>
              </div>
              <div class="mb-left">
                <label for="form_dates" class="form-label">تاریخ</label>
                <div class="form-group">
                  <input class="form-control" type="text" id="date-picker-out" value="{{request()->input('DateEnd')}}" placeholder="تاریخ خروج">
                </div>
              </div>
              <div class="mb-left">
                <label class="form-label">حدود قیمت</label>
                <div class="range-slider">
                  <input type="range" value="150" min="0" max="500" range="true">
                  <span class="range-value">150</span> </div>
              </div>

                <div class="mb-left">
                  <div id="sub" class="btn btn-primary btn-grad FilterBtn"> <i class="fas fa-filter mr-1"></i>فیلتر </div>
                </div>
            </form>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="resultBar barSpaceAdjust">
            <h2 id="title">لطفا جستجو نمایید!</h2>
            <ul class="list-inline">
              <li class="active"><a href="cruise-grid-view.html"><i class="fa fa-th" aria-hidden="true"></i></a></li>
              <li><a href="hotel-list-view.html"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="lds-ellipsis" id="loading" style="display: none">
            <div></div><div></div><div></div><div></div>
        </div>
          <div class="row"  id="HOTELS"> </div>

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
  var dateOne1 = "{{request()->input('DateFrom')}}";
  var dateTow1 = "{{request()->input('DateEnd')}}";
  var city = "{{$oneCity}}";
  
function parseArabic(str) {
    return Number( str.replace(/[٠١٢٣٤٥٦٧٨٩]/g, function(d) {
        return d.charCodeAt(0) - 1632; // Convert Arabic numbers
    }).replace(/[۰۱۲۳۴۵۶۷۸۹]/g, function(d) {
        return d.charCodeAt(0) - 1776; // Convert Persian numbers
    }) );
}


  if (dateOne1 != "") {
  
    DateF = dateOne1;
    DateS = DateF.split("/");
    if(parseArabic(DateS[1]).toString().length == 1)
      {
        MotOne = "0"+parseArabic(DateS[1]);
      }else{
        MotOne = parseArabic(DateS[1]);
    }
    if(parseArabic(DateS[2]).toString().length == 1)
      {
        DayOne = "0"+parseArabic(DateS[2]);
      }else{
        DayOne = parseArabic(DateS[2]);
    }
    dateOne = parseArabic(DateS[0])+"/"+MotOne+"/"+DayOne;

    document.getElementById("date-picker").val = dateOne;

    DateF1 = dateTow1;
    DateS1 = DateF1.split("/");
    if(parseArabic(DateS1[1]).toString().length == 1)
      {
        MotTow = "0"+parseArabic(DateS[1]);
      }else{
        MotTow = parseArabic(DateS[1]);
    }
    if(parseArabic(DateS1[2]).toString().length == 1)
      {
        DayTow = "0"+parseArabic(DateS1[2]);
      }else{
        DayTow = parseArabic(DateS1[2]);
    }
    dateTow = parseArabic(DateS1[0])+"/"+MotTow+"/"+DayTow;

    document.getElementById("date-picker-out").val = dateTow;

    document.getElementById("HOTELS").innerHTML = "";
    document.getElementById('loading').style.display = "initial";
    
    if (city != null) {
        dataSend = {
            token: "mzoc1CEq401565108119FTd7QvbGea",
            from : dateOne,
            to : dateTow,
            city_name_en: city,
        };
        DataHotel(dataSend);
      }
  }

  $("#sub").click(function () {
      fetchHotels()
    });
var DateFrom = $("#date-picker").val();
var DateEnd = $("#date-picker-out").val();

function fetchHotels() {
    document.getElementById("HOTELS").innerHTML = "";
    document.getElementById('loading').style.display = "initial";

     DateFrom = $("#date-picker").val();
     DateEnd = $("#date-picker-out").val();

        dataSend = {
            token: "mzoc1CEq401565108119FTd7QvbGea",
            from : DateFrom,
            to : DateEnd,
            city_id: $("#city").val(),
        };
        DataHotel(dataSend);
    };

function DataHotel(dataSend) {
    $('html,body').animate({ scrollTop: 20 }, 'slow');
    $.ajax({
        type: 'GET',
        url: 'http://recepshen.ir/api/fetchHotels',
        data: dataSend,
        success: function (D) {
            if(D["error"] == undefined){
                if(D["data"].length != 0){

                document.getElementById("title").innerHTML ="<h2>لیست <span>"+D["data"].length+"</span> هتل و اقامتگاه های <span>"+ D["data"]["0"]["city"]+"</span></h2>";
                document.getElementById('loading').style.display = "none";

            var FIELD= "";
            for (i = 0; i < D["data"].length; i++) {

                if (D["data"][i]["name_en"] == null) {
                    var url = D["data"][i]["name_en"];
                } else {
                    var url = D["data"][i]["id"];
                }

                FIELD += "<div class=\"col-md-12 col-sm-12 col-xs-12\">";
                FIELD += "<div class=\"row listroBox\">";
                FIELD += "<div class=\"col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding\">";
                FIELD += "<figure> <a href=\"/hotel/" + url + "?DateFrom=" + DateFrom + "&DateEnd=" + DateEnd + "\" class=\"wishlist_bt\"></a> <a href=\"/hotel/" + url + "?DateFrom=" + DateFrom + "&DateEnd=" + DateEnd + "\"><img src=\""+ D["data"][i]["image"] +"\" class=\"img-fluid\">";
                FIELD += "<div class=\"read_more\"><span>جزیات بیشتر</span></div>";
                FIELD += "</a> </figure>";
                FIELD += "</div>";
                FIELD += "<div class=\"col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding\">";
                FIELD += "<div class=\"listroBoxmain\">";
                FIELD += "<h3><a href=\"/hotel/" + url + "?DateFrom=" + DateFrom + "&DateEnd=" + DateEnd + "\">"+ D["data"][i]["type"] +" "+ D["data"][i]["name"];

                    for (b = 0; b < D["data"][i]["stars"]; b++) {
                        FIELD += "<i class=\"fa fa-star\" style=\"color: #ffa726;\"></i>";
                    }

                FIELD += "</a></h3>";
                num = D["data"][i]["min_price"];
                FIELD +=  "<p>شروع قیمت: " + (num + "").replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + "ريال</p>";
                FIELD += "<ul>";
                FIELD += "<li><span class=\"Ropen\">هم اکنون باز است</span></li>";
                FIELD += "<li>";
                FIELD += "<div class=\"R_retings\"><span>آبی هیل <em>122 بررسی</em></span><strong> 8.2</strong></div>";
                FIELD += "</li>";
                FIELD += "</ul>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";
                FIELD += "</div>";


            }
                document.getElementById("HOTELS").innerHTML = FIELD;
                }else{
                    document.getElementById("title").innerHTML ="<h2>در این شهر هتلی موجود نیست</h2>";
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
</script>
@endsection
