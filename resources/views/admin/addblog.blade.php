@extends('layouts.admin')

@section('content')    
<style>
/* General Reset */
body {
    margin: 0;
  
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

/* Error Messages */
.blog-error {
    color: red;
    font-size: 14px;
    margin-top: -10px;
    margin-bottom: 15px;
    text-align: left;
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
/* Updated CSS for the date input and form spacing */
.blog-input[type="date"] {
    width: 100%;
    padding: 10px 15px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    color: #333;
    background-color: white;
    cursor: pointer;
    box-sizing: border-box; /* Ensures padding doesn't affect width */
    appearance: none; /* Removes default styling */
    -webkit-appearance: none; /* For Safari */
}

.blog-input[type="date"]:focus {
    border-color: #d4af37;
    outline: none;
    box-shadow: 0 0 5px rgba(212, 175, 55, 0.5);
}

/* Custom calendar icon */
.blog-input[type="date"]::-webkit-calendar-picker-indicator {
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="%23d4af37"><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z"/></svg>');
    cursor: pointer;
    opacity: 0.8;
    transition: opacity 0.2s;
    padding-left: 10px; /* Adds some spacing */
}

.blog-input[type="date"]::-webkit-calendar-picker-indicator:hover {
    opacity: 1;
}

/* Submit button spacing adjustment */
.blog-submit-btn {
    width: 100%; /* Changed from 103% to match other inputs */
    padding: 14px;
    margin-top: 10px; /* Added margin to separate from last input */
    background-color: #d4af37;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .blog-input[type="date"] {
        padding: 8px 12px;
        font-size: 14px;
    }
    
    .blog-submit-btn {
        margin-top: 8px;
    }
}

@media (max-width: 500px) {
    .blog-input[type="date"] {
        padding: 8px 10px;
        font-size: 13px;
    }
    
    .blog-submit-btn {
        padding: 12px;
        font-size: 15px;
    }
}
</style>

<div class="blog-form-wrapper">
    <h1 class="blog-form-title">Add New Blog</h1>

    <form action="{{ route('admin.storeblog') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title" class="blog-label">Title</label>
        <input type="text" name="title" id="title" class="blog-input" required>
        @error('title')
            <p class="blog-error">{{ $message }}</p>
        @enderror

        <label for="image" class="blog-label">Image (Only JPG & PNG)</label>
        <input type="file" name="image" id="image" class="blog-input" accept="image/jpeg, image/png" required>
        @error('image')
            <p class="blog-error">{{ $message }}</p>
        @enderror

        <label for="link" class="blog-label">Link</label>
        <input type="url" name="link" id="link" class="blog-input" required>
        @error('link')
            <p class="blog-error">{{ $message }}</p>
        @enderror

        <label for="published_date" class="blog-label">Published Date</label>
<input type="date" name="published_date" id="published_date" class="blog-input" required>
@error('published_date')
    <p class="blog-error">{{ $message }}</p>
@enderror
        <button type="submit" class="blog-submit-btn">Add Blog</button>
    </form>
</div>
@endsection
