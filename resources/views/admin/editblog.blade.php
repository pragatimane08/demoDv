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

        /* Navbar Specific Styles */
        .navbar {
            padding: 0 !important; /* Ensuring padding doesn't interfere */
            margin: 0;
            background-color: #333;
            color: white;
        }

        .navbar a {
            text-decoration: none;
            padding: 10px 20px;
            display: inline-block;
            color: white;
        }

        .navbar a:hover {
            background-color: #575757;
        }

        /* Form Specific Styles */
        .edit-blog-form {
            background-color: white;
            border: 2px solid #b8860b;
            border-radius: 10px;
            padding: 20px;
            width: 800px;
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
    </style>

@endsection
