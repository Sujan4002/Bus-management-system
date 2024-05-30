<!DOCTYPE html>
<html>
<head>
    <title>Cancellation Ticket</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            margin: 10px 0;
            color: #555;
        }

        .ticket-details {
            border-top: 1px solid #ccc;
            padding-top: 15px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cancellation Ticket</h1>
        <p>Dear Passenger,</p>
        <p>We regret to inform you that your booking with the following details has been canceled:</p>
        <p><strong>Booking ID:</strong> {{ $ticket->booking_id }}</p>
        <p><strong>Name:</strong> {{ $ticket->firstname }} {{ $ticket->middlename }} {{ $ticket->lastname }}</p>
        <p><strong>Email:</strong> {{ $ticket->email }}</p>
        <p><strong>Seats:</strong> {{ $ticket->seat_number }}</p>
        <div class="ticket-details">
            <p><strong>Cancellation Date:</strong> {{ \Carbon\Carbon::now()->toDateString() }}</p>
            <p><strong>Note:</strong>Please contact our customer support for further assistance regarding your refund.</p>
            <p>We understand that this may cause inconvenience, and we apologize for any inconvenience caused.</p>
            <p>If you have any further questions or need assistance, please don't hesitate to contact our customer support.</p>
            <p>Thank you for choosing our service.</p>
            <p>Sincerely,</p>
            <p>The Management Team</p>
            <p>Geat Your Seat</p>
        </div>
    </div>
</body>
</html>
