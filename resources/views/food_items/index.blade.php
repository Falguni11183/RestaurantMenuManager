<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Food Items | Restaurant Menu Manager</title>


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


        /* Main Container */

        .container {
            width: 92%;
            margin: 35px auto;
        }


        /* Top Section */

        .top-section {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 25px;
        }


        .top-section h2 {
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


        .btn-primary {
            background: #198754;
            color: white;
        }


        .btn-primary:hover {
            background: #157347;
        }


        .btn-edit {
            background: #0d6efd;
            color: white;
        }


        .btn-edit:hover {
            background: #0b5ed7;
        }


        .btn-delete {
            background: #dc3545;
            color: white;
        }


        .btn-delete:hover {
            background: #bb2d3b;
        }


        .btn-view {
            background: #6c757d;
            color: white;
        }


        .btn-view:hover {
            background: #5c636a;
        }


        /* Success Message */

        .success {
            background: #d1e7dd;

            color: #0f5132;

            padding: 12px 15px;

            border-radius: 6px;

            margin-bottom: 20px;
        }


        /* Table Card */

        .table-card {
            background: white;

            border-radius: 12px;

            overflow: hidden;

            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
        }


        table {
            width: 100%;

            border-collapse: collapse;
        }


        th,
        td {
            padding: 15px;

            text-align: left;

            border-bottom: 1px solid #eee;
        }


        th {
            background: #1f2937;

            color: #f8fafc;

            font-size: 14px;
        }


        td {
            color: #374151;

            vertical-align: middle;
        }


        tr:hover {
            background: #f8f9fa;
        }


        /* Food Name */

        .food-name {
            font-weight: 700;

            color: #1f2937;

            margin-bottom: 4px;
        }


        td small {
            color: #777;

            font-size: 12px;
        }


        /* Category */

        .category-badge {
            background: #e9ecef;

            color: #495057;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;
        }


        /* Price */

        .price {
            color: #198754;

            font-weight: 700;
        }


        /* Today's Special */

        .special-badge {
            background: #198754;

            color: white;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;
        }


        .normal-badge {
            background: #e5e7eb;

            color: #4b5563;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;
        }


        /* Visibility */

        .visible-badge {
            background: #d1e7dd;

            color: #0f5132;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;
        }


        .hidden-badge {
            background: #f8d7da;

            color: #842029;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;
        }


        /* Actions */

        .actions {
            display: flex;

            gap: 7px;

            flex-wrap: wrap;
        }


        /* Empty State */

        .empty {
            text-align: center;

            padding: 40px;

            color: #777;
        }


        /* Responsive */

        @media (max-width: 900px) {

            .container {
                width: 96%;
            }

            .table-card {
                overflow-x: auto;
            }

            table {
                min-width: 900px;
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



    <!-- Main Content -->

    <div class="container">


        <!-- Heading -->

        <div class="top-section">

            <h2>Food Items</h2>


            <a href="{{ route('food-items.create') }}"
               class="btn btn-primary">

                + Add Food Item

            </a>

        </div>



        <!-- Success Message -->

        @if(session('success'))

            <div class="success">

                {{ session('success') }}

            </div>

        @endif



        <!-- Food Items Table -->

        <div class="table-card">


            <table>


                <thead>

                    <tr>

                        <th>#</th>

                        <th>Food Item</th>

                        <th>Category</th>

                        <th>Price</th>

                        <th>Today's Special</th>

                        <th>Visibility</th>

                        <th>Actions</th>

                    </tr>

                </thead>



                <tbody>


                    @forelse($foodItems as $foodItem)


                        <tr>


                            <!-- Number -->

                            <td>

                                {{ $loop->iteration }}

                            </td>



                            <!-- Food Item -->

                            <td>

                                <div class="food-name">

                                    {{ $foodItem->name }}

                                </div>


                                @if($foodItem->description)

                                    <small>

                                        {{ Str::limit($foodItem->description, 50) }}

                                    </small>

                                @endif

                            </td>



                            <!-- Category -->

                            <td>

                                <span class="category-badge">

                                    {{ $foodItem->category->name }}

                                </span>

                            </td>



                            <!-- Price -->

                            <td>

                                <span class="price">

                                    ₹{{ number_format($foodItem->price, 2) }}

                                </span>

                            </td>



                            <!-- Today's Special -->

                            <td>


                                @if($foodItem->is_special)

                                    <span class="special-badge">

                                        ★ Special

                                    </span>

                                @else

                                    <span class="normal-badge">

                                        Normal

                                    </span>

                                @endif


                            </td>



                            <!-- Visibility -->

                            <td>


                                @if($foodItem->is_visible)

                                    <span class="visible-badge">

                                        Visible

                                    </span>

                                @else

                                    <span class="hidden-badge">

                                        Hidden

                                    </span>

                                @endif


                            </td>



                            <!-- Actions -->

                            <td>


                                <div class="actions">


                                    <!-- View -->

                                    <a href="{{ route('food-items.show', $foodItem->id) }}"
                                       class="btn btn-view">

                                        View

                                    </a>



                                    <!-- Edit -->

                                    <a href="{{ route('food-items.edit', $foodItem->id) }}"
                                       class="btn btn-edit">

                                        Edit

                                    </a>



                                    <!-- Delete -->

                                    <form action="{{ route('food-items.destroy', $foodItem->id) }}"
                                          method="POST"

                                          onsubmit="return confirm('Are you sure you want to delete this food item?');">


                                        @csrf

                                        @method('DELETE')


                                        <button type="submit"
                                                class="btn btn-delete">

                                            Delete

                                        </button>


                                    </form>


                                </div>


                            </td>


                        </tr>


                    @empty


                        <tr>

                            <td colspan="7"
                                class="empty">


                                No food items found.


                                <br>
                                <br>


                                <a href="{{ route('food-items.create') }}"
                                   class="btn btn-primary">

                                    Add Your First Food Item

                                </a>


                            </td>

                        </tr>


                    @endforelse


                </tbody>


            </table>


        </div>


    </div>


</body>

</html>