<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Savoria | Restaurant</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #07110f;
            color: #ffffff;
        }

        html {
            scroll-behavior: smooth;
        }


        /* ================= NAVBAR ================= */

        .navbar {
            position: absolute;
            top: 0;
            left: 0;

            width: 100%;
            height: 86px;

            padding: 0 6%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            z-index: 20;

            background: rgba(3, 12, 10, 0.48);

            backdrop-filter: blur(14px);

            border-bottom: 1px solid rgba(255,255,255,0.08);
        }


        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }


        .brand-icon {
            width: 43px;
            height: 43px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #1f9d61;

            font-size: 20px;
        }


        .brand-name {
            font-family: Georgia, serif;

            font-size: 24px;

            letter-spacing: 0.5px;
        }


        .brand-name span {
            color: #4ddd91;
        }


        .nav {
            display: flex;
            align-items: center;
            gap: 8px;
        }


        .nav a {
            color: #e4eee9;

            text-decoration: none;

            padding: 11px 17px;

            font-size: 14px;

            border-radius: 7px;

            transition: 0.3s;
        }


        .nav a:hover {
            background: rgba(255,255,255,0.08);
        }


        .nav-login {
            border: 1px solid rgba(255,255,255,0.22);
        }


        .nav-admin {
            background: #1f9d61;
        }


        .nav-admin:hover {
            background: #16834f !important;
        }


        /* ================= HERO ================= */

        .hero {

            min-height: 100vh;

            position: relative;

            display: flex;

            align-items: center;

            overflow: hidden;

            background:
                linear-gradient(
                    90deg,
                    rgba(3,11,9,0.97) 0%,
                    rgba(3,11,9,0.86) 34%,
                    rgba(3,11,9,0.55) 62%,
                    rgba(3,11,9,0.78) 100%
                ),
                url("https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=2000&q=90");

            background-size: cover;

            background-position: center;

        }


        .hero::after {

            content: "";

            position: absolute;

            inset: 0;

            background:
                linear-gradient(
                    180deg,
                    rgba(0,0,0,0.35),
                    transparent 30%,
                    rgba(0,0,0,0.55)
                );

            pointer-events: none;

        }


        .hero-content {

            position: relative;

            z-index: 5;

            width: 100%;

            padding: 130px 7% 70px;

        }


        .welcome {

            display: flex;

            align-items: center;

            gap: 12px;

            color: #54dd94;

            font-size: 13px;

            letter-spacing: 3px;

            text-transform: uppercase;

            font-weight: 600;

            margin-bottom: 22px;

        }


        .welcome-line {

            width: 40px;

            height: 1px;

            background: #54dd94;

        }


        .hero h1 {

            font-family: Georgia, "Times New Roman", serif;

            font-size: clamp(52px, 7vw, 94px);

            font-weight: 500;

            line-height: 0.98;

            max-width: 750px;

            letter-spacing: -2px;

        }


        .hero h1 span {

            color: #55df96;

            font-style: italic;

        }


        .hero-description {

            max-width: 560px;

            margin-top: 27px;

            color: #c0cdc8;

            font-size: 16px;

            line-height: 1.8;

        }


        .hero-buttons {

            display: flex;

            gap: 14px;

            margin-top: 35px;

        }


        .primary-btn {

            text-decoration: none;

            background: #1f9d61;

            color: white;

            padding: 15px 27px;

            border-radius: 7px;

            font-size: 14px;

            font-weight: 600;

            transition: 0.3s;

        }


        .primary-btn:hover {

            background: #16834f;

            transform: translateY(-2px);

        }


        .secondary-btn {

            text-decoration: none;

            color: white;

            padding: 14px 27px;

            border-radius: 7px;

            border: 1px solid rgba(255,255,255,0.30);

            background: rgba(255,255,255,0.05);

            backdrop-filter: blur(8px);

            font-size: 14px;

            font-weight: 600;

            transition: 0.3s;

        }


        .secondary-btn:hover {

            background: rgba(255,255,255,0.12);

        }


        /* ================= HERO BOTTOM ================= */

        .hero-bottom {

            position: absolute;

            z-index: 7;

            bottom: 35px;

            left: 7%;

            right: 7%;

            display: flex;

            align-items: flex-end;

            justify-content: space-between;

        }


        .opening {

            display: flex;

            align-items: center;

            gap: 13px;

        }


        .open-dot {

            width: 9px;

            height: 9px;

            border-radius: 50%;

            background: #45d98b;

            box-shadow: 0 0 12px #45d98b;

        }


        .opening strong {

            font-size: 13px;

        }


        .opening small {

            display: block;

            color: #9eafa8;

            margin-top: 3px;

        }


        .scroll {

            color: #91a39c;

            font-size: 11px;

            letter-spacing: 2px;

            text-transform: uppercase;

            writing-mode: vertical-rl;

        }


        /* ================= FLOATING DISH CARD ================= */

        .dish-card {

            position: absolute;

            z-index: 8;

            right: 7%;

            bottom: 95px;

            width: 310px;

            padding: 12px;

            border-radius: 18px;

            background: rgba(7,22,17,0.78);

            border: 1px solid rgba(255,255,255,0.16);

            backdrop-filter: blur(18px);

            box-shadow: 0 25px 70px rgba(0,0,0,0.5);

        }


        .dish-image {

            height: 190px;

            border-radius: 12px;

            background:
                url("https://images.unsplash.com/photo-1601050690597-df0568f70950?auto=format&fit=crop&w=900&q=90");

            background-size: cover;

            background-position: center;

            position: relative;

        }


        .special-badge {

            position: absolute;

            top: 13px;

            left: 13px;

            padding: 7px 11px;

            border-radius: 20px;

            background: rgba(5,17,12,0.86);

            color: #58df96;

            font-size: 10px;

            font-weight: 700;

            letter-spacing: 1px;

        }


        .dish-info {

            padding: 15px 5px 5px;

        }


        .dish-info h3 {

            font-family: Georgia, serif;

            font-size: 21px;

            margin-bottom: 6px;

        }


        .dish-info p {

            color: #91a49b;

            font-size: 12px;

            line-height: 1.6;

        }


        .dish-bottom {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-top: 13px;

        }


        .dish-price {

            color: #55df96;

            font-weight: 700;

        }


        .dish-rating {

            color: #d5dfda;

            font-size: 12px;

        }


        /* ================= INTRO ================= */


        .intro {

            background: #07130f;

            padding: 95px 7%;

            text-align: center;

        }


        .section-small {

            color: #4ddd91;

            font-size: 12px;

            text-transform: uppercase;

            letter-spacing: 3px;

            margin-bottom: 15px;

        }


        .intro h2 {

            font-family: Georgia, serif;

            font-size: 43px;

            font-weight: 500;

            margin-bottom: 20px;

        }


        .intro h2 span {

            color: #4ddd91;

            font-style: italic;

        }


        .intro p {

            max-width: 680px;

            margin: auto;

            color: #91a59c;

            line-height: 1.9;

            font-size: 15px;

        }


        /* ================= FEATURES ================= */


        .features {

            background: #07130f;

            padding: 0 7% 95px;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 22px;

        }


        .feature {

            padding: 30px;

            border-radius: 14px;

            background: #0a1b15;

            border: 1px solid #17352a;

            transition: 0.3s;

        }


        .feature:hover {

            transform: translateY(-6px);

            border-color: #2c7654;

        }


        .feature-number {

            color: #3c936b;

            font-size: 12px;

            margin-bottom: 20px;

        }


        .feature-icon {

            font-size: 27px;

            margin-bottom: 15px;

        }


        .feature h3 {

            font-family: Georgia, serif;

            font-size: 21px;

            margin-bottom: 10px;

        }


        .feature p {

            color: #849990;

            font-size: 13px;

            line-height: 1.7;

        }


        /* ================= FOOTER ================= */


        footer {

            background: #030a07;

            border-top: 1px solid #13271f;

            padding: 28px 7%;

            display: flex;

            justify-content: space-between;

            align-items: center;

            color: #71847b;

            font-size: 12px;

        }


        footer strong {

            color: #b5c5be;

        }


        /* ================= RESPONSIVE ================= */


        @media(max-width: 1050px) {

            .dish-card {

                right: 5%;

                width: 280px;

            }

        }


        @media(max-width: 850px) {

            .navbar {

                position: relative;

                height: auto;

                padding: 17px 5%;

                flex-direction: column;

                gap: 15px;

            }


            .hero {

                min-height: 900px;

                background-position: center;

            }


            .hero-content {

                padding: 80px 5% 300px;

            }


            .dish-card {

                left: 5%;

                right: auto;

                bottom: 80px;

                width: 300px;

            }


            .hero-bottom {

                left: 5%;

                right: 5%;

                bottom: 25px;

            }


            .features {

                grid-template-columns: 1fr;

            }

        }


        @media(max-width: 550px) {

            .nav {

                flex-wrap: wrap;

                justify-content: center;

            }


            .hero h1 {

                font-size: 52px;

            }


            .hero-buttons {

                flex-direction: column;

                align-items: stretch;

            }


            .primary-btn,

            .secondary-btn {

                text-align: center;

            }


            .intro h2 {

                font-size: 34px;

            }


            footer {

                flex-direction: column;

                gap: 10px;

            }

        }

    </style>

</head>


<body>


<!-- ================= NAVBAR ================= -->


<nav class="navbar">


    <div class="brand">


        <div class="brand-icon">
            🍽️
        </div>


        <div class="brand-name">
            Savor<span>ia</span>
        </div>


    </div>


    <div class="nav">


        <a href="#about">
            About
        </a>


        <a
            href="{{ route('login') }}"
            class="nav-login"
        >
            User Login
        </a>


        <!-- ADMIN LOGIN LINK -->

        <a
            href="{{ route('admin.login') }}"
            class="nav-admin"
        >
            Admin Login
        </a>


    </div>


</nav>


<!-- ================= HERO ================= -->


<section class="hero">


    <div class="hero-content">


        <div class="welcome">


            <span class="welcome-line"></span>


            Welcome to Savoria


        </div>


        <h1>


            Where Every Bite

            <br>


            <span>Tells a Story.</span>


        </h1>


        <p class="hero-description">


            A place for beautiful food, warm moments and

            unforgettable flavours. Discover our carefully

            crafted menu and let your next meal begin here.


        </p>


        <div class="hero-buttons">


            <a
                href="{{ route('login') }}"
                class="primary-btn"
            >
                Explore Our Menu →
            </a>


            <a
                href="#about"
                class="secondary-btn"
            >
                Discover Savoria
            </a>


        </div>


    </div>


    <div class="dish-card">


        <div class="dish-image">


            <div class="special-badge">
                CHEF'S SPECIAL
            </div>


        </div>


        <div class="dish-info">


            <h3>
                Signature Dish
            </h3>


            <p>
                Fresh ingredients, rich flavours and
                a recipe crafted with care.
            </p>


            <div class="dish-bottom">


                <span class="dish-price">
                    Today's Special
                </span>


                <span class="dish-rating">
                    ★ 4.8
                </span>


            </div>


        </div>


    </div>


    <div class="hero-bottom">


        <div class="opening">


            <div class="open-dot"></div>


            <div>


                <strong>
                    Open Today
                </strong>


                <small>
                    11:00 AM — 11:00 PM
                </small>


            </div>


        </div>


        <div class="scroll">
            Scroll to explore
        </div>


    </div>


</section>


<!-- ================= INTRO ================= -->


<section class="intro" id="about">


    <div class="section-small">
        The Savoria Experience
    </div>


    <h2>

        Food made with

        <span>passion.</span>

    </h2>


    <p>


        We believe dining is more than just eating.

        It is about the aroma that welcomes you,

        the flavours that surprise you and the moments

        you share around the table.


    </p>


</section>


<!-- ================= FEATURES ================= -->


<section class="features">


    <div class="feature">


        <div class="feature-number">
            01
        </div>


        <div class="feature-icon">
            🥗
        </div>


        <h3>
            Fresh Ingredients
        </h3>


        <p>

            Carefully selected ingredients are used

            to bring freshness and flavour to every dish.

        </p>


    </div>


    <div class="feature">


        <div class="feature-number">
            02
        </div>


        <div class="feature-icon">
            👨‍🍳
        </div>


        <h3>
            Crafted by Our Chefs
        </h3>


        <p>

            Every dish is prepared with attention,

            creativity and a passion for great food.

        </p>


    </div>


    <div class="feature">


        <div class="feature-number">
            03
        </div>


        <div class="feature-icon">
            ❤️
        </div>


        <h3>
            Made for Moments
        </h3>


        <p>

            From quick meals to special occasions,

            we create food worth remembering.

        </p>


    </div>


</section>


<!-- ================= FOOTER ================= -->


<footer>


    <div>

        © {{ date('Y') }}

        <strong>Savoria Restaurant</strong>

    </div>


    <div>

        Good Food · Great Moments

    </div>


</footer>


</body>

</html>