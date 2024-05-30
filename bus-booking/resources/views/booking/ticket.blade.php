<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .ticket {
            width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .ticket-head {
            text-align: center;
            margin-bottom: 20px;
        }

        .ticket-body {
            padding: 10px;
        }

        .ticket-info {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .ticket-info span {
            font-weight: bold;
            color: #333;
        }

        .ticket-info .value {
            margin-left: 10px;
            color: #666;
        }

        .ticket-info .note {
            color: #888;
            font-style: italic;
        }

        .rupee-icon {
            font-size: 14px;
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
                <span>Booking ID:</span>
                <span class="value">{{$ticket->booking_id}}</span>
            </div>
            <div class="ticket-info">
                <span>Bus Number:</span>
                <span class="value">{{$ticket->bus_number}}</span>
            </div>
            <div class="ticket-info">
                <span>Bus Name:</span>
                <span class="value">{{$ticket->operator_name}}</span>
            </div>
            <div class="ticket-info">
                <span>Name:</span>
                <span class="value">{{$ticket->firstname}} {{$ticket->lastname}}</span>
            </div>
            <div class="ticket-info">
                <span>Gender:</span>
                <span class="value">{{$ticket->gender}}</span>
            </div>
            <div class="ticket-info">
                <span>Email:</span>
                <span class="value">{{$ticket->email}}</span>
            </div>
            <div class="ticket-info">
                <span>Seat Number:</span>
                <span class="value">{{$ticket->seat_number}}</span>
            </div>
            <div class="ticket-info">
                <span>Boarding Location:</span>
                <span class="value">{{$ticket->locations}}</span>
            </div>
            <div class="ticket-info">
                <span>Payment Mode:</span>
                <span class="value">{{$ticket->payment}}</span>
            </div>
            <div class="ticket-info">
                <span>Fare:</span>
                <span class="value">{{ $total_fare }} rupees</span>
            </div>
            <div class="ticket-info">
                <span>Booking Date:</span>
                <span class="value">{{ \Carbon\Carbon::now()->toDateString() }}</span>
            </div>
            <div class="ticket-info note">
                Please present this ticket at the boarding point for verification. Thank you for choosing our service.
            </div>
        </div>
    </div>
</body>
</html>
