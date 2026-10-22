<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Produk - Market Sabu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
        }

        .navbar {
            background-color: #008cff;
            color: white;
            padding: 18px 40px;
            font-size: 22px;
            font-weight: bold;
        }

        .container {
            width: 90%;
            margin: 40px auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .tambah {
            display: inline-block;
            background-color: #008cff;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            background-color: white;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #008cff;
            color: white;
        }

        .edit {
            background-color: orange;
            color: black;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }

        .hapus {
            background-color: red;
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit:hover {
            background-color: #e69500;
        }

        .hapus:hover {
            background-color: #cc0000;
        }
    </style>
</head>

<body>

    <div class="navbar">
        Market Sabu
    </div>

    <div class="container">

        <h1>Daftar Produk</h1>

        <a href="{{ route('products.create') }}" class="tambah">
            + Tambah Produk
        </a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($products as $product)

                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            {{ $product->nama }}
                        </td>

                        <td>
                            Rp{{ number_format($product->harga, 0, ',', '.') }}
                        </td>

                        <td>
                            {{ $product->stok }}
                        </td>

                        <td>

                            <a href="{{ route('products.edit', $product->id) }}"
                               class="edit">
                                Edit
                            </a>

                            <form action="{{ route('products.destroy', $product->id) }}"
                                  method="POST"
                                  style="display: inline;">

                                @csrf

                                @method('DELETE')

                                <button type="submit"
                                        class="hapus"
                                        onclick="return confirm('Apakah yakin ingin menghapus produk ini?')">
                                    Hapus
                                </button>

                            </form>

                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="5">
                            Belum ada produk.
                        </td>
                    </tr>

                @endforelse

            </tbody>
        </table>

    </div>

</body>
</html>