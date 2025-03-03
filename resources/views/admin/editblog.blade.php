@extends('layouts.admin')

@section('content')

    <h1>Edit Blog</h1>
    <form class="edit-blog-form" action="{{ route('admin.updateblog', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $blog->title }}" required><br>

        <label for="image">Image</label>
        <input type="file" name="image" id="image"><br>

        <label for="link">Link</label>
        <input type="url" name="link" id="link" value="{{ $blog->link }}" required><br>

        <button type="submit">Update Blog</button>
    </form>

    <style>
       /* General Page Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

h1 {
    text-align: center;
    color: #b8860b;
   
}


/* Form Specific Styles */
.edit-blog-form {
    background-color: white;
    border: 2px solid #b8860b;
    border-radius: 10px;
    padding: 20px;
    width: 90%; /* Adjusted for responsiveness */
    max-width: 800px; /* Maximum width for larger screens */
    margin: 20px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.edit-blog-form label {
    font-weight: bold;
    color: #b8860b;
}

.edit-blog-form input[type="text"],
.edit-blog-form input[type="url"],
.edit-blog-form input[type="file"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

.edit-blog-form input[type="text"]:focus,
.edit-blog-form input[type="url"]:focus,
.edit-blog-form input[type="file"]:focus {
    outline: none;
    border-color: #b8860b;
    box-shadow: 0 0 5px #b8860b;
}

.edit-blog-form button {
    background-color: #b8860b;
    color: white;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    padding: 10px 15px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.edit-blog-form button:hover {
    background-color: #a6760a;
}

.edit-blog-form button:active {
    background-color: #916a09;
}

/* Responsive Styles */
@media (max-width: 768px) {
    /* Adjustments for tablets and smaller devices */
    .edit-blog-form {
        width: 95%; /* Increase width for smaller screens */
        padding: 15px;
    }

    .navbar a {
        padding: 10px 15px; /* Reduce padding for smaller screens */
    }
}

@media (max-width: 480px) {
    /* Adjustments for mobile devices */
    h1 {
        font-size: 24px; /* Reduce font size for smaller screens */
        margin-top: 53px;
    }

    .edit-blog-form {
        width: 100%; /* Full width for mobile devices */
        padding: 10px;
    }

    .edit-blog-form input[type="text"],
    .edit-blog-form input[type="url"],
    .edit-blog-form input[type="file"] {
        font-size: 12px; /* Reduce font size for inputs */
    }

    .edit-blog-form button {
        font-size: 14px; /* Reduce button font size */
        padding: 8px 12px;
    }

    .navbar a {
        padding: 8px 10px; /* Further reduce padding for mobile */
    }
}
    </style>

@endsection
