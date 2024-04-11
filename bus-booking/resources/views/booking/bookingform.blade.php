<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking form</title>
    <link rel="stylesheet" href="assets/css/bookingform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family:"Poppins", sans-serif;
    box-sizing: border-box;
}
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('/assets/images/bus.jpg');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
}
.booking-form {
    margin-left: 40px;
        width: 400px;
        background: rgba(0, 0, 0, 0.785);
        border-radius: 3px;
        text-align: centre;
        padding: 20px 20px 3px 20px;
        box-shadow: 0px 5px 20px 10px rgba(0, 0, 0, 0.929);
    }
    .form-title{
        font-size: 25px;
        font-weight: 400;
        color: #fff;
        text-align: center;
        margin-bottom: 20px;
    }

    form .field{
        width:100%;
        margin-bottom: 20px;
    }
    form input{
        height: 40px;
        width: 100%;
        outline: gray;
        padding: 0 15px;
        font-size: 18px;
        border-radius: 5px;
        border: 1px solid #34495e;
        border-bottom-width:2px;
        margin-bottom: 15px;

    }
    form input::placeholder{
        color: black;
        font-size: 15px;
    }
    form .radio_btn{
        margin-top:5px;
        display: flex;
        flex-direction: row;
        font-size: 19px;
        font-weight: 500;
        color: #fff;
    }
    form input[type="radio"]{
        width: 20px;
        height: 20px;
        margin: 0 10px;
    }
    form .select-btn{
        margin-top: 20px;

    }
    form select{
        height: 40px;
        width: 100%;
        outline: none;
        padding: 0 15px;
        border-radius: 5px;
        border-bottom-width: 2px ;
        font-size:15px;

    }
   form input[type="submit"]{
    margin-top: 30px;
    border: red;
    background: #34495e;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
   }         
  form input[type="submit"]:hover{
    background: #4f3367;
   }
   .bus-details{
    width: 40%;
   margin: 70px;
   height: 200px;
   }
 .table{
        box-shadow: 0px 5px 20px 10px rgba(0, 0, 0, 0.929);
        background: rgba(0, 0, 0, 0.785);
        border-radius: 3px;
        text-align:center;
        padding: 20px 20px 5px 20px;
        box-shadow: 0px 3px 10px 5px rgba(0,0,0,0.2);
       
 }

.table-title{
    font-size: 26px;
        font-weight: 400;
        color: #fff;
}
.category{
    width: 100%;
    font-size: 20px;
    font-style: oblique;
    font-weight: 500;
    color: beige;
}

th, td {
    padding-top: 10px;
    padding-bottom: 15px;
    padding-left: 20px;
    padding-right: 20px;
  }
  .seatSelection{
margin-top:15px;
margin-bottom:15px;
}
    </style>
</head>
<body>

    <div class="banner">
        <div class="booking-form">
            <h1 class="form-title"><b>Passenger Details</b></h1>
         <form action="{{url('/booking/'. $buses->ride_id)}}" method="post">
            @csrf
            @method('post')
           <div class="field fname">
            <div class="input-area">
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" pattern="[A-Z,a-z]{1,20}" required >
            
            </div>
            </div>
            <div class="field mname">
                <div class="input-area">
                <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name" pattern="[A-Z,a-z]{1,20}" >
                </div>
                </div>
            <div class="field lname">
                    <div class="input-area">
                    <input type="text" class="form-control" id="laststname" name="lastname" placeholder="Last Name" pattern="[A-Z,a-z]{1,20}"   required>
                   
                    </div>
</div>
             <div class="field email">
                        <div class="input-area">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" pattern="[^ @]*@[^ @]*" required>
                       
                        </div>
                        </div>
            <div class="Select-btn">
                        <select name="locations" required>
                            <option value="">Select Boarding Bus Stand</option>
                            <option value="Asn">Asansol Bus Stand</option>
                            <option value="Ranj">Raniganj Bus Stand</option>
                            <option value="Durgp">Durgapur Bus Stand</option>
                            <option value="Kol">Kolkata Bus Stand</option>
                        </select>
                        <!--<input type="select-btn" class="form-control" id="locations">-->
            </div>
            <div class="radio_btn">
                     <label>Gender:</label>
                    <input type="radio" name="gender" id="male" value="m" required>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="f">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="others" value="o">
                    <label for="others">Others</label>
                            </div>
                            <div class="seatSelection">
                                <select name="seat_number">
    
                                    <option value="">Select Seat</option>
                                    @foreach($seatnumber as $seatnumber)
                                    <option value="{{$seatnumber}}">{{$seatnumber}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="Select-btn">
        <select name="payment" required>
            <option value="">Payment options </option>
            <option value="online">Online Payment on Boarding</option>
            <option value="cash">Cash Payment on Boarding</option>

        </select>
</div>
             <input type="submit" value="Confirm Booking">
                     
    </form>
        </div>
       <div class="bus-details">
       <div class="table">
 
       @if(session('error'))
                                <div class="alert alert-danger "role="alert">
             {{session('error')}}
                                </div>
                                @endif
 <h1 class="table-title"><b>Bus Details</b></h1>
 <table>
     <tr class="category">
       <th>Bus Number</th>
       <th>Bus Name</th>
       <th>Fare</th>
       
     </tr>
     <tr>
        <td>{{$busdetail->bus_number}}</td>
        <td>{{$busdetail->operator_name}}</td>
        <td>{{$buses->fare}}</td>
     </tr>
   </table>
</div>

        <a href="/getyourseat" class="btn btn-dark position-absolute top-0 end-0 m-3">BACK TO HOME</a>
       </div>
</div>
</body>
</html>
