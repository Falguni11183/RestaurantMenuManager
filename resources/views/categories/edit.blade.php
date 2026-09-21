<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Edit Category</title>

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
        }

        button,
        a {
            padding: 11px 18px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
        }

        button {
            background: #0d6efd;
            color: white;
        }

        .back {
            background: #6c757d;
            color: white;
            margin-left: 8px;
        }

    </style>

</head>

<body>

<div class="navbar">
    <h1>Restaurant Menu Manager</h1>
</div>

<div class="container">

    <div class="card">

        <h2>Edit Category</h2>

        <form action="{{ route('categories.update', $category->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <label>Category Name</label>

            <input
                type="text"
                name="name"
                value="{{ $category->name }}"
            >

            <label>Description</label>

            <textarea name="description">{{ $category->description }}</textarea>

            <button type="submit">
                Update Category
            </button>

            <a href="{{ route('categories.index') }}"
               class="back">
                Cancel
            </a>

        </form>

    </div>

</div>

</body>

</html>