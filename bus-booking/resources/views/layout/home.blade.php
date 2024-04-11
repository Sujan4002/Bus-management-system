<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script>document.addEventListener('DOMContentLoaded', function() {
    const toggles = document.querySelectorAll('.faq-toggle');
    toggles.forEach(toggle => {
      toggle.addEventListener('click', () => {
        toggle.parentNode.classList.toggle('active');
      });
    });
  });</script>
    <div class="banner">
        <nav>
            <div class="navbar">
                <img src="assets/images/logo.png" alt="Company Logo" class="logo">
                <ul>
                    <li><a href="{{url('/getyourseat')}}">Home</a></li>
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
        <form action="{{url('/searchforbus')}}">
            <div class="search-bus d-flex align-items-center">
                <label for="fromCity"class="form-label fw-bold"><i class="fas fa-bus"></i>&nbsp;From</label>
                <input class="form-control" name="departure" list="fromCityOptions" id="fromCity" placeholder="From city">
                <datalist id="fromCityOptions">
                    <option value="Asansol">
                    <option value="Durgapur">
                    <option value="Raniganj">
                    <option value="Burdwan">
                </datalist>

                <label for="toCity"class="form-label fw-bold fs-8"><i class="fas fa-location-arrow"></i>&nbsp;To</label>
                <input class="form-control" name="arrival" list="toCityOptions" id="toCity" placeholder="To city">
                <datalist id="toCityOptions">
                    <option value="Asansol">
                    <option value="Durgapur">
                    <option value="Kolkata">
                    <option value="Delhi">
                </datalist>

                <label for="date" class="form-label fw-bold fs-8"><i class="far fa-calendar-alt"></i>&nbsp;Date</label>
                <input type="date" name="date" id="date" class="form-control">

                <button class="btn btn-danger">
                    Search Buses
                </button>
            </div>
        </form>
</div>

    <div class="faq-section">
    <h3>Get your seat - FAQ</h3>
    <div class="faq-container">
        <div class="faq active">
            <h5 class="faq-title">
                How do I book a bus ticket?
            </h5>

            <p class="faq-text">
                You can book a bus ticket through our online platform. Simply log in, choose your destination, select a
                suitable bus, and proceed with the booking process.
            </p>

            <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div class="faq">
            <h5 class="faq-title">
              How do I create an account? 
            </h5>
            <p class="faq-text">
              Click on the "Sign Up" link on the homepage, fill in the required information, and
                  follow the instructions to create your account.
            </p>
            <button class="faq-toggle">
              <i class="fas fa-chevron-down"></i>
              <i class="fas fa-times"></i>
            </button>
          </div>
      
          <div class="faq">
            <h5 class="faq-title">
              Can I cancel my bus ticket?
            </h5>
            <p class="faq-text">
              Yes, you can cancel your bus ticket through your user account. Please note that
                  cancellation fees may apply, and the refund amount depends on the cancellation policy.
            </p>
            <button class="faq-toggle">
              <i class="fas fa-chevron-down"></i>
              <i class="fas fa-times"></i>
            </button>
          </div>
      
          <div class="faq">
            <h5 class="faq-title">
              What payment methods do you accept?
            </h5>
            <p class="faq-text">
              We accept offline payment methods.
            </p>
            <button class="faq-toggle">
              <i class="fas fa-chevron-down"></i>
              <i class="fas fa-times"></i>
            </button>
          </div>
      
          <div class="faq">
            <h5 class="faq-title">
              Is it mandatory to bring a printed copy of the ticket?
            </h5>
            <p class="faq-text">
              It's not mandatory. However, you must bring the identity document provided at the time of purchase.
            </p>
            <button class="faq-toggle">
              <i class="fas fa-chevron-down"></i>
              <i class="fas fa-times"></i>
            </button>
          </div>
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
</div>
    </footer>
</body>
</html>
