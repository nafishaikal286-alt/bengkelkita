<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>BengkelKita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            background-color: #9b9b9b; /* abu-abu seperti gambar */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .welcome-container {
            width: 100%;
            max-width: 420px;
            text-align: center;
            padding: 30px 20px;
        }

        .logo img {
            width: 230px;
            margin-bottom: 50px;
        }

        .btn-register {
            width: 100%;
            padding: 14px;
            background-color: #bfc4ca;
            border-radius: 25px;
            border: none;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-register:hover {
            background-color: #aeb4bb;
        }

        .or-line {
            display: flex;
            align-items: center;
            margin: 30px 0 20px;
            color: #fff;
            font-size: 14px;
        }

        .or-line::before,
        .or-line::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #fff;
            opacity: 0.6;
        }

        .or-line span {
            margin: 0 12px;
        }

        .skip {
            color: #fff;
            font-size: 15px;
            text-decoration: none;
            opacity: 0.9;
        }

        .skip:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="welcome-container">
        <div class="logo">
            {{-- GANTI path logo sesuai folder kamu --}}
            <img src="{{ asset('assets/img/bengkelkita-logo.jpeg') }}" alt="BengkelKita">
        </div>
        
         
        <a href="{{ route('register.profil') }}">
            <button class="btn-register">REGISTER</button>
        </a>

        <div class="or-line">
            <span>OR</span>
        </div>

        <a href="{{ route('home') }}" class="skip">
            Skip &amp; Explore
        </a>
    </div>

</body>
</html>
