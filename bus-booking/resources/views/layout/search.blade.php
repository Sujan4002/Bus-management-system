<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    color:white;
  }

  .search-data {
    padding: 30px;
  }
th{
  background-color:rgba(0,0,0,0.6);
    box-shadow: 0 0 10px #000;
    padding:10px;
    
}
td{
  background-color:rgba(0,0,0,0.5);
  box-shadow: 0 0 10px #000;
  padding:10px;
  margin-top:10px;
}
th, td {
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 30px;
  padding-right: 40px;
}
</style>
     <div class="banner">
            <nav>
                <div class="navbar">
                    <img src="assets/images/logo.png" alt="Company Logo" class="logo">
                    <ul>
                        <li><a href="{{url('/getyourseat')}}">Home</a></li>
                        <li><a href="#">Book ticket</a></li>
                        <li><a href="#">Cancel ticket</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#"><i class="fa-regular fa-user"></i>&nbsp;&nbsp;My profile</a></li>
                    </ul>
                </div>
                   </nav>
                   <div class="search-data">  
                    <table>
    <thead>
      <tr>
        <th>Bus No</th>
        <th>Bus Name</th>
        <th>Departure</th>
        <th>Arriaval </th>
        <th>Seats Available</th>
        <th>fare</th>
        <th>Booking</th>
      </tr>
    </thead>
    <div class="list-body">
    <tbody>
      @foreach($buses as $buses)
      <tr>
        <td>{{$buses->bus_id}}</td>
        <td>{{$buses->operator_name}}</td>
        <td> {{$buses->departure_time}}<br><br>
          {{$buses->departure}}
        </td>
        <td>{{$buses->arrival_time}} <br><br>
          {{$buses->arrival}}</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$buses->capacity}}
          <br>seats Available</td>
        <td></td>
        <td><a href=""class="btn btn-outline-danger">BOOK</a></td>
      </tr>
      @endforeach
    </tbody>
    </div>
  </table></div>
                
</div>
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <div class="footer-contain" style="background-color: #24262b;border:black">

            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4"> Getyourseat</h6>
                        <p>Getyourseat is the world's largest online bus ticket booking service trusted by over 25 million happy customers globally.</p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Info</h6>
                        <ul>
                            <li><a href="#">T&C</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Bus Timetable</a></li>
                            <li><a href="#">Ticket cancellation</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Contact us</h6>
                        <p><i class="fas fa-home me-3"></i> Asansol,paschim bardhaman</p>
                        <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold mb-4">Follow us</h6>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
</div>
  <div class="text-center p-3" style="background-color:#212225;color:#bbbbbb;">
    &copy; 2024 Copyright: getyourseat.com
  </div>
</div>
    </footer>
</body>
</html>