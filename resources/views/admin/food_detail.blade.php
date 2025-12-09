@extends('admin.layouts.master')
@section('title', 'Detail Makanan')
@section('content')
    <div class="admin-container">
        <h2>Edit Makanan</h2>
        <form action="{{ route('food.update', $food->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $food->name }}" required>
            <input type="number" name="price" value="{{ $food->price }}" required>
            <input type="file" name="image" value="{{ $food->image }}">
            <button type="submit" name="update">Update Item</button>
        </form>
        <a href="food.php" class="action-btn">Kembali</a>
    </div>
@endsection
