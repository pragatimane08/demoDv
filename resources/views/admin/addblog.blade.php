@extends('layouts.admin')

@section('content')    
<style>
/* General Reset */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #fffaf0; /* Light gold background */
    color: #333;
}

/* Form Wrapper */
.blog-form-wrapper {
    width: 700px;
    margin: 50px auto;
    padding: 50px;
    border-radius: 10px;
    background: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border: 2px solid #d4af37; /* Gold border */
    text-align: center;
}

/* Form Title */
.blog-form-title {
    margin-bottom: 20px;
    font-size: 2rem;
    color: #d4af37; /* Gold color */
    font-weight: bold;
}

/* Labels */
.blog-label {
    display: block;
    margin-bottom: 8px;
    text-align: left;
    font-weight: bold;
    color: #333;
}

/* Input Fields */
.blog-input[type="text"],
.blog-input[type="file"],
.blog-input[type="url"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

/* Input Field Focus */
.blog-input:focus {
    border-color: #d4af37;
    outline: none;
    box-shadow: 0 0 5px rgba(212, 175, 55, 0.5);
}

/* Submit Button */
.blog-submit-btn {
    width: 103%; /* Increased button width */
    padding: 14px; /* Increased padding */
    background-color: #d4af37; /* Gold */
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Submit Button Hover */
.blog-submit-btn:hover {
    background-color: #b8902f; /* Darker gold */
}

/* Responsive Design */
@media (max-width: 768px) {
    .blog-form-wrapper {
        width: 90%; /* Adjusted container width */
        padding: 30px;
    }

    .blog-input[type="text"],
    .blog-input[type="file"],
    .blog-input[type="url"],
    .blog-submit-btn {
        font-size: 14px;
    }

    .blog-submit-btn {
        width: 100%; /* Full-width button for smaller screens */
    }
}

@media (max-width: 500px) {
    .blog-form-wrapper {
        width: 95%; /* Slightly smaller container for extra-small screens */
        padding: 20px;
    }

    .blog-input[type="text"],
    .blog-input[type="file"],
    .blog-input[type="url"] {
        font-size: 13px;
        padding: 8px;
    }

    .blog-submit-btn {
        font-size: 15px;
        padding: 12px; /* Reduced padding for smaller screens */
    }
}
</style>

<div class="blog-form-wrapper">
    <h1 class="blog-form-title">Add New Blog</h1>

    <form action="{{ route('admin.storeblog') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title" class="blog-label">Title</label>
        <input type="text" name="title" id="title" class="blog-input" required>

        <label for="image" class="blog-label">Image</label>
        <input type="file" name="image" id="image" class="blog-input">

        <label for="link" class="blog-label">Link</label>
        <input type="url" name="link" id="link" class="blog-input" required>

        <button type="submit" class="blog-submit-btn">Add Blog</button>
    </form>
</div>
@endsection
