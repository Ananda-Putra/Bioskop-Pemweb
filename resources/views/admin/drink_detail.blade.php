@extends('admin.layouts.master')
@section('title', 'Detail drink')
@section('content')
    <div class="admin-container">
        <h2>Edit drink</h2>
        <form action="{{ route('drink.update', $drink->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" name="name" value="{{ $drink->name }}" required>
            <input type="number" name="price" value="{{ $drink->price }}" required>
            <input type="file" name="image" value="{{ $drink->image }}">
            <img src="{{ asset('storage' . '/' . $drink->image) }}" style="width:50px; height:50;" />
            <button type="submit" name="update">Update drink</button>
        </form>
        <a href="drink.php" class="action-btn">Kembali</a>
    </div>
@endsection
