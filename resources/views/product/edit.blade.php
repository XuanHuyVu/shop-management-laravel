@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Sửa sản phẩm</h1>
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name}}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả sản phẩm</label>
                <input type="text" class="form-control" name="description" value="{{ $product->description }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá tiền</label>
                <input type="number" class="form-control" name="price" value="{{ $product->price }}" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Số lượng</label>
                <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}"  required>
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
@endsection
