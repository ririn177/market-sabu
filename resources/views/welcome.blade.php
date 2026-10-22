<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Market Sabu</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                Market Sabu
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>

                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-light text-primary px-4"
                           href="/login">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-7">
                    <h1 class="display-4 fw-bold">
                        Selamat Datang di Market Sabu
                    </h1>

                    <p class="lead text-secondary">
                        Temukan berbagai produk pilihan dengan mudah
                        dan nyaman melalui halaman marketplace kami.
                    </p>

                    <a href="#" class="btn btn-primary btn-lg">
                        Lihat Produk
                    </a>
                </div>

                <div class="col-md-5 text-center mt-4 mt-md-0">
                    <div class="bg-primary text-white rounded p-5 shadow">
                        <h2>Market Sabu</h2>
                        <p class="mb-0">
                            Marketplace Sederhana
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Produk -->
    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">Produk Pilihan</h2>
                <p class="text-secondary">
                    Beberapa produk yang tersedia
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk 1</h5>
                            <p class="card-text text-secondary">
                                Deskripsi produk pertama.
                            </p>
                            <button class="btn btn-primary">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk 2</h5>
                            <p class="card-text text-secondary">
                                Deskripsi produk kedua.
                            </p>
                            <button class="btn btn-primary">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <h5 class="card-title">Produk 3</h5>
                            <p class="card-text text-secondary">
                                Deskripsi produk ketiga.
                            </p>
                            <button class="btn btn-primary">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0">
                &copy; 2026 Market Sabu. All Rights Reserved.
            </p>
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>