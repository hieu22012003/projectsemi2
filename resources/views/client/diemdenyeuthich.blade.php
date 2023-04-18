@extends('layouts.layout-main.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Điểm đến yêu thích</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('client.main')}}">Trang chủ</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Điểm đến yêu thích</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container typeword">
        <div class="my-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb rounded-0 px-0 py-2">
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{route('client.main')}}"
                           class="text-truncate text-info fondsize"
                           title="Trang chủ">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="#"
                           class="text-truncate text-info fondsize"
                           title="Thêm">Thêm</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="./diemdenyeuthich.html"
                           class="cam-color fondsize"
                           title="Điểm đến yêu thích">Điểm đến yêu thích</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="my-4">
                <div class="d-flex justify-content-center text-center" >
                </div>
                <div class="d-flex justify-content-center">
                    <div class="hoz-line"></div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/palawan.jpg')}}" class="img-fluid" alt="Palawan Thời Gian Như Ngưng Đọng')}}" />
                        <br>
                        <p class="my-1 news-group-title" style="color: #D9a404 ">#top1</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">
                            Palawan Thời Gian Như Ngưng Đọng
                        </h4>
                        <div class="my-3 news-hoz-line" >&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">
                            Palawan là hòn đảo có chung đường duyên hải với biển Đông Việt
                            Nam, là một địa danh tham quan đang nổi lên như một hiện tượng
                            trong làng du lịch quốc tế. Palawan không chỉ có thiên nhiên
                            tuyệt đẹp với những bãi cát trắng mịn, nước trong xanh biếc
                            cùng với những ngọn núi xanh mát, mà còn phong cách khai thác
                            du lịch chuyên nghiệp song song với việc bảo vệ môi trường
                            biển nơi này.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/newzealand.jpg')}}" class="img-fluid" alt="New Zealand - Gửi tình yêu nơi tận cùng thế giới" />
                        <br>
                        <p class="my-1 news-group-title" style="color: #D9a404 ">#top2</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">
                            New Zealand - Gửi tình yêu nơi tận cùng thế giới
                        </h4>
                        <div class="my-3 news-hoz-line">&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">
                            Giờ này khoảng đâu đó 8 năm về trước, mình xách vali hào hứng
                            rời khỏi New Zealand. Thế mà trong cái sáng lành lạnh ngày hôm
                            đấy, cái thứ cứ ám ảnh trong đầu mình lại là bức bưu thiếp nhỏ
                            có chữ: Come Back Soon Quang Dat.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/hoi-an.jpg')}}" class="img-fluid" alt="Hội An, điểm đến số 1 thế giới" />
                        <br>
                        <p class="my-1 news-group-title" style="color: #D9a404 ">#top3</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">
                            Hội An, điểm đến số 1 thế giới cho du khách nước ngoài
                        </h4>
                        <div class="my-3 news-hoz-line">&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">
                            Vượt qua Tokyo (Nhật Bản), Chiang Mai (Thái Lan)… Hội An trở
                            thành thành phố tuyệt vời nhất thế giới do tạp chí du lịch nổi
                            tiếng Travel and Leisure bình chọn. Không hào nhoáng, tráng
                            lệ, sức hấp dẫn của mảnh đất này đến từ chính vẻ đẹp bình dị
                            và giản đơn nhất. Hội An (Quảng Nam), thành phố số một thế
                            giới, là điểm đến hấp dẫn, mê hoặc rất nhiều du khách trong
                            nước lẫn quốc tế.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/Dao-gio.jpg')}}" class="img-fluid" alt=" Đảo Gió – Điểm Đến Thanh Bình Từ Miền Đất Quảng')}}" />
                        <br>
                        <p class="my-1 news-group-title" style="color: #D9a404 ">#top4</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">
                            Đảo Gió – Điểm đến thanh bình từ miền đất Quảng Bình
                        </h4>
                        <div class="my-3 news-hoz-line">&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">
                            Đảo Gió – Vương quốc của các loài chim nằm ở xã Quảng Đông,
                            huyện Quảng Trạch, tỉnh Quảng Bình. Đây là nơi trở thành thiên
                            đường lý tưởng cho nhiều loài chim quý hiếm cư trú như các
                            loài Yến, Én…đặc biệt là Hải Âu xám, một loài Hải Âu biển quý
                            hiếm nhất trên thế giới, và đây cũng là một trong những điểm
                            du lịch lý tưởng cho du khách trong và ngoài nước đến với
                            Quảng Bình.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/Hai-Phong-Thong-tin-chung.jpg')}}" class="img-fluid" alt="Kinh Nghiệm Du Lịch Hải Phòng')}}" />
                        <br>
                        <p class="my-1 news-group-title" style="color: #D9a404 ">#top5</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">
                            Kinh nghiệm du lịch Hải Phòng không phải ai cũng biết
                        </h4>
                        <div class="my-3 news-hoz-line">&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">
                            Hải Phòng vốn được biết đến là cảng biển lớn nhất của khu vực
                            miền Bắc. Đây cũng là một trong những trung tâm kinh tế - khoa
                            học, kỹ thuật tổng hợp của cả nước. Thành phố hoa phượng đỏ
                            còn nổi tiếng bởi cảnh phú thiên nhiên vô cùng tráng lệ, trong
                            đó không ít những địa danh đã trở nên vô cùng nổi tiếng và
                            được du khách khắp cả nước biết đến như rừng quốc gia Cát Bà
                            hay bãi biển Đồ Sơn.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex flex-column news-item mb-3">
                        <img src="{{asset('client/anh/dubai.jpg')}}" class="img-fluid" alt="Những bật mí thú vị về vương quốc xa hoa Dubai" />
                        <br>
                        <p class="my-1 news-group-title" style="color: #D9a404 ">#top6</p>
                        <h4 class="m-0 news-title news-title-item font-weight-bolder">
                            Những bật mí thú vị về vương quốc xa hoa Dubai
                        </h4>
                        <div class="my-3 news-hoz-line">&nbsp;</div>
                        <div class="my-2 news-body-overview line-range text-justify">
                            Tiểu vương quốc nằm ở phía nam bán đảo Ả Rập, Dubai, nơi không
                            chỉ nổi tiếng với các điểm tham quan thú vị không thua kém bất
                            kỳ thành phố nào trên thế giới, mà còn gây kinh ngạc với các
                            dự án kiến trúc hiện đại. Bên cạnh đó, Dubai còn có những điều
                            thú vị khác mà có thể bạn chưa biết, cũng đã góp phần tạo nên
                            sự tò mò, cuốn hút nhiều du khách.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
