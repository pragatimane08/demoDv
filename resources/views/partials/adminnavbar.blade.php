<div class="navbar">
        <button class="toggle-btn" id="toggleSidebar">☰</button>
      
    </div>

    <div class="sidebar" id="sidebar">
        <div class="profile-section">
            <h4>Admin Dashboard</h4>
        </div>
        <a href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="{{route('admin.viewblog')}}"><i class="fas fa-users"></i> Blogs</a>
        <a href="{{route('admin.viewnewsletter')}}"><i class="fas fa-user-plus"></i> Newsletter</a>
        <a href="{{route('admin.viewreport')}}"><i class="fas fa-chart-line"></i> Reports</a>
        <a href="{{route('admin.viewvideos')}}"><i class="fas fa-video"></i> Video</a>

        
        <hr>
        <a href="/change-password"><i class="fas fa-key"></i> Change Password</a>
        <form action="/logout" method="POST" style="display: inline; width: 100%;">
            @csrf
            <button type="submit">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>
