<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Management System Dashboard</title>
   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
   
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet"> <!-- Replace with your custom CSS file -->
    <style>
        body {
            background-color: #f8f9fa;
            margin:0;
            padding:0;
            height: 100vh;
        }

        .sidebar {
		height:100vh;
            background-color: #343a40;
            color: #fff;
        }

        .sidebar .nav-link {
            color: #fff;
            transition: all 0.3s;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
        }

        .main-content {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .main-content h1 {
            color: #333;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Bus Management System</a>
       
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('admin/logout')}}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
    </nav>

   
    <div class="container-fluid">
        <div class="row">
            
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/dashboard">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-bus"></i> Bus Routes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/userlist')}}">
                                <i class="fas fa-users"></i> Users 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-ticket-alt"></i> Tickets
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </nav>
            <main class="col-lg-10 ml-auto">
                <div class="main-content">
                    <h1 class="h2">Welcome to the Bus Management System Dashboard</h1>
                    <p>This dashboard allows you to manage bus routes,users,tickets and more.</p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
</body>
</html>
