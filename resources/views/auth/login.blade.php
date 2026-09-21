<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Login | Savoria</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;

            font-family: "Segoe UI", Arial, sans-serif;

            background:
                linear-gradient(
                    rgba(3, 13, 10, 0.86),
                    rgba(3, 13, 10, 0.94)
                ),
                url("https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=2000&q=90");

            background-size: cover;

            background-position: center;

            display: flex;

            align-items: center;

            justify-content: center;

            color: white;

            padding: 25px;
        }


        .login-container {
            width: 100%;

            max-width: 450px;

            padding: 48px;

            border-radius: 22px;

            background: rgba(7, 25, 19, 0.91);

            border: 1px solid rgba(255,255,255,0.12);

            backdrop-filter: blur(18px);

            box-shadow: 0 30px 90px rgba(0,0,0,0.55);
        }


        .logo {
            text-align: center;

            font-family: Georgia, serif;

            font-size: 34px;

            margin-bottom: 10px;
        }


        .logo span {
            color: #4ddd91;
        }


        .welcome {
            text-align: center;

            color: #83968d;

            font-size: 13px;

            margin-bottom: 35px;
        }


        h1 {
            text-align: center;

            font-family: Georgia, serif;

            font-size: 30px;

            font-weight: 500;

            margin-bottom: 8px;
        }


        .subtitle {
            text-align: center;

            color: #81958b;

            font-size: 13px;

            margin-bottom: 28px;
        }


        .form-group {
            margin-bottom: 18px;
        }


        label {
            display: block;

            color: #c8d4cf;

            font-size: 12px;

            margin-bottom: 8px;
        }


        input[type="email"],
        input[type="password"] {
            width: 100%;

            padding: 14px 15px;

            border-radius: 8px;

            border: 1px solid #29453a;

            outline: none;

            background: #0a1b15;

            color: white;

            font-size: 14px;

            transition: 0.3s;
        }


        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #43c982;

            box-shadow: 0 0 0 3px rgba(67,201,130,0.08);
        }


        input::placeholder {
            color: #63766e;
        }


        .remember {
            display: flex;

            align-items: center;

            gap: 8px;

            margin: 5px 0 20px;

            color: #81958b;

            font-size: 12px;
        }


        .remember input {
            width: auto;

            accent-color: #1f9d61;
        }


        .login-btn {
            width: 100%;

            padding: 14px;

            border: none;

            border-radius: 8px;

            background: #1f9d61;

            color: white;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;

            transition: 0.3s;
        }


        .login-btn:hover {
            background: #16834f;

            transform: translateY(-1px);
        }


        .error {
            color: #ff8e8e;

            font-size: 11px;

            margin-top: 6px;
        }


        .error-box {
            background: rgba(255,80,80,0.08);

            border: 1px solid rgba(255,100,100,0.2);

            padding: 12px;

            border-radius: 8px;

            margin-bottom: 18px;

            color: #ff9c9c;

            font-size: 12px;
        }


        .register-text {
            text-align: center;

            margin-top: 24px;

            color: #788c83;

            font-size: 13px;
        }


        .register-text a {
            color: #55df96;

            text-decoration: none;

            font-weight: 600;
        }


        .home-link {
            display: block;

            text-align: center;

            margin-top: 17px;

            color: #71857b;

            font-size: 12px;

            text-decoration: none;
        }


        .home-link:hover {
            color: #55df96;
        }


        @media(max-width: 500px) {

            body {
                padding: 15px;
            }

            .login-container {
                padding: 35px 25px;
            }

        }

    </style>

</head>


<body>


<div class="login-container">


    <div class="logo">
        Savor<span>ia</span>
    </div>


    <div class="welcome">
        Welcome back
    </div>


    <h1>
        User Login
    </h1>


    <p class="subtitle">
        Login to explore the Savoria menu
    </p>


    @if($errors->any())

        <div class="error-box">
            {{ $errors->first() }}
        </div>

    @endif


    <form
        action="{{ route('login.store') }}"
        method="POST"
    >

        @csrf


        <div class="form-group">

            <label>
                Email Address
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Enter your email"
                required
            >

            @error('email')

                <div class="error">
                    {{ $message }}
                </div>

            @enderror

        </div>


        <div class="form-group">

            <label>
                Password
            </label>

            <input
                type="password"
                name="password"
                placeholder="Enter your password"
                required
            >

            @error('password')

                <div class="error">
                    {{ $message }}
                </div>

            @enderror

        </div>


        <label class="remember">

            <input
                type="checkbox"
                name="remember"
                value="1"
            >

            Remember me

        </label>


        <button
            type="submit"
            class="login-btn"
        >
            Login
        </button>

    </form>


    <div class="register-text">

        Don't have an account?

        <a href="{{ route('register') }}">
            Create Account
        </a>

    </div>


    <a
        href="{{ route('home') }}"
        class="home-link"
    >
        ← Back to Savoria
    </a>


</div>


</body>

</html>