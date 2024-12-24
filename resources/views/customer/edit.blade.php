@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Sửa thông tin khách hàng</h1>
        <form action="{{ route('customer.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Tên khách hàng</label>
                <input type="text" class="form-control" name="name" value="{{ $customer->name}}" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" name="address" value="{{ $customer->address }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="phone" class="form-control" name="phone" value="{{ $customer->phone }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $customer->email }}"  required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a class="btn btn-danger" href="{{ route('customer.index')}}">Hủy</a>
        </form>
    </div>
@endsection
