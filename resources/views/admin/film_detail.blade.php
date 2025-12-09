@extends('admin.layouts.master')
@section('title', 'Detail Film')
@section('content')
    <div class="admin-container">
        <h2>Edit Film</h2>
        <form action="{{ route('film.update', $film->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $film->title }}" required>
            <input type="number" name="price" value="{{ $film->price }}" required>
            <input type="file" name="image" value="{{ $film->image }}">
            <img src="{{ asset('storage' . '/' . $film->image) }}" style="width:50px; height:50;" />
            <button type="submit" name="update">Update Film</button>
        </form>
        <a href="film.php" class="action-btn">Kembali</a>
    </div>
@endsection
