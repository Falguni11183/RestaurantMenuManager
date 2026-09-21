<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Categories | Restaurant Menu Manager</title>

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

        .navbar {
            background: #17212b;
            color: white;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            font-size: 22px;
        }

        .container {
            width: 90%;
            margin: 35px auto;
        }

        .top-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .top-section h2 {
            font-size: 28px;
        }

        .btn {
            text-decoration: none;
            border: none;
            padding: 11px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-primary {
            background: #198754;
            color: white;
        }

        .btn-edit {
            background: #0d6efd;
            color: white;
        }

        .btn-delete {
            background: #dc3545;
            color: white;
        }

        .success {
            background: #d1e7dd;
            color: #0f5132;
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #17212b;
            color: white;
        }

        tr:hover {
            background: #f8f9fa;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #777;
        }
    </style>
</head>

<body>

<div class="navbar">
    <h1>Restaurant Menu Manager</h1>
    <span>Admin Panel</span>
</div>

<div class="container">

    <div class="top-section">
        <h2>Categories</h2>

        <a href="{{ route('categories.create') }}"
           class="btn btn-primary">
            + Add Category
        </a>
    </div>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <table>

        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

        @forelse($categories as $category)

            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    {{ $category->name }}
                </td>

                <td>
                    {{ $category->description ?? 'No description' }}
                </td>

                <td>

                    <div class="actions">

                        <a href="{{ route('categories.edit', $category->id) }}"
                           class="btn btn-edit">
                            Edit
                        </a>

                        <form action="{{ route('categories.destroy', $category->id) }}"
                              method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this category?');">

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
                <td colspan="4" class="empty">
                    No categories found.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

</body>
</html>