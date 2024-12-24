@extends('layouts.dashboard');
@section('content')
    <div class="container">
        <h1>DANH SÁCH KHÁCH HÀNG</h1>
        {{--        <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sách</a>--}}
        <table class="table mt-3">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên khách hàng</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
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
                        {{--                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-success">Xem</a>--}}
                        {{--                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Sửa</a>--}}
                        {{--                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">--}}
                        {{--                            @csrf--}}
                        {{--                            @method('DELETE')--}}
                        {{--                            <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>--}}
                        {{--                        </form>--}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection;
