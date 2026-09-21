<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account</title>

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
                    rgba(3, 13, 10, 0.88),
                    rgba(3, 13, 10, 0.94)
                ),
                url("https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=2000&q=90");

            background-size: cover;

            background-position: center;

            display: flex;

            align-items: center;

            justify-content: center;

            color: white;

            padding: 30px;
        }


        .container {
            width: 100%;

            max-width: 470px;

            padding: 48px;

            background: rgba(7, 25, 19, 0.92);

            border: 1px solid rgba(255,255,255,0.12);

            border-radius: 22px;

            backdrop-filter: blur(18px);

            box-shadow: 0 30px 90px rgba(0,0,0,0.55);
        }


        h1 {
            font-family: Georgia, serif;

            font-size: 34px;

            font-weight: 500;

            text-align: center;

            margin-bottom: 8px;
        }


        .subtitle {
            text-align: center;

            color: #81958b;

            font-size: 13px;

            margin-bottom: 30px;
        }


        .form-group {
            margin-bottom: 18px;
        }


        label {
            display: block;

            font-size: 12px;

            color: #c7d3ce;

            margin-bottom: 8px;
        }


        input[type="text"],
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


        input:focus {

            border-color: #43c982;

            box-shadow:
                0 0 0 3px rgba(67,201,130,0.08);
        }


        input::placeholder {
            color: #63766e;
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


        .success-box {

            background: rgba(67,201,130,0.10);

            border: 1px solid rgba(67,201,130,0.25);

            padding: 12px;

            border-radius: 8px;

            margin-bottom: 18px;

            color: #65e49d;

            font-size: 12px;

        }


        .register-btn {

            width: 100%;

            padding: 14px;

            margin-top: 8px;

            border: none;

            border-radius: 8px;

            background: #1f9d61;

            color: white;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;

            transition: 0.3s;
        }


        .register-btn:hover {

            background: #16834f;

            transform: translateY(-1px);
        }


        .login-text {

            text-align: center;

            margin-top: 22px;

            color: #788c83;

            font-size: 13px;
        }


        .login-text a {

            color: #55df96;

            text-decoration: none;

            font-weight: 600;
        }


        .login-text a:hover {
            text-decoration: underline;
        }


        .home-link {

            display: block;

            text-align: center;

            margin-top: 15px;

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

            .container {
                padding: 35px 25px;
            }

        }

    </style>

</head>


<body>


<div class="container">


    <h1>
        Create Account
    </h1>


    <p class="subtitle">
        Register your account to continue
    </p>


    @if($errors->any())

        <div class="error-box">

            Please fix the errors below.

        </div>

    @endif


    <form
        action="{{ route('register.store') }}"
        method="POST"
    >

        @csrf


        <!-- FULL NAME -->

        <div class="form-group">

            <label>
                Full Name
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                placeholder="Enter your full name"
                required
            >

            @error('name')

                <div class="error">
                    {{ $message }}
                </div>

            @enderror

        </div>


        <!-- EMAIL -->

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


        <!-- PASSWORD -->

        <div class="form-group">

            <label>
                Password
            </label>

            <input
                type="password"
                name="password"
                placeholder="Create a password"
                required
            >

            @error('password')

                <div class="error">
                    {{ $message }}
                </div>

            @enderror

        </div>


        <!-- CONFIRM PASSWORD -->

        <div class="form-group">

            <label>
                Confirm Password
            </label>

            <input
                type="password"
                name="password_confirmation"
                placeholder="Confirm your password"
                required
            >

        </div>


        <!-- REGISTER BUTTON -->

        <button
            type="submit"
            class="register-btn"
        >
            Create Account
        </button>


    </form>


    <!-- LOGIN LINK -->

    <div class="login-text">

        Already have an account?

        <a href="{{ route('login') }}">
            Login
        </a>

    </div>


    <!-- HOME LINK -->

    <a
        href="{{ route('home') }}"
        class="home-link"
    >
        ← Back to Homepage
    </a>


</div>


</body>

</html>