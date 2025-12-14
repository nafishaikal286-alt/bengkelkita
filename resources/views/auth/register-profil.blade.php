<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kelengkapan Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body{font-family:'Poppins',sans-serif;background:#fff;margin:0;padding:0;}
        .container{max-width:420px;margin:auto;padding:25px;}
        .back{font-size:20px;margin-bottom:15px;cursor:pointer;}
        h2{margin-bottom:5px;}
        p{font-size:14px;color:#777;margin-bottom:25px;}
        label{font-size:13px;font-weight:500;}
        input,select{width:100%;padding:13px;border-radius:10px;border:1px solid #ddd;margin-top:8px;margin-bottom:18px;font-size:14px;}
        .phone-group{display:flex;gap:10px;}
        .phone-group select{width:30%;}
        .phone-group input{width:70%;}
        button{width:100%;padding:14px;background:#9fa4aa;border:none;border-radius:25px;color:#fff;font-size:16px;margin-top:10px;cursor:pointer;}
        .login-link{margin-top:20px;text-align:center;font-size:14px;}
        .login-link a{color:#3b82f6;text-decoration:none;}
        .error{color:red;font-size:13px;margin-bottom:10px;}
    </style>
</head>
<body>

<div class="container">
    <div class="back" onclick="history.back()">←</div>

    <h2>Kelengkapan profil</h2>
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

</body>
</html>
