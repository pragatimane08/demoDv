@extends('layouts.admin')

@section('content')
<div class="admin-container">
    <h1>Learning Videos</h1>

    @if(session('success'))
        <div class="alert success" id="success-message">{{ session('success') }}</div>
    @endif

    <div class="card-container">
        <div class="card" onclick="window.location.href='{{ route('admin.addvideo') }}';">
            <i class="fas fa-plus"></i>
            <h2>Add Video</h2>
        </div>
    </div>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Video Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($videos as $video)
                <tr>
                    <td data-label="Video Link">
                        <a href="{{ $video->video_link }}" target="_blank" class="video-link">
                            <span class="link-text">{{ $video->video_link }}</span>
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                    </td>
                    <td data-label="Actions" class="action-cell">
                        <div class="action-buttons">
                            <form action="{{ route('admin.deletevideo', $video->id) }}" method="POST">
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

    <!-- Integrated Pagination -->
    @if ($videos->hasPages())
    <div class="pagination-container">
        <div class="pagination">
            {{-- Previous Page Link --}}
            @if ($videos->onFirstPage())
                <span class="disabled">&laquo; Previous</span>
            @else
                <a href="{{ $videos->previousPageUrl() }}" rel="prev">&laquo; Previous</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($videos->getUrlRange(1, $videos->lastPage()) as $page => $url)
                @if ($page == $videos->currentPage())
                    <span class="active">{{ $page }}</span>
                @else
                    <a href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($videos->hasMorePages())
                <a href="{{ $videos->nextPageUrl() }}" rel="next">Next &raquo;</a>
            @else
                <span class="disabled">Next &raquo;</span>
            @endif
        </div>
    </div>
    @endif
</div>

<script>
    // Auto-hide success message after 5 seconds (5000 milliseconds)
    document.addEventListener('DOMContentLoaded', function() {
        const successMessage = document.getElementById('success-message');
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.opacity = '0';
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 500); // This matches the transition time
            }, 5000);
        }
    });
</script>

<style>
/* Enhanced Pagination Styles */
.pagination-container {
    margin: 2rem 0;
    display: flex;
    justify-content: center;
}

.pagination {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
    gap: 0.5rem;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

.pagination a,
.pagination span {
    display: inline-block;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.2s ease;
    border: 1px solid var(--border);
    color: var(--text);
    font-size: 14px;
}

.pagination a:hover {
    background-color: rgba(182, 142, 60, 0.1);
    border-color: var(--primary);
}

.pagination .active {
    background-color: var(--primary);
    color: white;
    border-color: var(--primary);
    font-weight: bold;
}

.pagination .disabled {
    color: #aaa;
    background-color: #f5f5f5;
    border-color: var(--border);
    cursor: not-allowed;
}

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
    max-width: 900px;
    margin: 0 auto;
    margin-bottom: 30px;
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
    transition: opacity 0.5s ease, display 0.5s ease;
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
    font-size: 16px;
}

th {
    background: rgba(182, 142, 60, 0.1);
    color: var(--primary);
    font-weight: bold;
}

td {
    border-bottom: 1px solid var(--border);
}

/* Link Styling */
.video-link {
    color: var(--primary);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 18px;
}

.link-text {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    max-width: 350px;
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

.delete-btn {
    color: white;
    background: var(--primary);
}

.delete-btn:hover {
    opacity: 0.9;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .admin-container {
        padding: 0.5rem;
        margin-bottom: 20px;
    }

    h1 {
        font-size: 22px;
        margin-top: 40px;
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

    .video-link {
        font-size: 12px;
    }

    .delete-btn {
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
        margin-top: 40px;
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

    .video-link {
        font-size: 10px;
    }

    .delete-btn {
        font-size: 10px;
        padding: 3px;
    }

    .pagination a, .pagination span {
        font-size: 10px;
        padding: 3px 6px;
    }
}

/* For very small devices (200px to 389px) */
@media (max-width: 389px) and (min-width: 200px) {
    .admin-container {
        padding: 0.5rem;
    }

    h1 {
        font-size: 18px;
        margin: 10px 0;
        margin-top: 40px;
    }

    .alert.success {
        font-size: 10px;
        padding: 6px;
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

    .link-text {
        max-width: 100px;
    }

    .action-buttons {
        gap: 5px;
    }

    .delete-btn {
        padding: 4px;
        font-size: 12px;
    }

    .pagination a, .pagination span {
        padding: 4px 8px;
        font-size: 12px;
    }
}

/* For medium devices (390px to 768px) */
@media (min-width: 390px) and (max-width: 768px) {
    .admin-container {
        padding: 1rem;
    }

    h1 {
        font-size: 20px;
        margin-top: 40px;
    }

    .card {
        width: 90%;
        max-width: 220px;
    }

    .card-container {
        gap: 15px;
    }

    th, td {
        font-size: 14px;
        padding: 10px 12px;
    }

    .delete-btn {
        font-size: 14px;
    }

    .pagination a, .pagination span {
        font-size: 14px;
        padding: 6px 10px;
    }
}

/* Responsive Pagination */
@media (max-width: 768px) {
    .pagination a,
    .pagination span {
        padding: 0.4rem 0.8rem;
        font-size: 0.9rem;
    }
}

@media (max-width: 480px) {
    .pagination {
        gap: 0.3rem;
    }
    
    .pagination a,
    .pagination span {
        padding: 0.3rem 0.6rem;
        font-size: 0.8rem;
    }
}
</style>
@endsection