@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chi tiết khách hàng</h1>
        <table class="table table-bordered">
            <tr>
                <th>Tên khách hàng</th>
                <td>{{ $customer->name }}</td>
            </tr>
            <tr>
                <th>Địa chỉ</th>
                <td>{{ $customer->address }}</td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td>{{ $customer->phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $customer->email }}</td>
            </tr>
        </table>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>
@endsection
