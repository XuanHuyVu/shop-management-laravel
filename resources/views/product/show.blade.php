@extends('layouts.dashboard')

@section('content')
    <h1 class="mb-4">Chi tiết Sản phẩm</h1>
    <p><strong>Tên sản phẩm:</strong> {{ $product->name }}</p>
    <p><strong>Mô tả sản phẩm:</strong> {{ $product->description }}</p>
    <p><strong>Giá tiền:</strong> {{ $product->price }}</p>
    <p><strong>Số lượng:</strong> {{ $product->quantity }}</p>
    <a href="{{ route('product.index') }}" class="btn btn-secondary">Quay lại</a>
@endsection

