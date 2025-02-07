@extends('layouts.admin')

@section('content')
<div class="admin-container">
    <h1>All Blogs</h1>

    @if(session('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif

    <div class="card-container">
        <div class="card" onclick="window.location.href='{{ route('admin.addblog') }}';">
            <i class="fas fa-pen"></i>
            <h2>Create Blog</h2>
        </div>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blogs as $blog)
                <tr>
                    <td data-label="Title">{{ $blog->title }}</td>
                    <td data-label="Image">
                        <img src="{{ asset('storage/'.$blog->image) }}" alt="Blog Image">
                    </td>
                    <td data-label="Link">
                        <a href="{{ $blog->link }}" target="_blank" class="blog-link">
                            <span class="link-text">{{ $blog->link }}</span>
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </td>
                    <td data-label="Actions" class="action-cell">
                        <div class="action-buttons">
                            <a href="{{ route('admin.editblog', $blog->id) }}" class="action-btn">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.deleteblog', $blog->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="pagination">
        @if($blogs->onFirstPage())
            <span class="disabled">Previous</span>
        @else
            <a href="{{ $blogs->previousPageUrl() }}">Previous</a>
        @endif

        @foreach(range(1, $blogs->lastPage()) as $page)
            @if($page == $blogs->currentPage())
                <span class="active">{{ $page }}</span>
            @else
                <a href="{{ $blogs->url($page) }}">{{ $page }}</a>
            @endif
        @endforeach

        @if($blogs->hasMorePages())
            <a href="{{ $blogs->nextPageUrl() }}">Next</a>
        @else
            <span class="disabled">Next</span>
        @endif
    </div>
</div>

<style>
/* Base Styles */
:root {
    --primary: #b68e3c;
    --primary-hover: #a17532;
    --background: #f8f9fa;
    --text: #333;
    --border: #ddd;
}

/* Container */
.admin-container {
    padding: 1rem;
    max-width: 1200px;
    margin: 0 auto;
}

/* Header */
h1 {
    text-align: center;
    color: var(--primary);
    font-size: 28px;
    margin: 15px 0;
}

/* Alert */
.alert.success {
    background-color: white;
    color: var(--primary);
    padding: 8px;
    margin: 8px 0;
    border: 1px solid rgb(241, 186, 6);
    border-radius: 5px;
    text-align: center;
}

/* Card */
.card-container {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 20px;
    margin: 20px 0;
}

.card {
    background: white;
    border: 1px solid var(--primary);
    border-radius: 8px;
    padding: 20px;
    width: 200px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    text-align: center;
}

.card:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
}

.card i {
    font-size: 24px;
    color: var(--primary);
    margin-bottom: 10px;
}

.card h2 {
    color: var(--primary);
    font-size: 18px;
    margin: 0;
    font-weight: bold;
}

/* Table */
.table-responsive {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    overflow-x: auto;
    margin: 20px 0;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    font-size: 14px;
}

th {
    background: rgba(182, 142, 60, 0.1);
    color: var(--primary);
    font-weight: bold;
}

td {
    border-bottom: 1px solid var(--border);
}

td img {
    width: 40px;
    height: 40px;
    object-fit: cover;
    border-radius: 5px;
}

/* Link Styling */
.blog-link {
    color: var(--primary);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 14px;
}

.link-text {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    max-width: 150px;
}

/* Action Buttons */
.action-buttons {
    display: flex;
    gap: 8px;
}

.action-btn, .delete-btn {
    padding: 6px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
    font-size: 14px;
}

.action-btn {
    color: var(--primary);
    background: rgba(182, 142, 60, 0.1);
}

.delete-btn {
    color: white;
    background: var(--primary);
}

.action-btn:hover, .delete-btn:hover {
    opacity: 0.9;
}

/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
    flex-wrap: wrap;
    margin: 20px 0;
}

.pagination a, .pagination span {
    padding: 6px 12px;
    border-radius: 5px;
    min-width: 30px;
    text-align: center;
    font-size: 14px;
    border: 1px solid var(--border);
}

.pagination .active {
    background: var(--primary);
    color: white;
    border-color: var(--primary);
}

.pagination .disabled {
    background: var(--background);
    color: #999;
    cursor: not-allowed;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .admin-container {
        padding: 0.5rem;
    }

    h1 {
        font-size: 22px;
    }

    .alert.success {
        font-size: 14px;
        padding: 6px;
    }

    .card-container {
        flex-direction: column;
        align-items: center;
    }

    .card {
        width: 100%;
        max-width: 300px;
        padding: 15px;
    }

    .card i {
        font-size: 20px;
    }

    .card h2 {
        font-size: 16px;
    }

    table th, table td {
        font-size: 12px;
        padding: 10px;
    }

    td img {
        width: 30px;
        height: 30px;
    }

    .blog-link {
        font-size: 12px;
    }

    .action-btn, .delete-btn {
        font-size: 12px;
        padding: 4px;
    }

    .pagination a, .pagination span {
        font-size: 12px;
        padding: 4px 8px;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 18px;
    }

    .alert.success {
        font-size: 12px;
        padding: 4px;
    }

    .card {
        width: 100%;
        max-width: 250px;
        padding: 10px;
    }

    .card i {
        font-size: 18px;
    }

    .card h2 {
        font-size: 14px;
    }

    table th, table td {
        font-size: 10px;
        padding: 8px;
    }

    td img {
        width: 25px;
        height: 25px;
    }

    .blog-link {
        font-size: 10px;
    }

    .action-btn, .delete-btn {
        font-size: 10px;
        padding: 3px;
    }

    .pagination a, .pagination span {
        font-size: 10px;
        padding: 3px 6px;
    }
}
/* Responsive Styles */

/* For very small devices (min-width: 200px and max-width: 389px) */
@media (max-width: 389px) and (min-width: 200px) {
    .admin-container {
        padding: 0.5rem;
    }

    h1 {
        font-size: 18px;
        margin: 10px 0;
    }

    .alert.success {
        font-size: 10px;
        padding: 6px;
    }

    .card-container {
        flex-direction: column;
        gap: 10px;
    }

    .card {
        width: 100%;
        max-width: 180px;
        padding: 15px;
    }

    .card i {
        font-size: 20px;
    }

    .card h2 {
        font-size: 16px;
    }

    .table-responsive {
        margin: 10px 0;
    }

    th, td {
        font-size: 12px;
        padding: 8px 10px;
    }

    td img {
        width: 30px;
        height: 30px;
    }

    .blog-link {
        font-size: 12px;
    }

    .link-text {
        max-width: 100px;
    }

    .action-buttons {
        flex-wrap: wrap;
        gap: 5px;
    }

    .action-btn, .delete-btn {
        padding: 4px;
        font-size: 12px;
    }

    .pagination a, .pagination span {
        padding: 4px 8px;
        font-size: 12px;
    }
}

/* General responsive styles for larger devices (390px and up) */
@media (min-width: 390px) and (max-width: 768px) {
    .admin-container {
        padding: 1rem;
    }

    h1 {
        font-size: 20px;
    }

    .card {
        width: 90%;
        max-width: 220px;
    }

    .card-container {
        flex-wrap: wrap;
        gap: 15px;
    }

    th, td {
        font-size: 14px;
        padding: 10px 12px;
    }

    .action-btn, .delete-btn {
        font-size: 14px;
    }

    .pagination a, .pagination span {
        font-size: 14px;
        padding: 6px 10px;
    }
}




</style>

@endsection