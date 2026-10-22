<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - Market Sabu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .navbar {
            background-color: #008cff;
            color: white;
            padding: 18px 40px;
            font-size: 22px;
            font-weight: bold;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background-color: #008cff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .kembali {
            display: block;
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="navbar">
        Market Sabu
    </div>

    <div class="container">

        <h1>Edit Produk</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Nama Produk</label>
            <input
                type="text"
                name="nama"
                value="{{ $product->nama }}"
                required
            >

            <label>Harga</label>
            <input
                type="number"
                name="harga"
                value="{{ $product->harga }}"
                required
            >

            <label>Stok</label>
            <input
                type="number"
                name="stok"
                value="{{ $product->stok }}"
                required
            >

            <button type="submit">Simpan Perubahan</button>
        </form>

        <a class="kembali" href="{{ route('products.index') }}">
            Kembali ke Daftar Produk
        </a>

    </div>

</body>
</html>