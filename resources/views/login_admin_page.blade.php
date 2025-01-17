<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('store/dashbord/style/login.css')}}">
    <style>
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: black; /* Semi-transparent background */
    padding: 10px 20px;
}
 
.navbar .title a {
    text-decoration: none;
    font-size: 40px;
    color: white;
}
</style>
</head>
<body>
<header>
        <nav class="navbar">
            <div class="title">
                <a href="{{ url('/') }}">CasaDerby</a>
            </div>
        </nav>
    </header>
    <section>
    <div class="login-box">
    <form action="{{route('login_admin')}}" method="POST">
        @csrf
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" name="email" required/>
                <label>Email</label>
                @error('email')
    <div id="emailHelp" class="form-text">{{$message}}</div>
    @enderror
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" name="password" required/>
                <label>Password</label>
                @error('password')
    <div id="emailHelp" class="form-text">{{$message}}</div>
    @enderror
            </div>
            <div class="remember-forgot">
                <label for="">
                    <input type="checkbox" >Remember me
                </label>
                <a href="">Forgot Password?</a>
            </div>
            <button type="submit">Login</button>
            <div class="register-link">
                <p>Don't have an account?
                    <a href="">Register</a>
                </p>
            </div>
        </form>
    </div>
</section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>

