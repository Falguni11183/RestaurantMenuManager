<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Admin Login | Savoria</title>


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
                    rgba(3, 13, 10, 0.95)
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

            background: rgba(7, 25, 19, 0.93);

            border: 1px solid rgba(255,255,255,0.12);

            backdrop-filter: blur(18px);

            box-shadow:
                0 30px 90px rgba(0,0,0,0.55);
        }


        .admin-icon {

            width: 62px;

            height: 62px;

            margin: 0 auto 20px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background: rgba(77,221,145,0.12);

            border: 1px solid rgba(77,221,145,0.25);

            font-size: 27px;
        }


        h1 {

            text-align: center;

            font-family: Georgia, serif;

            font-size: 31px;

            font-weight: 500;

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

            color: #c8d4cf;

            font-size: 12px;

            margin-bottom: 8px;
        }


        input {

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


        .admin-note {

            margin-top: 20px;

            padding: 12px;

            border-radius: 8px;

            background: rgba(255,255,255,0.04);

            border: 1px solid rgba(255,255,255,0.08);

            text-align: center;

            color: #81958b;

            font-size: 11px;

            line-height: 1.6;
        }


        .home-link {

            display: block;

            text-align: center;

            margin-top: 18px;

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


    <div class="admin-icon">
        🔐
    </div>


    <h1>
        Admin Login
    </h1>


    <p class="subtitle">
        Access the Restaurant Management Dashboard
    </p>


    @if($errors->any())

        <div class="error-box">

            {{ $errors->first() }}

        </div>

    @endif


    <form
        action="{{ route('admin.login.store') }}"
        method="POST"
    >

        @csrf


        <div class="form-group">

            <label>
                Admin Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Enter admin email"
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
                placeholder="Enter admin password"
                required
            >


            @error('password')

                <div class="error">
                    {{ $message }}
                </div>

            @enderror

        </div>


        <button
            type="submit"
            class="login-btn"
        >
            Login as Admin
        </button>

    </form>


    <div class="admin-note">

        Admin access is restricted to authorized
        restaurant management users.

    </div>


    <a
        href="{{ route('home') }}"
        class="home-link"
    >
        ← Back to Homepage
    </a>


</div>


</body>

</html>