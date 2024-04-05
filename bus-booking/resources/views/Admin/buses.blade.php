<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Table</title>
   
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
                            <a class="nav-link" href="#">
                                <i class="fas fa-ticket-alt"></i> Bookings
                            </a>
                        </li>
                        <li> <a class="nav-link" href="{{url('admin/enquiry')}}">
                            <i class="fas fa-comment"></i></i> 
                                Enquiry
                            </a></li>
                    </ul>
                </div>
            </nav>
          
            <div class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="main-content">
                    <h1>BUSES TABLE<a href="{{url('/admin/adduser')}}" class="btn btn-success float-right">Add BUSES</a></h1>
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>BUS ID</th>
                                    <th>OPERATOR NAME</th>
                                    <th>BUS NUMBER</th>
                                    <th>CAPACITY</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($busroutes as $busRoutes)
                                <tr>
                                    <td>{{$busRoutes->bus_id}}</td>
                                    <td>{{$busRoutes->operator_name}}</td>
                                    <td>{{$busRoutes->bus_number}}</td>
                                    <td>{{$busRoutes->capacity}}</td>
                                    <td class="mr-2">
                                        <button class="btn btn-primary ">Edit</button>
                                        <form action="" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                                        <button class="btn btn-info">View</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
