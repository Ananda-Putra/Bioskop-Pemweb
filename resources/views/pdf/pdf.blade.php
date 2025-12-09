<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Riwayat Pesanan</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        h2 {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px;
            text-align: left;
        }
    </style>
</head>

<body>

    <h1>Riwayat Pesanan Anda</h1>

    <h2>Film</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $o)
                <tr>
                    <td>{{ $o->title }}</td>
                    <td>{{ $o->amount }}</td>
                    <td>Rp{{ number_format($o->total_price, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Makanan</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foodOrders as $o)
                <tr>
                    <td>{{ $o->name }}</td>
                    <td>{{ $o->amount }}</td>
                    <td>Rp{{ number_format($o->total_price, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Minuman</h2>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drinkOrders as $o)
                <tr>
                    <td>{{ $o->name }}</td>
                    <td>{{ $o->amount }}</td>
                    <td>Rp{{ number_format($o->total_price, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
