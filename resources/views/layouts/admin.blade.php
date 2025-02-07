


<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar with Profile</title>
    <!-- FontAwesome Icons -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-FLKfE5DwKZos+IcF3JRCrGyHYhlhY1OqL9v2n5eFZWNURRa5KhRZj8GrI/rvZoI2" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
        
        <style>
    body {
        display: flex;
        margin: 0;
        font-family: Arial, sans-serif;
        height: 100vh;
        background-color: #f4f4f4; /* Light background for the entire page */
    }

    .sidebar {
        width: 250px;
        background: #d4af37; /* Gold color */
        color: white;
        position: fixed;
        height: 100%;
        left: 0;
        top: 0;
        transform: translateX(0);
        transition: transform 0.3s ease;
    }

    .sidebar.hidden {
        transform: translateX(-250px);
    }

    .sidebar .profile-section {
        text-align: center;
        padding: 20px;
        border-bottom: 1px solid #fff; /* White border for contrast */
    }

    .sidebar .profile-section img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-bottom: 10px;
    }

    .sidebar .profile-section h4 {
        margin: 0;
        font-size: 18px;
        color: white;
    }

    .sidebar .profile-section p {
        font-size: 14px;
        color: #f8f9fa; /* Light gray text for better readability */
    }

    .sidebar a,
    .sidebar button {
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 15px 20px;
        gap: 10px;
        font-size: 1.0rem; /* Adjusted size */
    }

    .sidebar a i,
    .sidebar button i {
        font-size: 1.2rem; /* Icon size */
    }

    .sidebar a:hover,
    .sidebar button:hover {
        background: #f1c40f; /* Brighter gold on hover */
    }

    .content {
        flex-grow: 1;
        margin-left: 250px;
        width: calc(100% - 250px);
        padding: 20px;
        background: #fff; /* White background for content */
        overflow-y: auto;
        transition: margin-left 0.3s ease;
    }

    .content.collapsed {
        margin-left: 0;
        width: 100%;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #d4af37; /* Gold color for navbar */
        color: white;
        padding: 10px 20px;
    }

    .navbar .navbar-brand {
        font-size: 1.5rem;
        color: white;
        text-decoration: none;
    }

    .toggle-btn {
        display: none;
        cursor: pointer;
        font-size: 1.5rem;
    }

    @media (max-width: 768px) {
        .toggle-btn {
            display: block;
        }

        .content {
            margin-left: 0;
            width: 100%;
        }

        .sidebar {
            transform: translateX(-250px);
        }

        .sidebar.active {
            transform: translateX(0);
        }
    }
</style>

</head>
<body>


@include('partials.adminnavbar')
<div class="content" id="content">
        
        @yield('content')
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleSidebar');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
    </script>
</body>
</html>
     