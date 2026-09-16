<!DOCTYPE html>
<html>
<head>
    <title>PPK Project</title>

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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
        }

        .navbar-menu {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            background: #3b82f6;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: bold;
        }

        .navbar a:hover {
            background: #2563eb;
        }

        .logout-button {
            color: white;
            background: #ef4444;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .logout-button:hover {
            background: #dc2626;
        }

        .container {
            max-width: 1000px;
            margin: 80px auto;
            padding: 20px;
            text-align: center;
        }

        .container h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .container p {
            font-size: 18px;
            color: #6b7280;
            margin-bottom: 35px;
        }

        .card {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .button {
            display: inline-block;
            background: #3b82f6;
            color: white;
            text-decoration: none;
            padding: 13px 25px;
            border-radius: 8px;
            font-weight: bold;
        }

        .button:hover {
            background: #2563eb;
        }
    </style>
</head>

<body>

    <div class="navbar">

        <h2>PPK Project</h2>

        <div class="navbar-menu">

            <a href="{{ route('users') }}">
                Data User
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit" class="logout-button">
                    Logout
                </button>
            </form>

        </div>

    </div>

    <div class="container">

        <div class="card">

            <h1>Selamat Datang</h1>

            <p>
                Selamat datang di aplikasi Project PPK.
            </p>

        </div>

    </div>

</body>
</html>
