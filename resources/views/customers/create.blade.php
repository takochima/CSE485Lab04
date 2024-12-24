@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Thêm khách hàng mới</h1>
        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ:</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Số điện thoại:</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $customer->email ?? '') }}" required>
            </div>
            <button type="submit" class="btn btn-success">Thêm</button>
        </form>
    </div>
@endsection

