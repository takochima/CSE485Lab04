@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Chi tiết đặt hàng</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('order_details.create') }}" class="btn btn-primary mb-3">
    Thêm chi tiết đơn hàng mới</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID đơn hàng</th>
                <th>ID sản phẩm</th>
                <th>Số Lượng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderDetails as $orderDetail)
            <tr>
                <td>{{ $orderDetail->id }}</td>
                <td>{{ $orderDetail->order_id }}</td>
                <td>{{ $orderDetail->product_id }}</td>
                <td>{{ $orderDetail->quantity }}</td>
                <td>
                    <a href="{{ route('order_details.show', $orderDetail->id) }}" class="btn btn-info btn-sm">Xem</a>
                    <a href="{{ route('order_details.edit', $orderDetail->id) }}" class="btn btn-warning btn-sm">Sửa</a>

                    <form action="{{ route('order_details.destroy', $orderDetail->id) }}" method="POST" style="display: inline-block;">
                     @csrf
                     @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                    </form> 

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <nav aria-label="Pagination">
            <ul class="pagination">
                {{ $orderDetails->onEachSide(1)->links('pagination::bootstrap-4') }}
            </ul>
        </nav>
    </div>
</div>
@endsection
