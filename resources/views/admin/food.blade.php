@extends('admin.layouts.master')
@section('title', 'Manajemen Makanan')
@section('content')
    <div class="admin-container">
        <h2>Manajemen Makanan</h2>

        <!-- Form tambah item -->
        <form action="{{ route('food.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" placeholder="Nama Item" required>
            <input type="number" name="price" placeholder="Harga" required>
            <input type="file" name="image" required>
            <button type="submit" name="add">Tambah Item</button>
        </form>

        <!-- Tabel data -->
        <table>
            <tr>
                <th>No</th>
                <th>Nama Item</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            @foreach ($food as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        <img src="{{ asset('storage' . '/' . $item->image) }}" width="50" alt="Gambar Item">
                    </td>
                    <td>
                        <div style="display: flex; gap:10px; justify-content: center">
                            <form action="{{ route('food.show', $item->id) }}">
                                <button type="submit" class="action-btn edit">Edit</button>
                            </form>
                            <form action="{{ route('food.destroy', $item->id) }}" method="POST"
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
