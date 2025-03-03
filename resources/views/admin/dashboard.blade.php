@extends('layouts.admin')

@section('content')


        <!-- Navbar -->
        <!-- <div class="navbar">
            <a href="{{route('admin.dashboard')}}" class="navbar-brand">Admin Dashboard</a>
            <i class="fas fa-bars toggle-btn" id="toggleSidebar"></i>
        </div> -->
        <style>
  body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    height: 100vh;
    background-color: #f4f4f4;
    font-family: Arial, sans-serif;
    text-align: center;
}

.admin-dashboard {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 95%;
    max-width: 1200px;
    margin-left: auto;
}

h1 {
    color: #d0a94e;
    margin-bottom: 10px;
    font-size: 2rem;
}

h2 {
    color: #d0a94e;
    font-size: 1.5rem;
    margin-bottom: 8px;
}

p {
    color: #333;
    font-size: 1rem;
}

@media (max-width: 768px) {
    .admin-dashboard {
        width: 98%;
        max-width: 750px;
        padding: 20px;
    }
    h1 {
        font-size: 1.8rem;
    }
    h2 {
        font-size: 1.4rem;
    }
    p {
        font-size: 0.9rem;
    }
}

@media (max-width: 480px) {
    .admin-dashboard {
        width: 100%;
        padding: 15px;
        border-radius: 0;
        box-shadow: none;
    }
    h1 {
        font-size: 1.6rem;
    }
    h2 {
        font-size: 1.3rem;
    }
    p {
        font-size: 0.8rem;
    }
}

        </style>
        <!-- Main Section -->
        <div class="admin-dashboard"> 
        <h1>Welcome to the Dhanavruksha Dashboard</h1>
        <p>Manage and track your activities seamlessly.</p>
    </div>
   
    
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

    <!-- Other content -->
@endsection