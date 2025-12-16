<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelengkapan Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #9b9b9b;
            margin: 0;
            padding: 0;
        }

        /* WRAPPER */
        .page-wrapper {
            position: relative;
            max-width: 720px;
            margin: 60px auto;
            padding: 40px 30px;
        }

        /* LOGO WATERMARK */
        .bg-logo {
            position: absolute;
            inset: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0.18;
            pointer-events: none;
            z-index: 1;
        }

        .bg-logo img {
            width: 420px;
        }

        /* FORM CONTAINER */
        .container {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border-radius: 28px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.15);
        }

        .back {
            font-size: 20px;
            margin-bottom: 15px;
            cursor: pointer;
        }

        h2 {
            margin-bottom: 5px;
        }

        p {
            font-size: 14px;
            color: #666;
            margin-bottom: 30px;
        }

        label {
            font-size: 13px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 14px;
            border-radius: 12px;
            border: 1px solid rgba(0,0,0,0.15);
            margin-top: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            background: rgba(255,255,255,0.9);
        }

        button {
            width: 100%;
            padding: 16px;
            background: #8f9499;
            border: none;
            border-radius: 30px;
            color: #fff;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
        }

        .login-link {
            margin-top: 25px;
            text-align: center;
            font-size: 14px;
        }

        .login-link a {
            color: #3b82f6;
            text-decoration: none;
        }

        .error {
            color: red;
            font-size: 13px;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .page-wrapper {
                margin: 20px auto;
                padding: 20px;
            }

            .container {
                padding: 25px;
            }
        }
    </style>
</head>
<body>

<div class="page-wrapper">

    <!-- LOGO WATERMARK -->
    <div class="bg-logo">
        <img src="{{ asset('assets/img/logo.png') }}" alt="BengkelKita">
    </div>

    <!-- FORM -->
    <div class="container">
        <div class="back" onclick="history.back()">←</div>

        <h2>Kelengkapan Profil</h2>
        <p>Kami masih memerlukan beberapa rincian lagi.</p>

        {{-- ERROR VALIDASI --}}
        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label>Nama Panggilan</label>
            <input type="text" name="nama_panggilan" required>

            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" required>

            <label>No HP</label>
            <input type="text" name="no_hp" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Register</button>
        </form>

        <div class="login-link">
            Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>

</div>

</body>
</html>
