@extends('layouts.admin')

@section('content')
<h1>All Reports</h1>

@if(session('success'))
    <div class="alert success">{{ session('success') }}</div>
@endif

<div class="card" onclick="window.location.href='{{ route('admin.createreport') }}';">
    <i class="fas fa-file-alt"></i> <!-- Add a file icon -->
    <h2>Create Report</h2>
</div>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Image</th>
            <th>PDF</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reports as $report)
        <tr>
            <td>{{ $report->title }}</td>
            <td><img src="{{ asset('storage/' . $report->image) }}" width="50"></td>
            <td><a href="{{ asset('storage/' . $report->pdf) }}"><i class="fas fa-file-pdf"></i> Download PDF</a></td>
            <td>
                <a href="{{ route('reports.edit', $report->id) }}" class="action-btn"><i class="fas fa-edit"></i></a>
                <form action="{{ route('reports.destroy', $report->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="delete-btn"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Pagination Controls -->
<div class="pagination">
    @if($reports->onFirstPage())
        <span class="disabled">Previous</span>
    @else
        <a href="{{ $reports->previousPageUrl() }}">Previous</a>
    @endif

    @foreach(range(1, $reports->lastPage()) as $page)
        @if($page == $reports->currentPage())
            <span class="active">{{ $page }}</span>
        @else
            <a href="{{ $reports->url($page) }}">{{ $page }}</a>
        @endif
    @endforeach

    @if($reports->hasMorePages())
        <a href="{{ $reports->nextPageUrl() }}">Next</a>
    @else
        <span class="disabled">Next</span>
    @endif
</div>
<style>
    /* Pagination Styling */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0;
    }

    .pagination a, .pagination span {
        padding: 10px 15px;
        margin: 0 5px;
        border: 1px solid #ddd;
        border-radius: 5px;
        color: #b68e3c;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .pagination a:hover {
        background-color: #f4f4f4;
    }

    .pagination .active {
        background-color: #b68e3c;
        color: white;
        border-color: #b68e3c;
    }

    .pagination .disabled {
        background-color: #e9ecef;
        color: #6c757d;
        border-color: #e9ecef;
        cursor: not-allowed;
    }

    /* Page Header */
    h1 {
        text-align: center;
        margin-top: 20px;
        color: #b68e3c; /* Gold color */
    }

    /* Success Message */
    .alert.success {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f4f4f4;
        color: #b68e3c;
        font-weight: bold;
    }

    td img {
        max-width: 50px;
        height: auto;
        border-radius: 5px;
    }

    td a {
        color: #b68e3c;
        text-decoration: none;
    }

    td a:hover {
        text-decoration: underline;
    }

    form .delete-btn {
        background-color: #b68e3c; /* Gold color */
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    form .delete-btn:hover {
        background-color: #a17532; /* Darker gold on hover */
    }

    /* Action Button Styling */
    .action-btn {
        font-size: 14px;
        padding: 5px 10px;
        color: #b68e3c;
        transition: color 0.3s ease;
    }

    .action-btn:hover {
        color: #a17532; /* Darker gold on hover */
    }

    .delete-btn {
        font-size: 14px;
        background-color: #b68e3c;
        border-radius: 5px;
        padding: 5px 10px;
        color: white;
        cursor: pointer;
    }

    /* Card Styling */
    .card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        max-width: 250px;
        margin: 20px auto;
        text-decoration: none;
    }

    .card:hover {
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }

    .card i {
        font-size: 40px;
        color: #b68e3c;
        margin-bottom: 10px;
    }

    .card h2 {
        color: #b68e3c;
        font-size: 18px;
        font-weight: bold;
        margin: 0;
    }

    /* Responsive Design */
    @media screen and (max-width: 600px) {
        table, th, td {
            font-size: 12px;
        }

        td img {
            max-width: 40px;
        }

        .card {
            max-width: 100%;
        }

        th, td {
            padding: 8px;
        }

        .pagination {
            flex-wrap: nowrap; /* Keep pagination horizontally */
        }

        .action-btn, .delete-btn {
            font-size: 12px;
            padding: 3px 6px;
        }
    }

    @media screen and (max-width: 200px) {
        table, th, td {
            font-size: 10px;
        }

        td img {
            max-width: 30px;
        }

        .card {
            padding: 10px;
        }

        th, td {
            padding: 5px;
        }
    }
</style>
<!-- Include the same CSS and JS as in the newsletter view -->
@endsection