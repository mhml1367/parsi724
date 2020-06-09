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
                  <input class="form-control hasDatepicker" type="text" id="date-picker" autocomplete="off" placeholder="انتخاب تاریخ">
                </div>
              </div>
              <div class="mb-left">
                <label for="form_dates" class="form-label">تاریخ</label>
                <div class="form-group">
                  <input class="form-control hasDatepicker" type="text" id="date-picker-out" autocomplete="off" placeholder="انتخاب تاریخ">
                </div>
              </div>
              <div class="mb-left">
                <label for="form_guests" class="form-label">مهمان</label>
                <select class="custom-select select-big ">
                  <option selected="">مهمان</option>
                  <option value="guests_0">01 </option>
                  <option value="guests_1">02 </option>
                  <option value="guests_2">03 </option>
                  <option value="guests_3">04 </option>
                  <option value="guests_4">05 </option>
                </select>
              </div>
              <div class="mb-left">
                <label for="form_type" class="form-label">نوع خانه</label>
                <select class="custom-select select-big ">
                  <option value="type_0">مکان کامل </option>
                  <option value="type_1">اتاق خصوصی </option>
                  <option value="type_2">اتاق مشترک </option>
                </select>
              </div>
              <div class="mb-left">
                <label class="form-label">حدود قیمت</label>
                <div class="range-slider">
                  <input type="range" value="150" min="0" max="500" range="true">
                  <span class="range-value">150</span> </div>
              </div>
              <div class="mb-left">
                <label class="form-label">میزبان و رزرو</label>
                <ul class="list-inline mb-0 mt-1">
                  <li class="list-inline-item">
                    <div class="custom-control custom-switch">
                      <input id="instantBook" type="checkbox" class="custom-control-input">
                      <label for="instantBook" class="custom-control-label"> <span class="text-sm">رزرو فوری</span></label>
                    </div>
                  </li>
                  <li class="list-inline-item">
                    <div class="custom-control custom-switch">
                      <input id="superhost" type="checkbox" class="custom-control-input">
                      <label for="superhost" class="custom-control-label"> <span class="text-sm">فوق العاده</span></label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="pb-left">
                <div id="moreFilters" class="collapse show">
                  <div class="filter-block">

                    <div class="form-group mb-0">
                      <label class="form-label">برچسب محله</label>
                      <ul class="list-inline mt-xl-1 mb-0">
                        <li class="list-inline-item">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="type_0" name="type[]" class="custom-control-input">
                            <label for="type_0" class="custom-control-label">هیپستر </label>
                          </div>
                        </li>
                        <li class="list-inline-item">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="type_1" name="type[]" class="custom-control-input">
                            <label for="type_1" class="custom-control-label">کسب و کار </label>
                          </div>
                        </li>
                        <li class="list-inline-item">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="type_2" name="type[]" class="custom-control-input">
                            <label for="type_2" class="custom-control-label">خانواده </label>
                          </div>
                        </li>
                        <li class="list-inline-item">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="type_3" name="type[]" class="custom-control-input">
                            <label for="type_3" class="custom-control-label">سبز </label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="filter-block">
                    <h6 class="mb-3">اتاقها و تختخوابها</h6>
                    <div class="form-group ">
                      <label class="form-label">تختخواب</label>
                      <div class="d-flex align-items-center"> <span class="input-number-decrement">-</span>
                        <input class="input-number" type="text" value="1" min="0" max="10">
                        <span class="input-number-increment">+</span> </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label">اتاق های خواب</label>
                      <div class="d-flex align-items-center"> <span class="input-number-decrement">-</span>
                        <input class="input-number" type="text" value="1" min="0" max="10">
                        <span class="input-number-increment">+</span> </div>
                    </div>
                    <div class="form-group mb-0">
                      <label class="form-label">حمام</label>
                      <div class="d-flex align-items-center"> <span class="input-number-decrement">-</span>
                        <input class="input-number" type="text" value="1" min="0" max="10">
                        <span class="input-number-increment">+</span> </div>
                    </div>
                  </div>
                  <div class="filter-block">
                    <h6 class="mb-3">نوع سفر</h6>
                    <div class="form-group mb-0">
                      <div class="custom-control custom-switch">
                        <input id="forfamilies" type="checkbox" name="forfamilies" aria-describedby="forfamiliesHelp" class="custom-control-input">
                        <label for="forfamilies" class="custom-control-label"> <span class="text-sm">برای خانواده ها</span></label>
                      </div>
                    </div>
                    <div class="form-group mb-0">
                      <div class="custom-control custom-switch">
                        <input id="forwork" type="checkbox" name="forwork" aria-describedby="forworkHelp" class="custom-control-input">
                        <label for="forwork" class="custom-control-label"> <span class="text-sm">برای کار</span></label>
                      </div>
                    </div>
                  </div>
                  <div class="filter-block">
                    <h6 class="mb-3">امکانات</h6>
                    <ul class="list-unstyled mb-0">
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_0" name="amenities[]" class="custom-control-input">
                          <label for="amenities_0" class="custom-control-label">آشپزخانه </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_1" name="amenities[]" class="custom-control-input">
                          <label for="amenities_1" class="custom-control-label">شامپو </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_2" name="amenities[]" class="custom-control-input">
                          <label for="amenities_2" class="custom-control-label">گرمایش </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_3" name="amenities[]" class="custom-control-input">
                          <label for="amenities_3" class="custom-control-label">تهویه هوا </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_4" name="amenities[]" class="custom-control-input">
                          <label for="amenities_4" class="custom-control-label">واشر </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_5" name="amenities[]" class="custom-control-input">
                          <label for="amenities_5" class="custom-control-label">خشک کن </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_6" name="amenities[]" class="custom-control-input">
                          <label for="amenities_6" class="custom-control-label">وای فای </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_7" name="amenities[]" class="custom-control-input">
                          <label for="amenities_7" class="custom-control-label">صبحانه </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_8" name="amenities[]" class="custom-control-input">
                          <label for="amenities_8" class="custom-control-label">شومینه داخلی </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_9" name="amenities[]" class="custom-control-input">
                          <label for="amenities_9" class="custom-control-label">وایلرس</label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_10" name="amenities[]" class="custom-control-input">
                          <label for="amenities_10" class="custom-control-label">دومن </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_11" name="amenities[]" class="custom-control-input">
                          <label for="amenities_11" class="custom-control-label">چوب لباسی </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_12" name="amenities[]" class="custom-control-input">
                          <label for="amenities_12" class="custom-control-label">اهن </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_13" name="amenities[]" class="custom-control-input">
                          <label for="amenities_13" class="custom-control-label">سشوار </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="amenities_14" name="amenities[]" class="custom-control-input">
                          <label for="amenities_14" class="custom-control-label">فضای کاری دوستانه لپ تاپ </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="filter-block">
                    <h6 class="mb-3">امکانات</h6>
                    <ul class="list-unstyled mb-0">
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="facilities_0" name="facilities[]" class="custom-control-input">
                          <label for="facilities_0" class="custom-control-label">پارکینگ رایگان در محل </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="facilities_1" name="facilities[]" class="custom-control-input">
                          <label for="facilities_1" class="custom-control-label">سالن ورزش </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="facilities_2" name="facilities[]" class="custom-control-input">
                          <label for="facilities_2" class="custom-control-label">جکوزی </label>
                        </div>
                      </li>
                      <li>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="facilities_3" name="facilities[]" class="custom-control-input">
                          <label for="facilities_3" class="custom-control-label">استخر </label>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="mb-left">
                  <button type="submit" id="sub" class="btn btn-primary btn-grad FilterBtn"> <i class="fas fa-filter mr-1"></i>فیلتر </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="resultBar barSpaceAdjust">
            <h2 id="title">ما <span>7</span> نتیجه برای شما پیدا کردیم</h2>
            <ul class="list-inline">
              <li class="active"><a href="cruise-grid-view.html"><i class="fa fa-th" aria-hidden="true"></i></a></li>
              <li><a href="hotel-list-view.html"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="lds-ellipsis" id="loading" style="display: none">
            <div></div><div></div><div></div><div></div>
        </div>
          <div class="row"  id="HOTELS">


            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="row listroBox">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                      <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room6.jpg" class="img-fluid" alt="">
                        <div class="read_more"><span>بیشتر بخوانید</span></div>
                      </a> </figure>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                      <div class="listroBoxmain">
                        <h3><a href="hotel-detailed.html">رستوران آبی هیل</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        <a class="address" href="#">دریافت جهات</a> </div>
                      <ul>
                        <li><span class="Ropen">هم اکنون باز است</span></li>
                        <li>
                          <div class="R_retings"><span>آبی هیل <em>122 بررسی</em></span><strong> 8.2</strong></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>





            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="row listroBox">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                      <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room1.jpg" class="img-fluid" alt="">
                        <div class="read_more"><span>بیشتر بخوانید</span></div>
                      </a> </figure>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                      <div class="listroBoxmain">
                        <h3><a href="hotel-detailed.html">رستوران آبی هیل</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        <a class="address" href="#">دریافت جهات</a> </div>
                      <ul>
                        <li><span class="Ropen">هم اکنون باز است</span></li>
                        <li>
                          <div class="R_retings"><span>آبی هیل <em>122 بررسی</em></span><strong> 8.2</strong></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>





            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="row listroBox">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                      <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room2.jpg" class="img-fluid" alt="">
                        <div class="read_more"><span>بیشتر بخوانید</span></div>
                      </a> </figure>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                      <div class="listroBoxmain">
                        <h3><a href="hotel-detailed.html">رستوران آبی هیل</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        <a class="address" href="#">دریافت جهات</a> </div>
                      <ul>
                        <li><span class="Ropen">هم اکنون باز است</span></li>
                        <li>
                          <div class="R_retings"><span>آبی هیل <em>122 بررسی</em></span><strong> 8.2</strong></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>





            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="row listroBox">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                      <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room3.jpg" class="img-fluid" alt="">
                        <div class="read_more"><span>بیشتر بخوانید</span></div>
                      </a> </figure>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                      <div class="listroBoxmain">
                        <h3><a href="hotel-detailed.html">رستوران آبی هیل</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        <a class="address" href="#">دریافت جهات</a> </div>
                      <ul>
                        <li><span class="Ropen">هم اکنون باز است</span></li>
                        <li>
                          <div class="R_retings"><span>آبی هیل <em>122 بررسی</em></span><strong> 8.2</strong></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>





            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="row listroBox">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                      <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room4.jpg" class="img-fluid" alt="">
                        <div class="read_more"><span>بیشتر بخوانید</span></div>
                      </a> </figure>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                      <div class="listroBoxmain">
                        <h3><a href="hotel-detailed.html">رستوران آبی هیل</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        <a class="address" href="#">دریافت جهات</a> </div>
                      <ul>
                        <li><span class="Ropen">هم اکنون باز است</span></li>
                        <li>
                          <div class="R_retings"><span>آبی هیل <em>122 بررسی</em></span><strong> 8.2</strong></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>







            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="row listroBox">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                      <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room5.jpg" class="img-fluid" alt="">
                        <div class="read_more"><span>بیشتر بخوانید</span></div>
                      </a> </figure>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                      <div class="listroBoxmain">
                        <h3><a href="hotel-detailed.html">رستوران آبی هیل</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        <a class="address" href="#">دریافت جهات</a> </div>
                      <ul>
                        <li><span class="Ropen">هم اکنون باز است</span></li>
                        <li>
                          <div class="R_retings"><span>آبی هیل <em>122 بررسی</em></span><strong> 8.2</strong></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>




            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="row listroBox">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 Nopadding">
                      <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room7.jpg" class="img-fluid" alt="">
                        <div class="read_more"><span>بیشتر بخوانید</span></div>
                      </a> </figure>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 Nopadding">
                      <div class="listroBoxmain">
                        <h3><a href="hotel-detailed.html">رستوران آبی هیل</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        <a class="address" href="#">دریافت جهات</a> </div>
                      <ul>
                        <li><span class="Ropen">هم اکنون باز است</span></li>
                        <li>
                          <div class="R_retings"><span>آبی هیل <em>122 بررسی</em></span><strong> 8.2</strong></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>






          </div>



          <div class="paginationCommon blogPagination categoryPagination">
            <nav aria-label="پیمایش صفحه">
              <ul class="pagination">
                <li> <a href="#" aria-label="قبلی"> <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li> <a href="#" aria-label="بعد"> <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span> </a> </li>
              </ul>
            </nav>
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

  $("#sub").click(function () {
    document.getElementById("HOTELS").innerHTML = "";
    document.getElementById('loading').style.display = "initial";

    var DateF = $("#date-picker").val();
    var DateS = DateF.split("/");
    var DateFro = parseArabic(DateS[0])+"/"+parseArabic(DateS[1])+"/"+parseArabic(DateS[2]);

    var DateFi = $("#date-picker-out").val();
    var DateSi = DateFi.split("/");
    var DateFroi = parseArabic(DateSi[0])+"/"+parseArabic(DateSi[1])+"/"+parseArabic(DateSi[2]);

    var DateFrom = moment(DateFro).format('YYYY/MM/DD');
    var DateEnd = moment(DateFroi).format('YYYY/MM/DD');

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
    var DateF = $("#date-picker").val();
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
                document.getElementById('loading').style.display = "none";

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
