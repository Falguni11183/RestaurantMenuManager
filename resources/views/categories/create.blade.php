<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Category</title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f8;
        }

        .navbar {
            background: #17212b;
            color: white;
            padding: 18px 40px;
        }

        .container {
            width: 600px;
            margin: 50px auto;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        h2 {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        textarea {
            height: 120px;
            resize: none;
        }

        .btn {
            padding: 11px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary {
            background: #198754;
            color: white;
        }

        .btn-back {
            background: #6c757d;
            color: white;
            margin-left: 8px;
        }

        .error {
            color: #dc3545;
            margin-bottom: 15px;
        }

    </style>

</head>

<body>

<div class="navbar">
    <h1>Restaurant Menu Manager</h1>
</div>

<div class="container">

    <div class="card">

        <h2>Add Category</h2>

        @if($errors->any())

            <div class="error">

                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach

            </div>

        @endif

        <form action="{{ route('categories.store') }}" method="POST">

            @csrf

            <label>Category Name</label>

            <input
                type="text"
                name="name"
                placeholder="Enter category name"
                value="{{ old('name') }}"
            >

            <label>Description</label>

            <textarea
                name="description"
                placeholder="Enter category description"
            >{{ old('description') }}</textarea>

            <button type="submit" class="btn btn-primary">
                Save Category
            </button>

            <a href="{{ route('categories.index') }}"
               class="btn btn-back">
                Cancel
            </a>

        </form>

    </div>

</div>

</body>
</html>