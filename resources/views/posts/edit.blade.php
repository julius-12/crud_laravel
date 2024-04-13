<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>

    <style>
    /* Add your CSS styles here */
    .alert {
        padding: 20px;
        margin-bottom: 30px; 
        border-radius: 8px; 
        background-color: #d4edda; 
        color: #155724; 
        border: 2px solid #c3e6cb;
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
        width: calc(100% - 24px); 
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
    <h1>Edit Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="4" required>{{ $post->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>
</html>
