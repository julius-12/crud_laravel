<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>

    <style>
    
    .alert {
        padding: 20px;
        margin-bottom: 30px;
        border-radius: 8px; 
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border: 2px solid #f5c6cb; 
    }

    .form-group {
        margin-bottom: 30px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px; 
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 12px; 
        font-size: 16px;
        border-radius: 8px; 
        border: 2px solid #ccc; 
        margin-bottom: 20px; 
    }

    button[type="submit"] {
        padding: 12px 24px; 
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }
</style>


</head>
<body>
    <h1>Create Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</body>
</html>
