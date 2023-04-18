@section("title")
    Thêm Chuyến Bay
@endsection
{{--@section("title","Abuot Us") có thể đổi dùng ntn --}}

@extends("admin-layout")
@section("main")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm chuyến bay</h1>
                    <a href="{{route("admin.chuyenbay.list")}}" class="btn btn-outline-info float-right">
                        Quay lại
                    </a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Thêm chuyến bay</li>
                    </ol>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Thêm chuyến bay</h3>
                </div>
                <form role="form" method="post" action="{{route("admin.chuyenbay.create")}}" enctype="multipart/form-data">
                    @csrf
                    @method("post")
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Mã chuyến bay</label>
                            <input type="text" class="form-control" name="machuyenbay" id="machuyenbay" value="{{old("machuyenbay")}}" placeholder="Mã chuyến bay">
                            @error("machuyenbay")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên máy bay</label>
                            <select name="idmaybay" class="form-control">
                                @foreach($maybay as $item)
                                    <option  @if(old('idmaybay') == $item->id) selected @endif value="{{$item->id}}"> {{$item->tenmaybay}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Cất cánh</label>
                            <input type="datetime-local" class="form-control" name="ngaydi" id="ngaydi" value="{{old("ngaydi")}}" placeholder="Cất cánh">
                            @error("ngaydi")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Hạ cánh</label>
                            <input type="datetime-local" class="form-control" name="ngayden" id="ngayden" value="{{old("ngayden")}}" placeholder="Hạ cánh">
                            @error("ngayden")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Quãng đường</label>
                            <input type="text" class="form-control" name="quangduong" id="quangduong" value="{{old("quangduong")}}" placeholder="Quãng đường">
                            @error("quangduong")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nơi đi</label>
                            <select name="sanbaydi" class="form-control">
                                @foreach($sanbay as $item)
                                    <option  @if(old('sanbaydi') == $item->id) selected @endif value="{{$item->id}}"> {{$item->tensanbay}} </option>
                                @endforeach
                            </select>
                            @error("sanbaydi")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nơi đến</label>
                            <select name="sanbayden" class="form-control">
                                @foreach($sanbay as $item)
                                    <option  @if(old('sanbayden') == $item->id) selected @endif value="{{$item->id}}"> {{$item->tensanbay}} </option>
                                @endforeach
                            </select>
                            @error("sanbayden")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá vé</label>
                            <input type="text" class="form-control" name="giave" id="giave" value="{{old("giave")}}" placeholder="Giá vé">
                            @error("giave")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Trạng thái</label>
                            <select name="trangthai" class="form-control">
                                @foreach(config('base.trang_thai_chuyen_bay') as $key => $item)
                                    <option  @if(old('trangthai') == $key) selected @endif value="{{$key}}"> {{$item}} </option>
                                @endforeach
                            </select>
                            @error("sanbayden")
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

