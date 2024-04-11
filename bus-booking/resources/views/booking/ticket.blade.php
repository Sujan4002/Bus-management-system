<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <style>
        body{
            font-family: Arial,sans-serif;
            margin:0;
            padding:0;
          background-color:#f0f0f0;
        }
        .ticket{
            width: 500px;
            margin: 20px auto;
            padding:20px;
            background-color: #fff;
            border:1px solid #ccc;
            border-radius:5px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
        .ticket-head{
            text-align:center;
            margin-bottom:20px ;
        }
        .ticket-body{
            padding: 10px;
        }
        .ticket-info{
            margin-bottom: 10px;
        }
        .ticket-info span{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="ticket-head">
        <h1>Ticket</h1>
        </div>
       <div class="ticket-body">
       <div class="ticket-info">
            <span>Booking Id :</span>&nbsp;{{$ticket->booking_id}}
           </div>
           <div class="ticket-info">
            <span>Bus Number :</span>&nbsp;{{$ticket->bus_number}}
           </div>
           <div class="ticket-info">
            <span>Bus Name :</span>&nbsp;{{$ticket->operator_name}}
           </div>
           <div class="ticket-info">
            <span>Name :</span>&nbsp;{{$ticket->firstname}} {{$ticket->lastname}}
           </div>
           <div class="ticket-info">
            <span>Gender :</span>&nbsp;{{$ticket->gender}}
           </div>
           <div class="ticket-info">
            <span>Email :</span>&nbsp;{{$ticket->email}}
           </div>

           <div class="ticket-info">
            <span>Seat Number :</span>&nbsp;{{$ticket->seat_number}}
           </div>
           <div class="ticket-info">
            <span>Boarding Location :</span>&nbsp;{{$ticket->locations}}
           </div>
           <div class="ticket-info">
            <span>Payment Mode :</span>&nbsp;{{$ticket->payment}}
           </div>
           <div class="ticket-info">
            <span>Fare :</span>&nbsp;{{$ticket->fare}}
           </div>
       </div>
    </div>
    
    
</body>
</html>