<div class="sidebar" id="sidebar">
        <div class="profile-section">
            <!-- <img src="https://via.placeholder.com/80" alt="Profile"> -->
            <h4>Admin Dashboard</h4>
            <!-- <p>Admin Role</p> -->
        </div>
        <a href="{{route('admin.dashboard')}}><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="{{route('admin.viewblog')}}"><i class="fas fa-users"></i> Blogs</a>
        <a href="{{route('admin.viewnewsletter')}}"><i class="fas fa-user-plus"></i>Newsletter</a>
        
        <a href="#reports"><i class="fas fa-chart-line"></i> Reports</a>
        <hr>
        <a href="/change-password"><i class="fas fa-key"></i> Change Password</a>
        <form action="/logout" method="POST" style="display: inline;">
    @csrf
    <button type="submit" style="color: white; text-decoration: none; display: flex; align-items: center; padding: 15px 20px; gap: 10px; background: none; border: none; cursor: pointer; font-size: 1.0rem; width: 100%;">
        <i class="fas fa-sign-out-alt" style="font-size: 1.2rem;"></i> Logout
    </button>
</form>



    </div>

   

        <!-- Main Section -->
       
    </div>