
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem; color: rgb(254, 14, 12) !important;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid bg-dark px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="https://www.google.com/maps/dir//House-334+Street+22,+NPF+E+11%2F4+E-11,+Islamabad,+44000/@33.7068324,72.9317711,12.52z/data=!4m8!4m7!1m0!1m5!1m1!1s0x38dfbf40051e48c3:0xd24b81c4ae805f03!2m2!1d72.9832873!2d33.6973001?entry=ttu&g_ep=EgoyMDI1MDgxOS4wIKXMDSoASAFQAw%3D%3D" class="text-light me-4" target="blank"><i class="fas fa-map-marker-alt text-primary me-2" style="color: rgb(254, 14, 12) !important;"></i>E11/4 Markaz Islamabad</a>
                        <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2" style="color: rgb(254, 14, 12) !important;"></i>+923277860111</a>
                        <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2" style="color: rgb(254, 14, 12) !important;"></i>info@sms.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <a href="https://www.facebook.com/profile.php?id=61567769842838" target="blank" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/MianSajjadmian" target="blank" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter" target="blank"></i></a>
                        <a href="https://www.instagram.com/drmiansajjad/" target="blank" class="btn btn-light btn-square border rounded-circle nav-fill me-3" target="blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/dr-mian-sajjad-715857167/" target="blank" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0"style="background-color: white !important;">
                <a href="{{ route('home') }}" class="">

<style type="text/css">
    #logo{
        color: rgb(254, 14, 12) !important;
    }

    #logo img{
        width: 450px; height: 160px;
    }

    @media (max-width: 400px) {
        #logo img{
            width: 250px; height: 100px;
        }
    }
</style>

                    <h1 id="logo" class="text-primary m-0"><img src="img/logo-main.gif"> </h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ route('about-us') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
                        <a href="{{ route('physio-packages') }}" class="nav-item nav-link">Physio Packages</a>
                        <a href="{{ route('our-team') }}" class="nav-item nav-link">Team</a>
                        <a href="{{ route('news-and-events') }}" class="nav-item nav-link">News</a>
<!--                         <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="appointment.html" class="dropdown-item">Appointment</a>
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="blog.html" class="dropdown-item">Our Blog</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="{{ route('contact-us') }}" class="nav-item nav-link">Contact Us</a>
                    </div>

<style>
    .btn-appointment{
        background-color: rgb(254, 14, 12); color: white; border: 0px !important;
    }
</style>

                    <a href="{{ route('book-appointment') }}" class="btn-appointment rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0 fw-bolder">Book Appointment</a>
                </div>
            </nav>
