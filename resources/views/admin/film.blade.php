@extends('admin.layouts.master')
@section('title', 'Manajemen Film')
@section('content')
    <div class="admin-container">
        <h2>Manajemen Film</h2>

        <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" placeholder="Nama Film" required>
            <input type="number" name="price" placeholder="Harga Tiket" required>
            <input type="file" name="image" required>
            <button type="submit" name="add">Tambah Film</button>
        </form>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Film</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            @foreach ($film as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->price }}</td>
                    <td><img src="{{ asset('storage' . '/' . $item->image) }}" width="50"></td>
                    <td>
                        <div style="display: flex; gap:10px; justify-content: center">
                            <form action="{{ route('film.detail', $item->id) }}">
                                @csrf
                                <button class="action-btn edit">Edit</button>
                            </form>

                            <form action="{{ route('film.destroy', $item->id) }}" method="POST"
                                id="deleteForm{{ $item->id }}">
                                @csrf
                                @method('DELETE')

                                <button type="button" class="action-btn"
                                    onclick="confirmDelete(event, 'deleteForm{{ $item->id }}')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        <a href="{{ route('dashboard') }}" class="action-btn">Kembali ke Dashboard</a>
    </div>
@endsection
