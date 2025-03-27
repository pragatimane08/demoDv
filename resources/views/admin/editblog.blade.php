@extends('layouts.admin')

@section('content')
    <div class="edit-blog-container">
        <h1>Edit Blog</h1>
        <form class="edit-blog-form" action="{{ route('admin.updateblog', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $blog->title }}" required>
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" accept="image/*">
                @error('image')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input type="url" name="link" id="link" value="{{ $blog->link }}" required>
                @error('link')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="submit-btn">Update Blog</button>
        </form>
    </div>

    <style>
        /* Base Styles */
        .edit-blog-container {
            /* font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif; */
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #b8860b;
            text-align: center;
            margin: 20px 0 30px;
            font-size: 32px;
            font-weight: 600;
        }

        .edit-blog-form {
            background-color: white;
            border: 2px solid #b8860b;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            color: #b8860b;
            margin-bottom: 8px;
            font-size: 16px;
        }

        input[type="text"],
        input[type="url"],
        input[type="file"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #b8860b;
            box-shadow: 0 0 0 3px rgba(184, 134, 11, 0.2);
        }

        .error {
            color: #e53e3e;
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }

        .submit-btn {
            background-color: #b8860b;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 14px 20px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: all 0.2s ease;
        }

        .submit-btn:hover {
            background-color: #a6760a;
            transform: translateY(-1px);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Responsive Breakpoints */
        
        /* For tablets and small laptops (Surface Pro 7, iPad Mini) */
        @media (max-width: 1024px) {
            .edit-blog-container {
                padding: 15px;
            }
            
            h1 {
                font-size: 28px;
                margin-top: 40px;
            }
        }

        /* For large phones and small tablets (iPad Mini portrait, foldables) */
        @media (max-width: 768px) {
            .edit-blog-form {
                padding: 20px;
            }
            
            input[type="text"],
            input[type="url"],
            input[type="file"] {
                padding: 10px 12px;
                font-size: 15px;
            }
            
            .submit-btn {
                padding: 12px 18px;
            }
        }

        /* For foldables in folded state and large phones (Galaxy Z Fold folded) */
        @media (max-width: 600px) {
            h1 {
                font-size: 24px;
                margin-top: 40px;
            }
        }

        /* For most smartphones (iPhone XR, Pixel 7, Galaxy S20) */
        @media (max-width: 480px) {
            .edit-blog-container {
                padding: 10px;
            }
            
            .edit-blog-form {
                padding: 15px;
                border-width: 1px;
            }
            
            h1 {
                font-size: 22px;
                margin-top: 40px;
            }
            
            label {
                font-size: 15px;
            }
            
            input[type="text"],
            input[type="url"],
            input[type="file"] {
                padding: 8px 10px;
                font-size: 14px;
            }
        }

        /* For small smartphones (iPhone SE) */
        @media (max-width: 375px) {
            h1 {
                font-size: 20px;
                margin-top: 40px;
            }
            
            .edit-blog-form {
                padding: 12px;
            }
            
            .submit-btn {
                padding: 10px 15px;
                font-size: 15px;
            }
        }

        /* For landscape orientation on phones */
        @media (max-height: 480px) and (orientation: landscape) {
            .edit-blog-container {
                padding: 5px;
            }
            
            h1 {
               
                font-size: 20px;
                margin-top: 40px;
            }
            
            .form-group {
                margin-bottom: 12px;
            }
        }
    </style>
@endsection