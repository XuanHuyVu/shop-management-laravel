@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Thêm sản phẩm</h1>
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả sản phẩm</label>
                <input type="text" class="form-control" name="description" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Giá tiền</label>
                <input type="number" class="form-control" name="price" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Số lượng</label>
                <input type="number" class="form-control" name="quantity" required>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
@endsection
