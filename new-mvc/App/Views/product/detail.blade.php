<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Chi tiết sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Chi tiết sản phẩm')
@section('content')

<div class="card" style="width: 18rem;">
    <img src="{{BASE_URL}}public/image/hinh-anh-canh-dong-lua.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tên sản phẩm</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

@endsection
