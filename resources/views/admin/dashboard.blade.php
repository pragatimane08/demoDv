
@extends('layouts.admin')

@section('content')


        <!-- Navbar -->
        <div class="navbar">
            <a href="{{route('admin.dashboard')}}" class="navbar-brand">Admin Dashboard</a>
            <i class="fas fa-bars toggle-btn" id="toggleSidebar"></i>
        </div>

        <!-- Main Section -->
        <div>
            <h1>Welcome to the Dhanavruksha Dashboard</h1>
            <p>This is a responsive admin template with a collapsible sidebar for mobile view, now including profile and additional options.</p>
        </div>
   
    
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

    <!-- Other content -->
@endsection