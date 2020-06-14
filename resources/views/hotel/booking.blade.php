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
                                        <td>@if ($rec->Sir_Madam == "F")
                                                خانم
                                            @endif @if ($rec->Sir_Madam == "M")
                                            آقا
                                        @endif   {{$rec->first_name}}  {{$rec->last_name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">کدملی:</td>
                                        <td>{{$rec->first_name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">شماره موبایل:</td>
                                        <td>{{$rec->phone_number}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">شهر:</td>
                                        <td>{{$rec->city}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">جمع مبلغ پرداختی</td>
                                        <td>
                                        ریال: {{$rec->price}}
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
                                    <button class="btn btn-primary btn-lg btn-grad" id="send" type="submit">تایید رزرو و پرداخت</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="listing-item ">
                    <article class="TravelGo-category-listing fl-wrap">
                        <div class="TravelGo-category-content fl-wrap title-sin_item">
                            <div class="TravelGo-category-content-title fl-wrap">
                                <div class="TravelGo-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="#">{{$rec->hotel}}</a></h3>
                                    <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i
                                                class="fas fa-map-marker-alt"></i>{{$rec->room}}</a>
                                        <span>{{$rec->price}}</span><a href="#" class="map-item"></a><span></span> </div>
                                </div>
                            </div>


                            <div class="TravelGo-category-content-title-item others-details">
                                <h3 class="title-sin_map"><a href="#">جزئیات رزرو</a></h3>
                            </div>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td class="bookex">نوع اتاق:</td>
                                        <td>{{$rec->room}}</td>
                                    </tr>
                                    <tr>
                                        <td class="bookex">اقامت:</td>
                                        <td>{{$rec->contract}}</td>
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
<script>
    $("#send").click(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            type: 'POST',
            url: "{{ route('post.hotels.reserve') }}",
            data: {
                hotel_id: "{{$rec->hotelid}}",
                room_id: "{{$rec->roomid}}",
                contracts: "{{$rec->gender}}",
                first_name: "{{$rec->first_name}}",
                last_name: "{{$rec->last_name}}",
                national_code: "{{$rec->national_code}}",
                phone_number:"{{$rec->phone_number}}",
                Sir_Madam: "{{$rec->Sir_Madam}}",
                city: "{{$rec->city}}",
                start_date: "{{$rec->date1}}",
                end_date: "{{$rec->date2}}",
            },
            success: function (Data) {
                if (Data["status"] == 0) {
                    $("#send").notify(
                        Data["error"], "error",
                        { position:"right" }
                    );
                }
                if (Data["status"] == 1) {
                    window.location.replace(Data["data"]["payLink"]);
                }
            }
        });
    });
</script>
@endsection
