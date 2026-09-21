<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Food Item | Restaurant Menu Manager</title>


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


        /* Page Header */

        .page-header {
            margin-bottom: 25px;
        }


        .page-header h2 {
            font-size: 28px;
            color: #1f2937;
            margin-bottom: 7px;
        }


        .page-header p {
            color: #6b7280;
            font-size: 14px;
        }


        /* Form Card */

        .form-card {
            background: white;

            padding: 30px;

            border-radius: 12px;

            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.06);
        }


        /* Form Group */

        .form-group {
            margin-bottom: 22px;
        }


        label {
            display: block;

            margin-bottom: 8px;

            font-size: 14px;

            font-weight: 600;

            color: #374151;
        }


        .required {
            color: #dc3545;
        }


        input,
        textarea,
        select {
            width: 100%;

            padding: 12px 14px;

            border: 1px solid #d1d5db;

            border-radius: 7px;

            font-size: 14px;

            outline: none;

            background: white;
        }


        input:focus,
        textarea:focus,
        select:focus {
            border-color: #198754;

            box-shadow: 0 0 0 3px rgba(25, 135, 84, 0.1);
        }


        textarea {
            resize: vertical;

            min-height: 100px;
        }


        .help-text {
            margin-top: 6px;

            font-size: 12px;

            color: #6b7280;
        }


        /* Error */

        .error-box {
            background: #f8d7da;

            color: #842029;

            padding: 12px 15px;

            border-radius: 7px;

            margin-bottom: 22px;

            font-size: 14px;
        }


        .error-box ul {
            margin-left: 18px;

            margin-top: 5px;
        }


        /* Checkboxes */

        .checkbox-section {
            display: flex;

            gap: 25px;

            margin-bottom: 25px;

            padding: 18px;

            background: #f8f9fa;

            border-radius: 8px;

            border: 1px solid #e5e7eb;
        }


        .checkbox-item {
            display: flex;

            align-items: center;

            gap: 8px;
        }


        .checkbox-item input {
            width: 18px;

            height: 18px;

            cursor: pointer;
        }


        .checkbox-item label {
            margin: 0;

            cursor: pointer;

            font-size: 14px;
        }


        /* Buttons */

        .button-section {
            display: flex;

            gap: 10px;

            margin-top: 10px;
        }


        .btn {
            padding: 11px 20px;

            border: none;

            border-radius: 6px;

            font-size: 14px;

            cursor: pointer;

            text-decoration: none;

            display: inline-block;
        }


        .btn-save {
            background: #198754;

            color: white;
        }


        .btn-save:hover {
            background: #157347;
        }


        .btn-cancel {
            background: #6c757d;

            color: white;
        }


        .btn-cancel:hover {
            background: #5c636a;
        }


        /* Responsive */

        @media (max-width: 800px) {

            .container {
                width: 92%;
            }


            .checkbox-section {
                flex-direction: column;

                gap: 15px;
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

            <h2>Add Food Item</h2>

            <p>Add a new food item to your restaurant menu.</p>

        </div>



        <!-- Form Card -->

        <div class="form-card">


            <!-- Validation Errors -->

            @if($errors->any())

                <div class="error-box">

                    <strong>Please fix the following errors:</strong>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif



            <!-- Form -->

            <form action="{{ route('food-items.store') }}"
                  method="POST">

                @csrf



                <!-- Category -->

                <div class="form-group">

                    <label for="category_id">

                        Category <span class="required">*</span>

                    </label>


                    <select name="category_id"
                            id="category_id"
                            required>

                        <option value="">
                            Select Category
                        </option>


                        @foreach($categories as $category)

                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>

                                {{ $category->name }}

                            </option>

                        @endforeach

                    </select>

                </div>



                <!-- Food Name -->

                <div class="form-group">

                    <label for="name">

                        Food Item Name <span class="required">*</span>

                    </label>


                    <input type="text"
                           name="name"
                           id="name"

                           value="{{ old('name') }}"

                           placeholder="Enter food item name"

                           required>

                </div>



                <!-- Description -->

                <div class="form-group">

                    <label for="description">

                        Description

                    </label>


                    <textarea name="description"
                              id="description"

                              placeholder="Enter food item description">{{ old('description') }}</textarea>


                    <div class="help-text">

                        Add a short description of the food item.

                    </div>

                </div>



                <!-- Price -->

                <div class="form-group">

                    <label for="price">

                        Price <span class="required">*</span>

                    </label>


                    <input type="number"
                           name="price"
                           id="price"

                           value="{{ old('price') }}"

                           placeholder="Enter price"

                           min="0"
                           step="0.01"

                           required>

                </div>



                <!-- Image -->

                <div class="form-group">

                    <label for="image">

                        Image URL

                    </label>


                    <input type="text"
                           name="image"
                           id="image"

                           value="{{ old('image') }}"

                           placeholder="Enter image URL (optional)">


                    <div class="help-text">

                        You can add an image URL. This field is optional.

                    </div>

                </div>



                <!-- Options -->

                <div class="checkbox-section">


                    <!-- Today's Special -->

                    <div class="checkbox-item">

                        <input type="checkbox"
                               name="is_special"
                               id="is_special"
                               value="1"

                               {{ old('is_special') ? 'checked' : '' }}>


                        <label for="is_special">

                            Today's Special

                        </label>

                    </div>



                    <!-- Visibility -->

                    <div class="checkbox-item">

                        <input type="checkbox"
                               name="is_visible"
                               id="is_visible"
                               value="1"

                               {{ old('is_visible', true) ? 'checked' : '' }}>


                        <label for="is_visible">

                            Visible on Menu

                        </label>

                    </div>


                </div>



                <!-- Buttons -->

                <div class="button-section">


                    <button type="submit"
                            class="btn btn-save">

                        Save Food Item

                    </button>


                    <a href="{{ route('food-items.index') }}"
                       class="btn btn-cancel">

                        Cancel

                    </a>


                </div>


            </form>


        </div>


    </div>


</body>

</html>