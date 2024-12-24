@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chỉnh sửa khách hàng</h1>
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Tên:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $customer->name }}" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ:</label>
                <input type="text" name="address" id="address" class="form-control" value="{{ $customer->address }}" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại:</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ $customer->phone }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $customer->email }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection

