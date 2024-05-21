<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Table</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <style>
        *{
    padding: 0;
    margin: 0;
    font-family:"Poppins", sans-serif;
    box-sizing: border-box;
}
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
		height:100vh;
        background-color:#007bff;
            color: #fff;
        }

        .sidebar .nav-link {
            color: #fff;
            transition: all 0.3s;
        }

        .sidebar .nav-link:hover {
            background-color: blue;
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
        .details-con{

            margin:auto;
        height: 200px;
          width:400px;
          border: 1px solid #ccc;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
        }
        strong{
            color:orange;
        }
        h1{
            color: orange;
        }
    </style>
</head>
<body>


    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Bus Management System</a>
       
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
    </nav>

   
    <div class="container-fluid">
        <div class="row">
            
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{url('admin/dashboard')}}">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/busroute')}}">
                                <i class="fas fa-bus"></i> Bus Routes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/userlist')}}">
                                <i class="fas fa-users"></i> Users 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('admin/bookings')}}">
                                <i class="fas fa-ticket-alt"></i> Bookings
                            </a>
                        </li>
                       <li>
                       <a class="nav-link" href="{{url('admin/enquiry')}}">
                            <i class="fas fa-comment"></i></i> 
                                Enquiry
                            </a>
                       </li>
                    </ul>
                </div>
            </nav>
            <div class="details-con">
              

            <h1>
                User details
               </h1>
               <div class="userdetails">
                 <p><strong>Name:</strong>&nbsp;&nbsp;{{$user->name}}</p>
                 <p><strong>Email:</strong>&nbsp;&nbsp;{{$user->email}}</p>
                 <p><strong>Role:</strong>&nbsp;&nbsp;@if($user->role==2)
                
                Admin
            @else Customer
        @endif</p> </div> 
            </div>
            
        </div>
    </div>
    
</body>
</html>
