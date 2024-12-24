@extends('layouts.dashboard');
@section('content')
    <div class="container">
        <h1>DANH SÁCH SẢN PHẨM</h1>
{{--        <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sách</a>--}}
        <table class="table mt-3">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên sản phẩm</th>
                <th>Mô tả sản phẩm</th>
                <th>Giá tiền</th>
                <th>Số lượng</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
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
