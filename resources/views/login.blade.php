<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Market Sabu</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f2f5;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .login-title {
            font-weight: bold;
            color: #0d6efd;
        }

        .btn-login {
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container login-container">
    <div class="card login-card p-4">

        <div class="text-center mb-4">
            <h3 class="login-title">Login</h3>
            <p class="text-muted">Silakan masuk ke akun Anda</p>
        </div>

        <form action="#" method="POST">

            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email"
                       class="form-control"
                       id="email"
                       name="email"
                       placeholder="Masukkan email"
                       required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password"
                       class="form-control"
                       id="password"
                       name="password"
                       placeholder="Masukkan password"
                       required>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">
                    Ingat saya
                </label>
            </div>

            <button type="submit" class="btn btn-primary btn-login">
                Login
            </button>

        </form>

        <div class="text-center mt-3">
            <small class="text-muted">
                Belum memiliki akun?
                <a href="#" class="text-decoration-none">Daftar sekarang</a>
            </small>
        </div>

    </div>
</div>

</body>
</html>