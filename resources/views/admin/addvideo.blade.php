@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Add New Video</h1>
    <form action="{{ route('admin.storevideo') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="iframe_code">YouTube Iframe Code</label>
            <textarea name="iframe_code" id="iframe_code" class="form-control" rows="5" required></textarea>
            <small class="text-muted">Paste the iframe code from YouTube's "Share > Embed" option</small>
        </div>
        <button type="submit" class="btn btn-primary">Add Video</button>
    </form>
</div>
<style>
    /* General container styling */
    .container {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 600px;
        margin: 40px auto 20px; /* Added top margin */
    }

    /* Heading styling */
    h1 {
        color: #b8860b;
        text-align: center;
        font-weight: bold;
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    /* Form group styling */
    .form-group {
        margin-bottom: 20px;
    }

    /* Label styling */
    label {
        font-weight: bold;
        color: #333;
        display: block;
        margin-bottom: 8px;
    }

    /* Textarea styling */
    textarea {
        border: 2px solid #b8860b;
        border-radius: 5px;
        padding: 10px;
        width: 100%;
        font-size: 16px;
        min-height: 150px;
        box-sizing: border-box;
    }

    /* Small text for hints */
    small.text-muted {
        color: #666;
        display: block;
        margin-top: 5px;
    }

    /* Button styling */
    .btn-primary {
        background-color: #b8860b;
        border: none;
        padding: 12px 20px;
        font-size: 1rem;
        font-weight: bold;
        border-radius: 5px;
        width: 100%;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #a37405;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .container {
            padding: 15px;
            width: 95%;
            margin: 30px auto 15px; /* Adjusted top margin for tablet */
        }
        
        h1 {
            font-size: 1.5rem;
        }
        
        textarea {
            font-size: 14px;
            min-height: 120px;
        }
        
        .btn-primary {
            padding: 10px 15px;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 10px;
            border-radius: 8px;
            margin: 80px auto 10px; /* Adjusted top margin for mobile */
        }
        
        h1 {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
    }
</style>
@endsection