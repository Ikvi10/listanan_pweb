<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet"/>
</head>
<body>
    <nav class="navbar">
    </nav>
    <div class="login-container">
        <form action="{{ route('postlogin') }} " method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" class="submit-button" value="Login">
            </div>
        </form>
        <p>belum punya akun?</p>
        <a href="{{ route('regis') }}"><span>daftar</span></a>
    </div>
</body>
</html>
