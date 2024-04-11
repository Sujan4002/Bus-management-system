<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/faq.css">
    <link rel="stylesheet" href="assets/css/contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="banner">
        <nav>
            <div class="navbar">
                <img src="assets/images/logo.png" alt="Company Logo" class="logo">
                <ul>
                    <li><a href="/getyourseat">Home</a></li>
                    <li><a href="{{url('/mybookings')}}">Bookings</a></li>
                    <li><a href="#">Cancel ticket</a></li>
                    <li><a href="{{url('/contactus')}}">Contact us</a></li>
                    <li><a href="{{url('/aboutus')}}">About us</a></li>
                    <li class="dropdown">
    <span><i class="fa-regular fa-user"></i> &nbsp;My Account</span>

        <div class="dropdown-content">
          
                <a href="#">Profile</a>
                @if(Auth::check())
                  <a href="{{url('/logout')}}">Log out</a>
                
                @else
                <a href="{{url('/index')}}">Log in</a>
                @endif
        </div>
</li>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis cumque facilis nemo at id officiis optio eius sed recusandae, voluptate, deleniti alias quis animi, ex praesentium itaque aut voluptatibus iusto.</P>
        </div>
        <div class="con-container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Asansol GT road <br>Asansol <br>713363</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>123-456-7890</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>getyourseat@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form method="post" action="{{url('/contactus')}}">
                    @csrf
                  @method('post')
                    <h2>Send Massages</h2>
                    <div class="inputBox">
                    <input type="text" name="name" required="required" >
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required" >
                    <span> Email</span>
                </div>
                <div class="inputBox">
                    <textarea name="message"></textarea>
                    <span>Type your Massage....</span>
                </div>
                <div class="inputBox">
                
                    <input type="submit" name="" required="required" value="Send" >
                    <span></span>
                </div>

                </form>
            </div>
        </div>
    </section>

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
