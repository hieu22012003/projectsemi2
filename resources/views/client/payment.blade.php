<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('client/css/payment.css')}}">
    <link rel="stylesheet" href="{{asset('client/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/font-awesome-4.6.3/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/style2.css')}}" />
    <link rel="stylesheet" href="{{asset('client/css/about.css')}}" />
    <script src="{{asset('client/js/jquery-3.2.1.slim.min.js')}}"></script>
    <script src="{{asset('client/popper.js.1.12.9/content/Scripts/umd/popper.min.js')}}"></script>
    <script src="{{asset('client/js/js/bootstrap.min.js')}}"></script>

    <title>Payment</title>
</head>
<body>
<header>

    <div class="container-fluid" style="padding: 0">
        <div class="header">
            <ul class="nav justify-content-center">
                <a href="{{route('client.main')}}"  class="navbar-brand-cus pl-2">
                    <h3 class="m-0 text-primary1"><span class="text-dark">BANANA</span> AIRLINES </h3>

                </a>
                <img class=" col-1" src="{{asset('client/anh/logo2.jpg')}}" alt="">
                <li class="nav-item item-1">
                    <div class="nav-item">
                        <div class="nav-item-number">1</div>
                        <div class="nav-item-text" style=" opacity: 0.6">
                            Đặt chỗ
                        </div>
                    </div>
                </li>
                <li class="nav-item item-2">
                    <div class="nav-item">
                        <div class="nav-item-number"
                             style="background-color: #1ba0e2; opacity: 1">
                            2
                        </div>
                        <div class="nav-item-text"
                             style="color:#1ba0e2; opacity: 1">Thanh toán</div>
                    </div>
                </li>
                <li class="nav-item item-3">
                    <div class="nav-item">
                        <div class="nav-item-number">3</div>
                        <div class="nav-item-text">Đang xử lý</div>
                    </div>
                </li>
                <li class="nav-item item-4">
                    <div class="nav-item">
                        <div class="nav-item-number">4</div>
                        <div class="nav-item-text">Phát hành vé điện tử</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- Content Vertical Bar -->
<div class="payment1">
    <div class="container">
        <br>
        <h4 class="mb-1 typeword">Vui lòng chọn phương thức thanh toán </h4>
        <br>
        <div class="row">
            <div class="col-md-8">
                <div class="bg-white rounded shadow-sm p-4 payment">
                    <div class="row">
                        <div class="col-sm-4 pr-0">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <h6 class="text-primary typeword" style="padding: 18px;">BANANA - Pay</h6>
                                <a class="nav-link active typeword" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Thẻ tín dụng</a>
                                <a class="nav-link typeword" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Chuyển khoản quốc tế</a>
                                <a class="nav-link typeword" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Thẻ ATM nội địa</a>
                                <a class="nav-link typeword" id="v-pills-cash-tab" data-toggle="pill" href="#v-pills-cash" role="tab" aria-controls="v-pills-cash" aria-selected="false">Tại cửa hàng</a>
                            </div>
                        </div>
                        <div class="col-sm-8 pl-0">
                            <div class="tab-content h-100" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <h6 class="mb-3 mt-0 mb-3 typeword">Thêm thẻ mới</h6>
                                    <p class="typeword">
                                        Thẻ tín dụng <span class="payment-card ">
                                                <i class="fa fa-cc-visa"></i>
                                                <i class="fa fa-cc-mastercard"></i>
                                                <i class="fa fa-cc-amex"></i>
                                                <i class="fa fa-cc-discover"></i>
                                                <i class="fa fa-cc-jcb"></i>
                                            </span>
                                    </p>
                                    <form>
                                        <div class="form-row typeword">
                                            <div class="form-group col-md-12 ">
                                                <label for="inputPassword4">Số thẻ tín dụng</label>
                                                <div class="input-group">
                                                    <input type="number" class="form-control" placeholder="16 chữ số trên mặt thẻ">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-credit-card"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label>
                                                    Hiệu lực đến(MM/YY)
                                                </label>
                                                <input type="number" class="form-control" placeholder="MM/YY">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>
                                                    CVV
                                                </label>
                                                <input type="number" class="form-control" placeholder="3 số CVV">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>
                                                    Tên trên thẻ
                                                </label>
                                                <input type="text" class="form-control" placeholder="Tên trên thẻ">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Lưu an toàn thẻ này để thanh toán nhanh hơn vào lần sau.</label>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12 mb-0">
                                                <a href="#" class="btn  btn-block btn-lg btn-primary">
                                                    THANH TOÁN
                                                    <i class="icofont-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade typeword" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <div class="border shadow-sm-sm p-4 d-flex align-items-center bg-white mb-3">
                                        <i class="icofont-apple-pay-alt mr-3 icofont-3x"></i>
                                        <div class="d-flex flex-column">
                                            <h5 class="card-title">Apple Pay</h5>
                                            <p class="card-text">Apple Pay cho phép bạn đặt vé ngay bây giờ và thanh toán mà không phải trả thêm phí.</p>
                                            <a href="#" class="card-link font-weight-bold">LINK ACCOUNT <i class="icofont-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="border shadow-sm-sm p-4 d-flex bg-white align-items-center mb-3">
                                        <i class="icofont-paypal-alt mr-3 icofont-3x"></i>
                                        <div class="d-flex flex-column">
                                            <h5 class="card-title">Paypal</h5>
                                            <p class="card-text">Paypal cho phép bạn đặt vé ngay bây giờ và thanh toán mà không phải trả thêm phí.</p>
                                            <a href="#" class="card-link font-weight-bold">LINK ACCOUNT <i class="icofont-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="border shadow-sm-sm p-4 d-flex bg-white align-items-center">
                                        <i class="icofont-diners-club mr-3 icofont-3x"></i>
                                        <div class="d-flex flex-column">
                                            <h5 class="card-title">Diners Club</h5>
                                            <p class="card-text">Diners Club cho phép bạn đặt vé ngay bây giờ và thanh toán mà không phải trả thêm phí.</p>
                                            <a href="#" class="card-link font-weight-bold">LINK ACCOUNT <i class="icofont-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade typeword" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    <h6 class="mb-3 mt-0 mb-3">Internet Banking</h6>
                                    <form>
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-outline-primary active">
                                                <input type="radio" name="options" id="option1" autocomplete="off" checked> VCB <i class="icofont-check-circled"></i>
                                            </label>
                                            <label class="btn btn-outline-primary">
                                                <input type="radio" name="options" id="option2" autocomplete="off"> TCB <i class="icofont-check-circled"></i>
                                            </label>
                                            <label class="btn btn-outline-primary">
                                                <input type="radio" name="options" id="option3" autocomplete="off"> MB <i class="icofont-check-circled"></i>
                                            </label>
                                        </div>
                                        <hr>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>
                                                    Select Bank
                                                </label>
                                                <br>
                                                <select class="custom-select form-control">
                                                    <option selected>Bank</option>
                                                    <option value="1">Vietcombank</option>
                                                    <option value="2">Techcombank</option>
                                                    <option value="3">MB Bank</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12 mb-0">
                                                <a href="#" class="btn btn-primary btn-block btn-lg">
                                                    PAY
                                                    <i class="icofont-long-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade typeword" id="v-pills-cash" role="tabpanel" aria-labelledby="v-pills-cash-tab">
                                    <h6 class="mb-3 mt-0 mb-3">Tiền mặt</h6>
                                    <p>Vui lòng chuẩn bị số tiền chính xác để giúp chúng tôi phục vụ bạn tốt hơn</p>
                                    <hr>
                                    <form>
                                        <a href="#" class="btn btn-primary block btn-lg">
                                            PAY
                                            <i class="icofont-long-arrow-right"></i>
                                        </a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-2 typeword">
                    <a href="href="{{asset('client.finish')}}""><button type="button" class="btn btn-primary float-right custom1">Tiếp tục</button></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-white rounded shadow-sm p-4 payment typeword">
                    <p><b>Booking ID</b></p>
                    <h6>{{$bill->id}}</h6>
                    <hr>
                    <p class="mb-1"><b>CHUYẾN ĐI</b><span class="float-right text-primary"><b>Chi tiết</b></span></p>
                    <h6 class="mb-1">Chuyến bay</h6>
                    <p class="mb-1">{{\Carbon\Carbon::parse($chuyenbay->ngaydi)->format('l, d F Y')}}</p>
                    <div class="flight-time-start-end-consuming">
                        <div class="time-with-place" style="padding-right: 8px;">
                            <div class="time-start">
                                <span>{{\Carbon\Carbon::parse($chuyenbay->ngaydi)->format('h:i')}}</span>
                            </div>
                            <div class="place-start">
                                <span>{{$chuyenbay->sanbay1->thanhpho->mathanhpho}}</span>
                            </div>
                        </div>
                        <div class="direction-pointer" style="padding:8px">
                            <svg stroke-width="0" width="12" height="12" viewBox="0 0 12 12" fill="#8f8f8f" stroke="currentColor" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#8f8f8f" fill-rule="evenodd" d="M8.58578644,5 L1.99539757,5 C1.4556644,5 1,5.44771525 1,6 C1,6.55613518 1.44565467,7 1.99539757,7 L8.58578644,7 L7.29289322,8.29289322 C6.90236893,8.68341751 6.90236893,9.31658249 7.29289322,9.70710678 C7.68341751,10.0976311 8.31658249,10.0976311 8.70710678,9.70710678 L11.7071068,6.70710678 C12.0976311,6.31658249 12.0976311,5.68341751 11.7071068,5.29289322 L8.70710678,2.29289322 C8.31658249,1.90236893 7.68341751,1.90236893 7.29289322,2.29289322 C6.90236893,2.68341751 6.90236893,3.31658249 7.29289322,3.70710678 L8.58578644,5 L8.58578644,5 Z"></path></svg>
                        </div>
                        <div class="time-with-place" style="padding: 0 8px;">
                            <div class="time-start">
                                <span>{{\Carbon\Carbon::parse($chuyenbay->ngayden)->format('h:i')}}</span>
                            </div>
                            <div class="place-start">
                                <span>{{$chuyenbay->sanbay2->thanhpho->mathanhpho}}</span>
                            </div>
                        </div>
                        <div class="time-consuming-with-type" style="padding-left: 8px;">
                            <div class="time-consuming">
                                <span>{{\Carbon\Carbon::parse($chuyenbay->ngaydi)->diffInMinutes(\Carbon\Carbon::parse($chuyenbay->ngayden))}}p</span>
                            </div>
                            <span>
                                    <span style="width: 10px;
                      height: 10px;
                      border-radius: 50%;
                      background: #1ba0e2;
                      display: inline-block;
                      margin-right: 8px;
                      vertical-align: middle;"></span>Bay thẳng
                                </span>
                        </div>
                    </div>
                    <hr>
                    <p><b>DANH SÁCH HÀNH KHÁCH</b></p>
                    <p class="mb-1">{{$user->name}}<span class="float-right ">Người lớn</span></p>

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</div>
<div class="footer">
    <div class="footer-button">
        <a href="">
            <svg stroke-width="0" width="16" height="16" viewBox="0 0 16 16" fill="#fff" stroke="currentColor" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#fff" fill-rule="evenodd" d="M8,16 C3.581722,16 0,12.418278 0,8 C0,3.581722 3.581722,0 8,0 C12.418278,0 16,3.581722 16,8 C16,12.418278 12.418278,16 8,16 Z M8,14 C8.55228475,14 9,13.5522847 9,13 C9,12.4477153 8.55228475,12 8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 Z M12,6 C12,3.790861 10.209139,2 8,2 C6.92557447,2 5.91622834,2.42691741 5.17157288,3.17157288 C4.80069616,3.54244959 4.50524612,3.98305357 4.30388793,4.46864929 C4.09234236,4.97881291 4.33442012,5.5638738 4.84458374,5.77541937 C5.35474736,5.98696494 5.93980825,5.74488718 6.15135382,5.23472356 C6.251828,4.99241988 6.39975256,4.77182032 6.58578644,4.58578644 C6.95908733,4.21248555 7.46145959,4 8,4 C9.1045695,4 10,4.8954305 10,6 C10,7.1045695 9.1045695,8 8,8 C7.44771525,8 7,8.44771525 7,9 L7,10 C7,10.5522847 7.44771525,11 8,11 C8.55228475,11 9,10.5522847 9,10 L9,9.87398251 C10.7252272,9.42993972 12,7.86383943 12,6 Z"></path></svg>
            Bạn cần hỗ trợ?
        </a>
    </div>
</div>
</body>
</html>

