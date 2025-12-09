@extends('admin.layouts.master')
@section('title', 'Manajemen Minuman')
@section('content')
    <div class="admin-container">
        <h2>Manajemen Minuman</h2>

        <form action="{{ route('drink.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" placeholder="Nama Minuman" required>
            <input type="number" name="price" placeholder="Harga" required>
            <input type="file" name="image" required>
            <button type="submit" name="add">Tambah Minuman</button>
        </form>

        <table>
            <tr>
                <th>ID</th>
                <th>Nama Minuman</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            @foreach ($drink as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td><img src="{{ asset('storage' . '/' . $item->image) }}" width="50"></td>
                    <td>
                        <div style="display: flex; gap:10px; justify-content: center">
                            <form action="{{ route('drink.show', $item->id) }}">
                                <button type="submit" class="action-btn edit">Edit</button>
                            </form>
                            <form action="{{ route('drink.destroy', $item->id) }}" method="POST"
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
