<!DOCTYPE html>
<html>
<head>
    <title>Daftar - PPK Project</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #1f2937;
        }

        .navbar {
            background: #1f2937;
            color: white;
            padding: 18px 60px;
        }

        .navbar h2 {
            margin: 0;
        }

        .container {
            max-width: 400px;
            margin: 60px auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .card h1 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 15px;
        }

        .button {
            width: 100%;
            padding: 13px;
            background: #3b82f6;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
        }

        .button:hover {
            background: #2563eb;
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>PPK Project</h2>
    </div>

    <div class="container">

        <div class="card">

            <h1>Daftar</h1>

            @if ($errors->any())
                <div class="error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="/register" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nama</label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Masukkan nama"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Konfirmasi Password</label>

                    <input
                        type="password"
                        name="password_confirmation"
                        placeholder="Ulangi password"
                        required
                    >
                </div>

                <button type="submit" class="button">
                    Daftar
                </button>

            </form>

            <div class="login-link">
                Sudah punya akun?
                <a href="{{ route('login') }}">Login</a>
            </div>

        </div>

    </div>

</body>
</html>
