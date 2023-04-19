@extends('layouts.layout-main.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Giới thiệu</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{route('client.main')}}">Trang chủ</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Giới thiệu</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!--Start-->
    <div class="container typeword">
        <div class="my-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb rounded-0 px-0 py-2">
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{route('client.main')}}"
                           class="text-truncate text-info fondsize"
                           title="Trang chủ">Trang chủ</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="./gioithieu.html"
                           class="cam-color fondsize"
                           title="Điểm đến yêu thích">Giới thiệu</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('client/anh/about.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">Bay an toàn- vui ngập tràn</h1>
                        <p class="text-dark" >Đến với Banana Airlines, chúng tôi cam kết đem tới cho khách hàng những trải nghiệm tuyệt vời nhất </p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <div class="team-item bg-white mb-4">
                                    <div class="team-img position-relative overflow-hidden">
                                        <img class="img-fluid  " src="{{asset('client/anh/plane3.jpg')}}" alt="">
                                    </div>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="team-item bg-white mb-4">
                                    <div class="team-img position-relative overflow-hidden">
                                        <img class="img-fluid  " src="{{asset('client/anh/plane.jpg')}}" alt="">
                                    </div>
                                </div>

                            </div>
                            <a href="./chuyenbay.html" class="btn btn-primary mt-1">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->








        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <div class="text-center mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">GIỚI THIỆU</h6>
                    <h1>Về nhóm chúng tôi</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://scontent.fhan17-1.fna.fbcdn.net/v/t39.30808-6/319664624_5871652436188464_7356375749769381303_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=174925&_nc_ohc=FFmhyAxI98QAX8fv7tE&_nc_ht=scontent.fhan17-1.fna&oh=00_AfBdZoD4syT5Pvci8tmf4s_2GFn25c-eTeLRp_PteCpKRw&oe=64438671" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="https://www.facebook.com/youngspidey2301"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">NGUYỄN TRUNG HIẾU</h5>
                                <p class="m-0">Team Leader</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://scontent.fhan17-1.fna.fbcdn.net/v/t1.15752-9/341128619_1413315642764349_4772137840312371018_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=ae9488&_nc_ohc=dbDYnZlc0vcAX9AMY47&_nc_ht=scontent.fhan17-1.fna&oh=03_AdTjrP52Od2QxY2prujFwSZHaseAgT-3XPodZAosS1lMVg&oe=64605484"  alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="https://www.facebook.com/profile.php?id=100074636828645"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">LÊ MINH ĐỨC</h5>
                                <p class="m-0">Project Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://images2.thanhnien.vn/zoom/686_429/Uploaded/dotuan/2022_08_04/1-9730.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="https://www.facebook.com/vu.theanh.376043"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">VŨ THẾ ANH</h5>
                                <p class="m-0">Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://scontent.fhan17-1.fna.fbcdn.net/v/t39.30808-6/319539708_1108536289805280_6144920764314498105_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=z1F1uOYaV_QAX842dkG&_nc_ht=scontent.fhan17-1.fna&oh=00_AfDF8EnyNFlnNf9NcBgM9YM94xU7VN9TsQpeuZZTLUh4Tw&oe=64438D8F" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="hhttps://www.facebook.com/dangpham.danh.9"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">PHẠM ĐĂNG DANH</h5>
                                <p class="m-0">Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 pb-1">
                        <div class="team-item bg-white mb-4">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://scontent.fhan17-1.fna.fbcdn.net/v/t1.15752-9/335026861_652019923350145_6223389702177717614_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=ae9488&_nc_ohc=R3BEZuDML8IAX_CLcpv&_nc_ht=scontent.fhan17-1.fna&oh=03_AdQzoEFsJaKYwh6T9klE1cYxKJBDMz-q2UJ0MsMCMUkwHg&oe=6466A1CC" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="https://www.facebook.com/quyen.nhu.56027281"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h5 class="text-truncate">NHỮ TIẾN QUYỀN</h5>
                                <p class="m-0">Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->



        <a href="about.html" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>



@endsection
