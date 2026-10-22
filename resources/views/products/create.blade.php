<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Market Sabu</title>

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
            width: 450px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #008cff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #006dcc;
        }

        .kembali {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #008cff;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="navbar">
        Market Sabu
    </div>

    <div class="container">

        <h2>Tambah Produk</h2>

        <form action="/products" method="POST">
            @csrf

            <label>Nama Produk</label>
            <input type="text" name="nama" placeholder="Masukkan nama produk" required>

            <label>Harga</label>
            <input type="number" name="harga" placeholder="Masukkan harga" required>

            <label>Stok</label>
            <input type="number" name="stok" placeholder="Masukkan stok" required>

            <button type="submit">Simpan Produk</button>
        </form>

        <a href="/products" class="kembali">Kembali ke Daftar Produk</a>

    </div>

</body>
</html>