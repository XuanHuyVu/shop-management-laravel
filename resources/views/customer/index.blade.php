@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Danh sách khách hàng</h1>
        <a href="{{ route('customer.create') }}" class="btn btn-primary">Thêm khách hàng</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>SĐT</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>
                        <a href="{{ route('customer.show', $customer->id) }}" class="btn btn-success">Xem</a>
                        <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
