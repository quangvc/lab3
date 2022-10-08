<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Thêm sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Thêm sản phẩm')
@section('content')

<div class="addProducts contain">
    <div class="addProducts__Content">
        <div class="addProducts_form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Mã sản phẩm</label>
                    <input type="number" class="form-control" disabled id="" aria-describedby="emailHelp" placeholder="auto number">
                </div>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Ảnh</label>
                    <input type="file" class="form-control" aria-describedby="emailHelp" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Giá</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="">
                </div>
                <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-success">
                <button type="reset" class="btn btn-danger">Nhập lại</button>
                <a href="{{BASE_URL}}product/show "><button type="button" class="btn btn-info">Danh sách</button></a>
            </form>
        </div>
    </div>
</div>

@endsection
