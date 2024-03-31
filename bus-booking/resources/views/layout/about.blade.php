<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{'assets/css/aboutus.css'}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="banner">
        <nav>
            <div class="navbar">
                <img src="assets/images/logo.png" alt="Company Logo" class="logo">
                <ul>
                    <li><a href="{{url('/getyourseat')}}">Home</a></li>
                    <li><a href="{{url('/searchforbus')}}">Book ticket</a></li>
                    <li><a href="#">Cancel ticket</a></li>
                    <li><a href="{{url('/contactus')}}">Contact us</a></li>
                    <li><a href="#">About us</a></li>
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
                </ul>
            </div>
        </nav>
        <div class ="hero">
        <section id="about">
            <div class="about-1">
                <h1>About Us</h1>
                <p>Welcome to our College Bus Management System project! We are a team of dedicated students passionate about applying our knowledge and skills to develop innovative solutions for our college community. Our project aims to streamline the management of college transportation services, making it easier for both students and staff to navigate campus travel.</p> 
                <p>Our team is committed to delivering a reliable and user-friendly system that enhances the overall college experience. With our expertise in technology and dedication to excellence, we strive to make a positive impact on campus life.</p> 
                <a href="#features" class="btn">Learn More</a>
            </div>
        </section>
        <div id="about-2">
            <div class="about-item text-center">
                <i class="fa fa-book"></i>
                <h3>MISSION</h3>
                <hr>
                <p>Our mission is to create a user-friendly and efficient bus management system tailored to the specific needs of our college. By leveraging technology and implementing best practices, we seek to optimize the process of scheduling, tracking, and accessing campus buses, ultimately enhancing the overall experience for everyone involved.</p>
            </div>
            <div class="about-item text-center">
                <i class="fa fa-earth"></i>
                <h3>Who We Are</h3>
                <hr>
                <p>We are a group of students from diverse academic backgrounds, including computer science, engineering, and business management. Together, we bring a unique blend of skills and perspectives to the table, allowing us to tackle complex challenges and deliver innovative solutions.</p>
            </div>
            <div class="about-item text-center">
                <i class="fa fa-pencil"></i>
                <h3>WHAT WE OFFER</h3>
                <hr>
                <p>Route Management: Our system allows administrators to easily manage bus routes, stops, and schedules, ensuring efficient transportation across campus.</p>
            </div>
        </div>
    </div>

</body>
</html>