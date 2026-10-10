```php
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Restaurant Dashboard</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }


        body {
            background: #f4f7fb;
            color: #172033;
        }


        /* ================= SIDEBAR ================= */

        .sidebar {

            position: fixed;

            left: 0;
            top: 0;

            width: 250px;
            height: 100vh;

            background: #081b33;

            color: white;

            padding: 25px 18px;

            box-shadow: 5px 0 20px rgba(0,0,0,0.12);

            z-index: 1000;
        }


        .brand {

            text-align: center;

            margin-bottom: 40px;
        }


        .brand-icon {

            font-size: 42px;

            margin-bottom: 8px;
        }


        .brand h2 {

            font-size: 21px;

            margin-bottom: 6px;
        }


        .brand p {

            color: #94a3b8;

            font-size: 12px;
        }


        /* ================= NAVIGATION ================= */

        .nav-menu {

            display: flex;

            flex-direction: column;

            gap: 8px;
        }


        .nav-menu a {

            display: flex;

            align-items: center;

            gap: 12px;

            padding: 13px 15px;

            color: #cbd5e1;

            text-decoration: none;

            border-radius: 10px;

            font-size: 14px;

            transition: 0.2s;
        }


        .nav-menu a:hover,
        .nav-menu a.active {

            background: #12345b;

            color: white;
        }


        .nav-icon {

            width: 28px;

            font-size: 18px;

            text-align: center;
        }


        /* ================= MAIN ================= */

        .main {

            margin-left: 250px;

            min-height: 100vh;

            padding: 30px 35px;
        }


        /* ================= TOP BAR ================= */

        .topbar {

            background: white;

            border-radius: 16px;

            padding: 20px 25px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            box-shadow:
                0 4px 20px rgba(0,0,0,0.06);

            margin-bottom: 30px;
        }


        .topbar h1 {

            color: #081b33;

            font-size: 26px;

            margin-bottom: 5px;
        }


        .topbar p {

            color: #64748b;

            font-size: 14px;
        }


        .manager {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .manager-icon {

            width: 45px;

            height: 45px;

            border-radius: 50%;

            background: #dbeafe;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 22px;
        }


        .manager strong {

            display: block;

            color: #172033;

            font-size: 14px;
        }


        .manager span {

            color: #64748b;

            font-size: 12px;
        }


        /* ================= WELCOME ================= */

        .welcome {

            background:
                linear-gradient(
                    135deg,
                    #081b33,
                    #12345b
                );

            color: white;

            border-radius: 18px;

            padding: 30px;

            margin-bottom: 28px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            overflow: hidden;
        }


        .welcome h2 {

            font-size: 26px;

            margin-bottom: 8px;
        }


        .welcome p {

            color: #dbeafe;

            font-size: 14px;
        }


        .welcome-icon {

            font-size: 75px;

            opacity: 0.9;
        }


        /* ================= STAT CARDS ================= */

        .stats {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;

            margin-bottom: 30px;
        }


        .stat-card {

            background: white;

            border-radius: 16px;

            padding: 22px;

            display: flex;

            align-items: center;

            gap: 16px;

            box-shadow:
                0 4px 18px rgba(0,0,0,0.06);

            transition: 0.2s;
        }


        .stat-card:hover {

            transform: translateY(-3px);

        }


        .stat-icon {

            width: 52px;

            height: 52px;

            border-radius: 13px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 25px;
        }


        .blue {

            background: #dbeafe;

        }


        .green {

            background: #dcfce7;

        }


        .purple {

            background: #ede9fe;

        }


        .gray {

            background: #e2e8f0;

        }


        .stat-card h3 {

            font-size: 25px;

            color: #081b33;

            margin-bottom: 3px;
        }


        .stat-card p {

            color: #64748b;

            font-size: 13px;
        }


        /* ================= CONTENT GRID ================= */

        .content-grid {

            display: grid;

            grid-template-columns: 2fr 1fr;

            gap: 25px;
        }


        .panel {

            background: white;

            border-radius: 16px;

            padding: 24px;

            box-shadow:
                0 4px 18px rgba(0,0,0,0.06);

            margin-bottom: 25px;
        }


        .panel-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 20px;
        }


        .panel-header h2 {

            font-size: 19px;

            color: #081b33;
        }


        .view-link {

            color: #2563eb;

            text-decoration: none;

            font-size: 13px;

            font-weight: bold;
        }


        /* ================= SPECIAL CARDS ================= */

        .special-grid {

            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 15px;
        }


        .special-card {

            border: 1px solid #e2e8f0;

            border-radius: 12px;

            overflow: hidden;

            transition: 0.2s;
        }


        .special-card:hover {

            transform: translateY(-3px);

            box-shadow:
                0 8px 20px rgba(0,0,0,0.08);
        }


        .special-image {

            height: 130px;

            background: #e2e8f0;

            overflow: hidden;
        }


        .special-image img {

            width: 100%;

            height: 100%;

            object-fit: cover;
        }


        .special-info {

            padding: 12px;
        }


        .special-info h3 {

            font-size: 15px;

            margin-bottom: 6px;

            color: #172033;
        }


        .special-price {

            color: #16a34a;

            font-weight: bold;

            font-size: 14px;
        }


        .special-badge {

            display: inline-block;

            margin-top: 8px;

            padding: 4px 8px;

            border-radius: 12px;

            background: #dcfce7;

            color: #15803d;

            font-size: 10px;

            font-weight: bold;
        }


        .empty-special {

            padding: 30px;

            text-align: center;

            color: #64748b;

            font-size: 14px;
        }


        /* ================= TABLE ================= */

        .table-wrapper {

            overflow-x: auto;
        }


        table {

            width: 100%;

            border-collapse: collapse;
        }


        th {

            background: #1f2937;

            color: white;

            padding: 13px;

            text-align: left;

            font-size: 12px;
        }


        td {

            padding: 13px;

            border-bottom: 1px solid #e2e8f0;

            font-size: 13px;

            color: #475569;
        }


        td strong {

            color: #172033;
        }


        .price {

            color: #16a34a;

            font-weight: bold;
        }


        .category-badge {

            display: inline-block;

            background: #f1f5f9;

            color: #475569;

            padding: 5px 9px;

            border-radius: 12px;

            font-size: 11px;
        }


        .visible-badge {

            background: #dcfce7;

            color: #15803d;

            padding: 5px 9px;

            border-radius: 12px;

            font-size: 11px;

            font-weight: bold;
        }


        .hidden-badge {

            background: #e2e8f0;

            color: #475569;

            padding: 5px 9px;

            border-radius: 12px;

            font-size: 11px;

            font-weight: bold;
        }


        /* ================= STATUS ================= */

        .status-list {

            display: flex;

            flex-direction: column;

            gap: 14px;
        }


        .status-item {

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 13px;

            background: #f8fafc;

            border-radius: 10px;
        }


        .status-left {

            display: flex;

            align-items: center;

            gap: 10px;

            color: #475569;

            font-size: 13px;
        }


        .status-number {

            font-size: 18px;

            font-weight: bold;

            color: #081b33;
        }


        /* ================= QUICK ACTIONS ================= */

        .quick-actions {

            display: flex;

            flex-direction: column;

            gap: 12px;
        }


        .quick-action {

            display: flex;

            align-items: center;

            gap: 14px;

            padding: 15px;

            border: 1px solid #e2e8f0;

            border-radius: 12px;

            text-decoration: none;

            color: #172033;

            transition: 0.2s;

            background: white;
        }


        .quick-action:hover {

            background: #f8fafc;

            transform: translateX(3px);
        }


        .quick-action > span {

            width: 42px;

            height: 42px;

            border-radius: 10px;

            background: #dcfce7;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 21px;
        }


        .quick-action strong {

            display: block;

            font-size: 14px;

            margin-bottom: 4px;
        }


        .quick-action small {

            color: #64748b;

            font-size: 11px;
        }


        /* VIEW CUSTOMER MENU */

        .menu-action {

            border-left: 4px solid #2563eb;
        }


        .menu-action > span {

            background: #dbeafe;

        }


        /* ================= RESPONSIVE ================= */

        @media(max-width: 1100px) {

            .stats {

                grid-template-columns:
                    repeat(2, 1fr);

            }

            .content-grid {

                grid-template-columns: 1fr;

            }

        }


        @media(max-width: 750px) {

            .sidebar {

                width: 70px;

                padding: 20px 10px;

            }


            .brand h2,
            .brand p,
            .nav-menu span:not(.nav-icon) {

                display: none;

            }


            .brand-icon {

                font-size: 30px;

            }


            .main {

                margin-left: 70px;

                padding: 20px;

            }


            .topbar {

                padding: 15px;

            }


            .welcome {

                padding: 22px;

            }


            .welcome-icon {

                display: none;

            }


            .stats {

                grid-template-columns: 1fr;

            }


            .special-grid {

                grid-template-columns: 1fr;

            }

        }


        @media(max-width: 500px) {

            .manager {

                display: none;

            }


            .topbar h1 {

                font-size: 21px;

            }

        }
        /* ================= SIDEBAR LOGOUT ================= */

.sidebar {
    display: flex;
    flex-direction: column;
}

.sidebar-logout {
    margin-top: auto;
    padding-top: 20px;
}

.sidebar-logout button {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 13px 15px;
    background: #dc2626;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 14px;
    cursor: pointer;
    text-align: left;
    transition: 0.2s;
}

.sidebar-logout button:hover {
    background: #b91c1c;
}

    </style>

</head>


<body>


    <!-- ================= SIDEBAR ================= -->

    <aside class="sidebar">


        <div class="brand">

            <div class="brand-icon">

                🍽️

            </div>


            <h2>

                Restaurant Menu Manager

            </h2>


            <p>

                Smart Menu Control System

            </p>

        </div>



        <nav class="nav-menu">


            <a
                href="{{ route('dashboard') }}"
                class="active"
            >

                <span class="nav-icon">
                    🏠
                </span>

                <span>
                    Dashboard
                </span>

            </a>


            <a
                href="{{ route('categories.index') }}"
            >

                <span class="nav-icon">
                    📂
                </span>

                <span>
                    Categories
                </span>

            </a>


            <a
                href="{{ route('food-items.index') }}"
            >

                <span class="nav-icon">
                    🍴
                </span>

                <span>
                    Food Items
                </span>

            </a>
                        <!-- ADMIN LOGOUT -->

            <div class="sidebar-logout">
                <form
                    action="{{ route('admin.logout') }}"
                    method="POST"
                >
                    @csrf

                    <button type="submit">
                        <span class="nav-icon">🚪</span>
                        <span>Logout</span>
                    </button>
                </form>
            </div>


        </nav>

    </aside>



    <!-- ================= MAIN ================= -->

    <main class="main">


        <!-- ================= TOPBAR ================= -->

        <div class="topbar">


            <div>

                <h1>
                    Restaurant Dashboard
                </h1>

                <p>
                    Manage your restaurant menu easily
                </p>

            </div>


            <div class="manager">


                <div class="manager-icon">
                    👤
                </div>


                <div>

                    <strong>
                        Restaurant Manager
                    </strong>

                    <span>
                        Admin Panel
                    </span>

                </div>


            </div>


        </div>



        <!-- ================= WELCOME ================= -->

        <div class="welcome">


            <div>

                <h2>
                    Good Evening, Manager 👋
                </h2>


                <p>
                    Keep your menu fresh, organized and ready for customers.
                </p>

            </div>


            <div class="welcome-icon">

                🍽️

            </div>


        </div>



        <!-- ================= STATISTICS ================= -->

        <div class="stats">


            <div class="stat-card">


                <div class="stat-icon blue">

                    🍴

                </div>


                <div>

                    <h3>
                        {{ $totalFoodItems }}
                    </h3>

                    <p>
                        Total Food Items
                    </p>

                </div>


            </div>



            <div class="stat-card">


                <div class="stat-icon purple">

                    📂

                </div>


                <div>

                    <h3>
                        {{ $totalCategories }}
                    </h3>

                    <p>
                        Categories
                    </p>

                </div>


            </div>



            <div class="stat-card">


                <div class="stat-icon green">

                    ⭐

                </div>


                <div>

                    <h3>
                        {{ $todaySpecials }}
                    </h3>

                    <p>
                        Today's Specials
                    </p>

                </div>


            </div>



            <div class="stat-card">


                <div class="stat-icon gray">

                    👁️

                </div>


                <div>

                    <h3>
                        {{ $visibleItems }}
                    </h3>

                    <p>
                        Visible Items
                    </p>

                </div>


            </div>


        </div>



        <!-- ================= CONTENT ================= -->

        <div class="content-grid">


            <!-- ================= LEFT ================= -->

            <div>


                <!-- TODAY'S SPECIALS -->

                <div class="panel">


                    <div class="panel-header">


                        <h2>
                            ⭐ Today's Specials
                        </h2>


                        <a
                            href="{{ route('food-items.index') }}"
                            class="view-link"
                        >
                            View All
                        </a>


                    </div>



                    <div class="special-grid">


                        @php

                            $specialItems =
                                $recentFoodItems
                                ->where('is_special', true)
                                ->take(3);

                        @endphp



                        @forelse($specialItems as $food)


                            <div class="special-card">


                                <div class="special-image">


                                    @if($food->image)

                                        <img
                                            src="{{ $food->image }}"
                                            alt="{{ $food->name }}"
                                        >

                                    @else

                                        <div
                                            style="
                                                height:100%;
                                                display:flex;
                                                align-items:center;
                                                justify-content:center;
                                                font-size:50px;
                                            "
                                        >

                                            🍽️

                                        </div>

                                    @endif


                                </div>



                                <div class="special-info">


                                    <h3>

                                        {{ $food->name }}

                                    </h3>


                                    <div class="special-price">

                                        ₹{{ number_format($food->price, 2) }}

                                    </div>


                                    <span class="special-badge">

                                        TODAY'S SPECIAL

                                    </span>


                                </div>


                            </div>


                        @empty


                            <div class="empty-special">

                                No Today's Special items available.

                            </div>


                        @endforelse


                    </div>


                </div>



                <!-- RECENT MENU ITEMS -->

                <div class="panel">


                    <div class="panel-header">


                        <h2>
                            🍴 Recent Menu Items
                        </h2>


                        <a
                            href="{{ route('food-items.index') }}"
                            class="view-link"
                        >
                            View Food Items
                        </a>


                    </div>



                    <div class="table-wrapper">


                        <table>


                            <thead>

                                <tr>

                                    <th>
                                        Food Item
                                    </th>

                                    <th>
                                        Category
                                    </th>

                                    <th>
                                        Price
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                @forelse($recentFoodItems as $food)


                                    <tr>


                                        <td>

                                            <strong>

                                                {{ $food->name }}

                                            </strong>

                                        </td>


                                        <td>

                                            <span class="category-badge">

                                                {{ $food->category->name }}

                                            </span>

                                        </td>


                                        <td>

                                            <span class="price">

                                                ₹{{ number_format($food->price, 2) }}

                                            </span>

                                        </td>


                                        <td>


                                            @if($food->is_visible)

                                                <span class="visible-badge">

                                                    Visible

                                                </span>

                                            @else

                                                <span class="hidden-badge">

                                                    Hidden

                                                </span>

                                            @endif


                                        </td>


                                    </tr>


                                @empty


                                    <tr>

                                        <td
                                            colspan="4"
                                            style="text-align:center;"
                                        >

                                            No food items added yet.

                                        </td>

                                    </tr>


                                @endforelse


                            </tbody>


                        </table>


                    </div>


                </div>


            </div>



            <!-- ================= RIGHT ================= -->

            <div>


                <!-- MENU STATUS -->

                <div class="panel">


                    <div class="panel-header">


                        <h2>
                            📊 Menu Status
                        </h2>


                    </div>



                    <div class="status-list">


                        <div class="status-item">


                            <div class="status-left">

                                <span>
                                    👁️
                                </span>

                                Visible Items

                            </div>


                            <span class="status-number">

                                {{ $visibleItems }}

                            </span>


                        </div>



                        <div class="status-item">


                            <div class="status-left">

                                <span>
                                    🙈
                                </span>

                                Hidden Items

                            </div>


                            <span class="status-number">

                                {{ $hiddenItems }}

                            </span>


                        </div>



                        <div class="status-item">


                            <div class="status-left">

                                <span>
                                    📂
                                </span>

                                Categories

                            </div>


                            <span class="status-number">

                                {{ $totalCategories }}

                            </span>


                        </div>



                        <div class="status-item">


                            <div class="status-left">

                                <span>
                                    ⭐
                                </span>

                                Special Items

                            </div>


                            <span class="status-number">

                                {{ $todaySpecials }}

                            </span>


                        </div>


                    </div>


                </div>



                <!-- QUICK ACTIONS -->

                <div class="panel">


                    <div class="panel-header">


                        <h2>
                            ⚡ Quick Actions
                        </h2>


                    </div>



                    <div class="quick-actions">


                        <!-- ADD FOOD -->

                        <a
                            href="{{ route('food-items.create') }}"
                            class="quick-action"
                        >


                            <span>
                                🍽️
                            </span>


                            <div>

                                <strong>
                                    Add Food Item
                                </strong>

                                <small>
                                    Add a new dish to your menu
                                </small>

                            </div>


                        </a>



                        <!-- ADD CATEGORY -->

                        <a
                            href="{{ route('categories.create') }}"
                            class="quick-action"
                        >


                            <span>
                                📂
                            </span>


                            <div>

                                <strong>
                                    Add Category
                                </strong>

                                <small>
                                    Create a new food category
                                </small>

                            </div>


                        </a>



                        <!-- CUSTOMER MENU -->

                        <a
                            href="{{ route('menu') }}"
                            class="quick-action menu-action"
                        >


                            <span>
                                👀
                            </span>


                            <div>

                                <strong>
                                    View Customer Menu
                                </strong>

                                <small>
                                    See the menu as customers see it
                                </small>

                            </div>


                        </a>


                    </div>


                </div>


            </div>


        </div>


    </main>


</body>

</html>

