<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>

    <style>
    /* Add your CSS styles here */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 30px auto; 
        padding: 30px; 
        background-color: #fff;
        border-radius: 8px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    }

    h1 {
        color: #333;
        margin-bottom: 30px; 
    }

    p {
        color: #666;
        margin-bottom: 30px; 
    }

    .btn {
        display: inline-block;
        padding: 12px 24px; 
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 8px; 
        transition: background-color 0.3s ease;
    }

    .btn-secondary {
        background-color: #6c757d;
    }

    .btn-danger {
        background-color: #dc3545;
    }

    .btn-primary:hover,
    .btn-secondary:hover,
    .btn-danger:hover {
        background-color: #0056b3;
    }

    .btn:active,
    .btn-secondary:active,
    .btn-danger:active {
        transform: translateY(2px); 
    }

    .btn + .btn {
        margin-left: 15px; 
    }
</style>


</head>
<body>
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary">Edit</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to all posts</a>
    </div>
</body>
</html>
