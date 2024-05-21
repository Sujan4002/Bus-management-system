<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Management System Dashboard</title>
   
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

    <style>
          *{
    padding: 0;
    margin: 0;
    font-family:"Poppins", sans-serif;
    box-sizing: border-box;
}
    .con{
        margin:auto;
        height: 490px;
          width:400px;
          border: 1px solid #ccc;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
   
  <div class="con">        
  @if(session('success'))
                <div class="alert alert-success "role="alert">
               {{session('success')}}
                </div>
                @endif
               
                    <form method="post" action="{{url('admin/addbus')}}">
                        @csrf 
                        @method('post')
                        <h1><b>Add Bus</b></h1>
                        <div class="form-group">
                            <label for="bus_id">BUS ID:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Bus id"name="bus_id">
                        </div>
                        <div class="form-group">
                            <label for="operator_name">OPERATOR NAME:</label>
                            <input type="text" class="form-control" id="operator_name" placeholder="Enter Operator name"name="operator_name">
                        </div>
                        <div class="form-group">
                            <label for="bus_number">BUS NUMBER:</label>
                            <input type="number" class="form-control" id="bus_number" placeholder="Bus number"name="bus_number">
                        </div>
                        <div class="form-group">
                            <label for="capacity">CAPACITY:</label>
                            <input type="number" class="form-control" id="capacity" placeholder="Bus Capacity"name="capacity">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</body>
</html>