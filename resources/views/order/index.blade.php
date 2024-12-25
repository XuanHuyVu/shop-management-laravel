@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1>Danh sách đơn hàng</h1>
        <a href="{{ route('order.create') }}" class="btn btn-primary">Thêm đơn hàng</a>
        <table class="table mt-3">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên khách hàng</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Ngày đặt hàng</th>
                <th>Trạng thái</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->customer->name }}</td>
                    <td>
                        @foreach($order->Detail as $detail)
                            {{ $detail->product->name }} {{$detail->quantity}}
                        @endforeach
                    </td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('order.show', $order->id) }}" class="btn btn-success">Xem</a>
                        <a href="{{ route('order.edit', $order->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('order.destroy', $order->id) }}" method="POST" style="display:inline-block;">
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
