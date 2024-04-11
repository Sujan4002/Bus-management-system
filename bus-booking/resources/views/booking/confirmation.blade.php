<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
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
    .msg{
            font-size: 20px;
            font-style: normal;
            color:#fff;
            position:absolute;
                top: 40%;
                left:50%;
                transform: translate(-50%,-50%);
                width: 500px;
                border-radius: 3px;
                padding: 20px 20px 3px 20px;
                box-shadow: 0px 5px 20px 10px rgb(0, 0, 0);
                background: rgba(0, 0, 0, 0.400);
        }

    </style>
</head>
<body>

    <div class="banner">
        <div class="msg alert alert-success">
        @if(session('success'))
    <h1 class="alert-heading">Thank You For Trusting Us With Your Journey!<h1>
</div>
    <?php  
    echo "<script>alert('Booking done successfully')</script>";
    ?>
    @endif
        </div>
          
        <a href="/getyourseat" class="btn btn-dark position-absolute top-0 end-0 m-3">BACK TO HOME</a>
       
</div>
</body>
</html>
