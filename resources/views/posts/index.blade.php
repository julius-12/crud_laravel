<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>

    <style>
    /* Add your CSS styles here */
    .alert {
        padding: 20px;
        margin-bottom: 30px;
        border-radius: 8px; 
        background-color: #f8d7da; 
        color: #721c24; 
        border: 2px solid #f5c6cb; 
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 2px solid #c3e6cb; 
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 30px; 
    }

    .table th,
    .table td {
        border: 2px solid #dee2e6; 
        padding: 12px;
        text-align: left;
    }

    .table th {
        background-color: #f8f9fa;
    }

    .btn {
        display: inline-block;
        padding: 12px 20px; 
        font-size: 16px; 
        border: none;
        border-radius: 8px; 
        cursor: pointer;
        text-decoration: none;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .pagination {
        margin-top: 30px; 
    }

    .pagination .page-item {
        display: inline-block;
        margin-right: 10px; 
    }

    .pagination .page-link {
        padding: 10px 16px; 
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 8px; 
        cursor: pointer;
    }

    .pagination .page-link:hover {
        background-color: #0056b3;
    }

    .pagination .page-item.disabled .page-link {
        background-color: #6c757d;
        cursor: not-allowed;
    }
</style>

</head>
<body>
    <h1>All Posts</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</body>
</html>
