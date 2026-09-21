<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $foodItem->name }} | Restaurant Menu Manager</title>


    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }


        body {
            background: #f4f6f8;
            color: #222;
        }


        /* Navbar */

        .navbar {
            background: linear-gradient(135deg, #111827, #1f2937);

            color: #f8fafc;

            padding: 18px 40px;

            display: flex;

            justify-content: space-between;

            align-items: center;

            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }


        .navbar h1 {
            font-size: 24px;

            font-weight: 700;

            letter-spacing: 0.5px;

            color: #f8fafc;
        }


        .navbar span {
            color: #e5e7eb;

            font-size: 14px;

            font-weight: 500;
        }


        /* Container */

        .container {
            width: 70%;

            margin: 40px auto;
        }


        /* Header */

        .page-header {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 25px;
        }


        .page-header h2 {
            font-size: 28px;

            color: #1f2937;
        }


        /* Buttons */

        .btn {
            text-decoration: none;

            border: none;

            padding: 10px 16px;

            border-radius: 6px;

            cursor: pointer;

            font-size: 14px;

            display: inline-block;
        }


        .btn-back {
            background: #6c757d;

            color: white;
        }


        .btn-back:hover {
            background: #5c636a;
        }


        .btn-edit {
            background: #0d6efd;

            color: white;
        }


        .btn-edit:hover {
            background: #0b5ed7;
        }


        /* Card */

        .details-card {
            background: white;

            border-radius: 12px;

            padding: 30px;

            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
        }


        /* Food Title */

        .food-title {
            font-size: 30px;

            color: #1f2937;

            margin-bottom: 8px;
        }


        .food-description {
            color: #6b7280;

            font-size: 15px;

            line-height: 1.6;

            margin-bottom: 30px;
        }


        /* Details Grid */

        .details-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 20px;
        }


        .detail-box {
            background: #f8f9fa;

            border: 1px solid #e5e7eb;

            border-radius: 8px;

            padding: 18px;
        }


        .detail-label {
            font-size: 12px;

            color: #6b7280;

            margin-bottom: 8px;

            text-transform: uppercase;

            letter-spacing: 0.5px;
        }


        .detail-value {
            font-size: 17px;

            font-weight: 600;

            color: #1f2937;
        }


        .price {
            color: #198754;

            font-size: 22px;
        }


        /* Badges */

        .badge {
            display: inline-block;

            padding: 7px 12px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;
        }


        .special-badge {
            background: #198754;

            color: white;
        }


        .normal-badge {
            background: #e5e7eb;

            color: #4b5563;
        }


        .visible-badge {
            background: #d1e7dd;

            color: #0f5132;
        }


        .hidden-badge {
            background: #f8d7da;

            color: #842029;
        }


        /* Image */

        .image-section {
            margin-top: 25px;

            padding-top: 25px;

            border-top: 1px solid #eee;
        }


        .image-section h3 {
            font-size: 17px;

            color: #1f2937;

            margin-bottom: 12px;
        }


        .image-url {
            background: #f8f9fa;

            padding: 12px;

            border-radius: 6px;

            color: #6b7280;

            word-break: break-all;

            font-size: 13px;
        }


        .no-image {
            color: #9ca3af;

            font-size: 14px;
        }


        /* Bottom Buttons */

        .bottom-actions {
            margin-top: 30px;

            display: flex;

            gap: 10px;
        }


        /* Responsive */

        @media (max-width: 700px) {

            .container {
                width: 92%;
            }


            .page-header {
                flex-direction: column;

                align-items: flex-start;

                gap: 15px;
            }


            .details-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


    <!-- Navbar -->

    <div class="navbar">

        <h1>Restaurant Menu Manager</h1>

        <span>Admin Panel</span>

    </div>



    <!-- Main Container -->

    <div class="container">


        <!-- Page Header -->

        <div class="page-header">

            <h2>Food Item Details</h2>


            <a href="{{ route('food-items.index') }}"
               class="btn btn-back">

                ← Back to Food Items

            </a>

        </div>



        <!-- Details Card -->

        <div class="details-card">


            <!-- Food Name -->

            <h1 class="food-title">

                {{ $foodItem->name }}

            </h1>


            <!-- Description -->

            @if($foodItem->description)

                <p class="food-description">

                    {{ $foodItem->description }}

                </p>

            @else

                <p class="food-description">

                    No description available for this food item.

                </p>

            @endif



            <!-- Details -->

            <div class="details-grid">


                <!-- Category -->

                <div class="detail-box">

                    <div class="detail-label">

                        Category

                    </div>


                    <div class="detail-value">

                        {{ $foodItem->category->name }}

                    </div>

                </div>



                <!-- Price -->

                <div class="detail-box">

                    <div class="detail-label">

                        Price

                    </div>


                    <div class="detail-value price">

                        ₹{{ number_format($foodItem->price, 2) }}

                    </div>

                </div>



                <!-- Today's Special -->

                <div class="detail-box">

                    <div class="detail-label">

                        Today's Special

                    </div>


                    <div class="detail-value">


                        @if($foodItem->is_special)

                            <span class="badge special-badge">

                                ★ Special

                            </span>

                        @else

                            <span class="badge normal-badge">

                                Normal

                            </span>

                        @endif


                    </div>

                </div>



                <!-- Visibility -->

                <div class="detail-box">

                    <div class="detail-label">

                        Menu Visibility

                    </div>


                    <div class="detail-value">


                        @if($foodItem->is_visible)

                            <span class="badge visible-badge">

                                Visible on Menu

                            </span>

                        @else

                            <span class="badge hidden-badge">

                                Hidden from Menu

                            </span>

                        @endif


                    </div>

                </div>



                <!-- Created Date -->

                <div class="detail-box">

                    <div class="detail-label">

                        Added On

                    </div>


                    <div class="detail-value">

                        {{ $foodItem->created_at->format('d M Y, h:i A') }}

                    </div>

                </div>



                <!-- Updated Date -->

                <div class="detail-box">

                    <div class="detail-label">

                        Last Updated

                    </div>


                    <div class="detail-value">

                        {{ $foodItem->updated_at->format('d M Y, h:i A') }}

                    </div>

                </div>


            </div>



            <!-- Image -->

            <div class="image-section">

                <h3>Food Image</h3>


                @if($foodItem->image)

                    <div class="image-url">

                        {{ $foodItem->image }}

                    </div>

                @else

                    <div class="no-image">

                        No image added for this food item.

                    </div>

                @endif


            </div>



            <!-- Actions -->

            <div class="bottom-actions">


                <a href="{{ route('food-items.edit', $foodItem->id) }}"
                   class="btn btn-edit">

                    Edit Food Item

                </a>


                <a href="{{ route('food-items.index') }}"
                   class="btn btn-back">

                    Back

                </a>


            </div>


        </div>


    </div>


</body>

</html>