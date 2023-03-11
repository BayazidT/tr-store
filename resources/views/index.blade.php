<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bayazid Talukder</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="#" name="keywords">
    <meta content="#" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
<!-- Navbar Start -->
<nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
    <a href="index.html" class="navbar-brand ml-lg-3">
        <h1 class="m-0 display-5 "><span class="text-primary">Bayazid</span>T</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-lg-3 justify-content-end" id="navbarCollapse">

        <a href="#home" class="nav-item nav-link active">Home</a>
        <a href="#about" class="nav-item nav-link">About</a>
        <a href="#qualification" class="nav-item nav-link">Qualification</a>
        <a href="#skill" class="nav-item nav-link">Skill</a>
        <a href="#service" class="nav-item nav-link">Service</a>
        <a href="#contact" class="nav-item nav-link">Contact</a>

    </div>
</nav>
<!-- Navbar End -->



<!-- Header Start -->
<div class="container-fluid d-flex bg-info align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7 text-center text-lg-left">
                <h3 class="text-white font-weight-normal mb-3">Hello, this is</h3>
                <h3 class="display-3 text-uppercase text-primary mb-2 mobileVHT" style="-webkit-text-stroke: 4px #ffffff;">Bayazid Talukder</h3>
                <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                <div class="typed-text d-none">Web Designer, Web Developer, SEO Expert, Tech Content Writer</div>
                <!-- <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                    <a href="" class="btn btn-white mr-4">Download CV</a>

                    <a href="" class="btn btn-blue d-none d-sm-block">Play Video</a>
                </div> -->
            </div>
            <div class="col-lg-6 px-8 pl-lg-0 pb-5 pb-lg-4 about-img">
                <img class="img-fluid w-100 rounded-circle shadow-sm" src="img/btnirob.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white mobileVT" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
            <h1 class="position-absolute text-uppercase text-info mobileVP">About Me</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid rounded w-100" src="img/bayazid.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <h3 class="mb-4">{{ $profile_about->title }}</h3>
                <p>{{ $profile_about->description }}</p>
                <div class="row mb-3">
                    <div class="col-sm-6 py-2"><h6>Name: <span class="text-secondary">{{ $profile_about->name }}</span></h6></div>
                    {{--                    <div class="col-sm-6 py-2"><h6>Birthday: <span class="text-secondary">19 June 1995</span></h6></div>--}}
                    <div class="col-sm-6 py-2"><h6>Degree: <span class="text-secondary">{{ $profile_about->degree }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Experience: <span class="text-secondary">{{ $profile_about->experience }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Phone: <span class="text-secondary">{{ $profile_about->phone }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary">{{ $profile_about->email }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Address: <span class="text-secondary">{{ $profile_about->address }}</span></h6></div>
                    <div class="col-sm-6 py-2"><h6>Work Mode: <span class="text-secondary">{{ $profile_about->work_mode }}</span></h6></div>
                </div>
                <a href="" class="btn blue btn-outline-info mr-4">Hire Me</a>
                <a href="" class="btn btn-outline-info">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Qualification Start -->
<div class="container-fluid py-5" id="qualification">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white mobileVT" style="-webkit-text-stroke: 1px #dee2e6;">Qualification</h1>
            <h1 class="position-absolute text-uppercase text-info mobileVP">Education & Expericence</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h3 class="mb-4">My Education</h3>
                <div class="border-left border-info pt-2 pl-4 ml-2">
                    @foreach($education_info as $key => $education)
                    <div class="position-relative ex-me mb-4">
                        <i class="far fa-dot-circle text-info position-absolute" style="top: 2px; left: -35px; font-size: 22px;"></i>
                        <h5 class="font-weight-bold mb-1">{{ $education->degree_title }}</h5>
                        <p class="mb-2"><strong>{{$education->institute_name}}</strong> | <small>2017 - 2021</small></p>

                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">My Expericence</h3>
                <div class="border-left border-info pt-2 pl-4 ml-2">
                    @foreach($experience_info as $key=>$experience)
                    <div class="position-relative ex-me mb-4">
                        <i class="far fa-dot-circle text-info position-absolute" style="top: 2px;left: -35px;  font-size: 22px;"></i>
                        <h5 class="font-weight-bold mb-1">{{ $experience->job_title }}</h5>
                        <p class="mb-2"><strong>{{ $experience->company_name }}</strong> | <small> Excellent</small></p>
                        <p>{{ $experience->job_description }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Qualification End -->
<!-- Skill Start -->
<div class="container-fluid py-5" id="skill">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white mobileVT" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
            <h1 class="position-absolute text-uppercase text-info mobileVP">My Skills</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">
                @foreach($skill_info->take(3) as $key => $skill)
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">{{ $skill->skill_title }}</h6>
                            <h6 class="font-weight-bold">{{ $skill->expertise_level }}%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar {{ $skill->background_color }}" role="progressbar" aria-valuenow="{{ $skill->expertise_level }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6">
                @foreach($skill_info->slice(3,3) as $key => $skill)
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">{{ $skill->skill_title }}</h6>
                            <h6 class="font-weight-bold">{{ $skill->expertise_level }}%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar {{ $skill->background_color }}" role="progressbar" aria-valuenow="{{ $skill->expertise_level }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- Skill End -->


<!-- Services Start -->
<div class="container-fluid pt-5" id="service">
    <div class="container">
        <div class="service-h4 position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white mobileVT" style="-webkit-text-stroke: 1px #dee2e6;">Service</h1>
            <h1 class="position-absolute text-uppercase text-info mobileVP">My Services</h1>
        </div>
        <div class="row pb-3">
            <div class="service-box col-lg-4 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <i class="fa fa-2x fa-laptop service-icon bg-info text-white mr-3"></i>
                    <h4 class="font-weight-bold m-0">Web Design</h4>
                </div>
                <p>Transforming imagination into real is really awesome. My job is to transform imagination into reality by creative design and efficient code.</p>
                <a class="border-bottom border-info text-decoration-none" href="">Read More</a>
            </div>
            <div class="service-box col-lg-3 col-md-6 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <i class="fa fa-2x fa-laptop-code service-icon bg-info text-white mr-3"></i>
                    <h4 class="font-weight-bold m-0">Development</h4>
                </div>
                <p>So, if you have an idea and you wants to emplement it in real life you can hire me</p>
                <a class="border-bottom border-info text-decoration-none" href="">Read More</a>
            </div>
            <div class="service-box col-lg-4  col-md-7 text-center mb-5">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <i class="fa fa-2x fa-edit service-icon bg-info text-white mr-3"></i>
                    <h4 class="font-weight-bold m-0">Content Creating</h4>
                </div>
                <p>Writing is my hoby and as a Computer engineer I like to write technology related articales</p>
                <a class="border-bottom border-info text-decoration-none" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Portfolio Start -->
 <div class="container-fluid pt-5 pb-3" id="portfolio">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
            <h1 class="position-absolute text-uppercase text-info">My Portfolio</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-sm btn-outline-info m-1 active"  data-filter="">All</li>
                    @foreach($project_category as $key =>$category)
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".first">{{$category->category_name}}</li>
                    @endforeach
{{--                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".second">Development</li>--}}
{{--                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".third">Marketing</li>--}}
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-1.jpg" alt="">
                    <div class="portfolio-btn bg-info d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                            <a href="#" class="text-white" style="font-size: 30px;">View Details</a>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-2.jpg" alt="">
                    <div class="portfolio-btn bg-info d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-3.jpg" alt="">
                    <div class="portfolio-btn bg-info d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-4.jpg" alt="">
                    <div class="portfolio-btn bg-info d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-5.jpg" alt="">
                    <div class="portfolio-btn bg-info d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="img/portfolio-6.jpg" alt="">
                    <div class="portfolio-btn bg-info d-flex align-items-center justify-content-center">
                        <a href="img/portfolio-6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->


<!-- Testimonial Start -->
<!-- <div class="container-fluid py-5" id="testimonial">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Review</h1>
            <h1 class="position-absolute text-uppercase text-info">Clients Say</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="owl-carousel testimonial-carousel">
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-info mb-4"></i>
                        <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                        <img class="img-fluid rounded-circle mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                        <h5 class="font-weight-bold m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-info mb-4"></i>
                        <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                        <img class="img-fluid rounded-circle mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                        <h5 class="font-weight-bold m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-info mb-4"></i>
                        <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                        <img class="img-fluid rounded-circle mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                        <h5 class="font-weight-bold m-0">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Testimonial End -->



<!-- Contact Start -->
<div class="container-fluid py-5 " id="contact">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white mobileVT" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
            <h1 class="position-absolute text-uppercase text-info mobileVP">Contact Me</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form text-center">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="control-group col-sm-6">
                                <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                       required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group col-sm-6">
                                <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                       required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                   required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Message"
                                          required="required"
                                          data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-outline-info" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->
<div class="container-fluid bg-info text-white mt-5 py-1 px-sm-1 px-md-5">
    <div class="container text-center py-5">
        <div class="d-flex justify-content-center mb-4">
            <a class="btn btn-light btn-social mr-2" href="https://twitter.com/bt_nirob" target="blank"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-light btn-social mr-2" href="https://www.facebook.com/bayazidtalukder.nirob" target="blank"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-light btn-social mr-2" href="https://www.linkedin.com/in/bayazid-talukder-35249116b/" target="blank"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-light btn-social" href="https://www.instagram.com/btnirob/" target="blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="d-flex justify-content-center mb-3">
            <a class="text-white" href="#">Privacy</a>
            <span class="px-3">|</span>
            <a class="text-white" href="#">Terms</a>
            <span class="px-3">|</span>
            <a class="text-white" href="#">FAQs</a>
            <span class="px-3">|</span>
            <a class="text-white" href="#">Help</a>
        </div>
        <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">BayazidT</a>. All Rights Reserved.
        </p>
    </div>
</div>
<!-- Footer End -->

<!-- Scroll to Bottom -->
<i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

<!-- Back to Top -->
<a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/typed/typed.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
