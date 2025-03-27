@extends('layouts.admin')

@section('content')
<div class="container">
  

    <form action="{{ route('newsletters.update', $newsletter->id) }}" method="POST" enctype="multipart/form-data" class="newsletter-form">
        @csrf
        @method('PUT')
        <div class="form-group">
        <h1>Edit Newsletter</h1>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $newsletter->title }}" required>
        </div>

        <!-- Image Upload Section -->
        <div class="form-group file-upload">
            <label for="image">Image:</label>
            <div class="upload-area">
                <input type="file" name="image" id="image" class="file-input-field" accept="image/*">
                <span class="upload-placeholder">
                    <i class="fas fa-upload"></i>
                    Drag & Drop or Click to Upload Image
                </span>
            </div>
            <div id="image-preview" class="preview-area">
                <img src="{{ asset('storage/' . $newsletter->image) }}" alt="Current Image" class="preview-image">
            </div>
        </div>

        <!-- PDF Upload Section -->
        <div class="form-group file-upload">
            <label for="pdf">PDF:</label>
            <div class="upload-area">
                <input type="file" name="pdf" id="pdf" class="file-input-field" accept=".pdf">
                <span class="upload-placeholder">
                    <i class="fas fa-file-pdf"></i>
                    Drag & Drop or Click to Upload PDF
                </span>
            </div>
            <div id="pdf-preview" class="preview-area">
                <a href="{{ asset('storage/' . $newsletter->pdf) }}" class="preview-link" target="_blank">View Current PDF</a>
            </div>
        </div>

        <div class="form-group">
    <label for="display_on_website">Display on Website:</label>
    <select name="display_on_website" id="display_on_website" class="form-control" required>
        <option value="1" {{ old('display_on_website', $newsletter->display_on_website) == 1 ? 'selected' : '' }}>Yes</option>
        <option value="0" {{ old('display_on_website', $newsletter->display_on_website, 0) == 0 ? 'selected' : '' }}>No</option>
    </select>
</div>

        <button type="submit" class="btn-submit">Update</button>
    </form>
</div>

<style>
    /* General Styling */
    * {
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
    }
    h1 {
        text-align: center;
        margin-top: 40px;
        color: #b68e3c;
        font-size: 28px;
        font-weight: bold;
    }

    /* Form Section */
    .newsletter-form {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        max-width: 700px;
        margin: 40px auto;
        padding: 30px;
    }
    .newsletter-form label {
        font-size: 16px;
        color: #333;
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }
    .newsletter-form input[type="text"],
    .newsletter-form input[type="file"] {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
    }
    .newsletter-form button {
        background-color: #b68e3c;
        color: white;
        border: none;
        padding: 14px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 8px;
        width: 100%;
        margin-top: 20px;
        transition: background-color 0.3s;
    }
    .newsletter-form button:hover {
        background-color: #9c742d;
    }

    /* File Section */
    .file-section {
        margin-bottom: 20px;
    }
    .file-preview {
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .file-preview .file-input {
        flex: 1;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 8px;
        transition: border 0.3s;
    }
    .file-preview .file-input:focus {
        border-color: #b68e3c;
        outline: none;
    }
    .preview-container {
        text-align: center;
    }
    .preview-image {
        max-width: 100px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 10px;
    }
    .preview-link {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 15px;
        background-color: #b68e3c;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        transition: background-color 0.3s;
    }
    .preview-link:hover {
        background-color: #9c742d;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
        .file-preview {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const displaySelect = document.getElementById("display_on_website");

    function toggleNewsletterDisplay() {
        if (displaySelect.value == "1") {
            document.querySelector(".newsletter-content").style.display = "block";
        } else {
            document.querySelector(".newsletter-content").style.display = "none";
        }
    }

    displaySelect.addEventListener("change", toggleNewsletterDisplay);
    toggleNewsletterDisplay(); // Initial call to set correct state
});

</script>
@endsection
