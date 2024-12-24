@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header">
            <h1 class="card-title h3 mb-0">Thông tin chi tiết khách hàng</h1>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3"><strong>Tên khách hàng:</strong></div>
                <div class="col-md-9">{{ $customer->name }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3"><strong>Địa chỉ:</strong></div>
                <div class="col-md-9">{{ $customer->address }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3"><strong>SĐT:</strong></div>
                <div class="col-md-9">{{ $customer->phone }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3"><strong>Email:</strong></div>
                <div class="col-md-9">{{ $customer->email }}</div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('customer.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Quay lại
            </a>
        </div>
    </div>
</div>
@endsection

