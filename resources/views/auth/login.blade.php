<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BengkelKita - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins', sans-serif;}
        body { background:#fff; display:flex; justify-content:center; align-items:center; height:100vh; }
        .container { max-width:400px; width:90%; padding:30px; text-align:center; }
        .logo img { width:120px; margin-bottom:30px; }
        h2 { font-size:24px; font-weight:700; margin-bottom:8px; }
        p { font-size:14px; color:#555; margin-bottom:25px; }
        input[type="email"], input[type="password"] {
            width:100%; padding:12px 15px; margin-bottom:15px; border-radius:10px; border:1px solid #ddd; font-size:14px;
        }
        .password-container { position:relative; }
        .toggle-pass {
            position:absolute; right:10px; top:50%; transform:translateY(-50%); cursor:pointer; font-size:12px; color:#888;
        }
        .checkbox-container { display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; font-size:13px; color:#555; }
        .checkbox-container input { margin-right:5px; }
        button { width:100%; padding:14px; background:#9fa4aa; border:none; border-radius:25px; color:#fff; font-size:16px; cursor:pointer; margin-bottom:20px; }
        .or-line { display:flex; align-items:center; margin:15px 0; color:#888; font-size:13px; }
        .or-line::before, .or-line::after { content:''; flex:1; height:1px; background:#ddd; }
        .or-line span { margin:0 10px; }
        .social-btn { display:flex; flex-direction:column; gap:10px; }
        .social-btn button { display:flex; align-items:center; justify-content:center; gap:8px; padding:12px; border-radius:10px; border:1px solid #ddd; font-size:14px; cursor:pointer; background:#fff; }
        .social-btn button.google { color:#000; }
        .social-btn button.facebook { color:#1877f2; }
    </style>
</head>
<body>

<div class="container">
    <div class="logo">
        <img src="{{ asset('assets/img/logo.png') }}" alt="BengkelKita">
    </div>

    <h2>Sign in to your Account</h2>
    <p>Enter your email and password to log in</p>

    <form method="POST" action="#">
        @csrf
        <input type="email" placeholder="Email" required>
        <div class="password-container">
            <input type="password" placeholder="Password" id="password" required>
            <span class="toggle-pass" onclick="togglePassword()">Show</span>
        </div>

        <div class="checkbox-container">
            <label><input type="checkbox"> Remember me</label>
            <a href="#">Forgot Password ?</a>
        </div>

        <button type="submit">Log In</button>
    </form>

    <div class="or-line"><span>Or</span></div>

    <div class="social-btn">
        <button class="google">Continue with Google</button>
        <button class="facebook">Continue with Facebook</button>
    </div>
</div>

<script>
function togglePassword(){
    const pass = document.getElementById('password');
    const toggle = document.querySelector('.toggle-pass');
    if(pass.type === 'password'){
        pass.type = 'text';
        toggle.textContent = 'Hide';
    } else {
        pass.type = 'password';
        toggle.textContent = 'Show';
    }
}
</script>

</body>
</html>