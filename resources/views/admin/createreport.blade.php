@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="page-title">Create Report</h1>

    <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data" class="report-form">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <!-- Image Upload Section -->
        <div class="form-group file-upload">
            <label for="image">Image:</label>
            <div class="upload-area">
                <input type="file" name="image" id="image" class="file-input-field" accept="image/*" required>
                <span class="upload-placeholder">
                    <i class="fas fa-upload"></i>
                    Drag & Drop or Click to Upload Image
                </span>
            </div>
            <div id="image-preview" class="preview-area"></div>
        </div>

        <!-- PDF Upload Section -->
        <div class="form-group file-upload">
            <label for="pdf">PDF:</label>
            <div class="upload-area">
                <input type="file" name="pdf" id="pdf" class="file-input-field" accept=".pdf" required>
                <span class="upload-placeholder">
                    <i class="fas fa-file-pdf"></i>
                    Drag & Drop or Click to Upload PDF
                </span>
            </div>
            <div id="pdf-preview" class="preview-area"></div>
        </div>

        <button type="submit" class="btn-submit">Create</button>
    </form>
</div>
<style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 3rem 1.5rem;
        }

        .page-title {
    font-size: 2.5rem;
    color: #d4af37;
    margin-bottom: 2rem;
    font-weight: 600;
    text-align: center;
    text-transform: uppercase; /* Add this line to make the title uppercase */
    letter-spacing: 2px; /* Add this line for slight spacing between letters */
}

        .newsletter-form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            font-size: 1.1rem;
            color: #333;
            display: block;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
/* Title Field Styles */
#title {
    font-size: 1.2rem;
    padding: 12px;
    border: 2px solid #d4af37; /* Add border color */
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 1rem;
    transition: border-color 0.3s ease;
}

#title:focus {
    outline: none;
    border-color: #e4a01d; /* Change border color on focus */
    box-shadow: 0 0 5px rgba(212, 175, 55, 0.5); /* Optional box shadow on focus */
}
        .btn-submit {
            width: 100%;
            padding: 12px;
            font-size: 1.1rem;
            background-color: #d4af37;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #e4a01d;
            transform: translateY(-3px);
        }

        /* File Upload Section */
        .file-upload {
            position: relative;
        }

        .upload-area {
            border: 2px dashed #d4af37;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            background-color: #f8f9fa;
        }

        .upload-area:hover {
            background-color: #fff6d5;
        }

        .upload-placeholder {
            font-size: 1rem;
            color: #999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .upload-placeholder i {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .file-input-field {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .preview-area {
            margin-top: 15px;
        }

        .preview-area img {
            max-width: 200px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .preview-area a {
            display: inline-block;
            margin-top: 10px;
            color: #d4af37;
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem;
            }
        }
    </style>

    <script>
        // Image Preview
        document.getElementById('image').addEventListener('change', function (e) {
            const preview = document.getElementById('image-preview');
            preview.innerHTML = '';
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    const img = document.createElement('img');
                    img.src = event.target.result;
                    preview.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        });

        // PDF Preview
        document.getElementById('pdf').addEventListener('change', function (e) {
            const preview = document.getElementById('pdf-preview');
            preview.innerHTML = '';
            const file = e.target.files[0];
            if (file) {
                const link = document.createElement('a');
                link.href = URL.createObjectURL(file);
                link.textContent = 'Preview Uploaded PDF';
                link.target = '_blank';
                preview.appendChild(link);
            }
        });
    </script>
<!-- Include the same CSS and JS as in the newsletter form -->
@endsection