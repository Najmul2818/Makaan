<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Makaan - Premium</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<div id="progress"></div>
    <div class="container-fluid bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.php" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">Makaan</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="property-list.php" class="dropdown-item">Property List</a>
                                <a href="property-type.php" class="dropdown-item">Property Type</a>
                                <a href="property-agent.php" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <!-- <a href="404.php" class="dropdown-item">404 Error</a> -->
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <!-- <a href="https://htmlcodex.com/downloading/?item=2259" class="btn btn-primary px-3 d-none d-lg-flex">Buy Pro Version</a> -->
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-primary">Perfect Home</span> To Live With Your Family</h1>
                    <p class="animated fadeIn mb-4 pb-2">The Mansions and Villa that give you a luxurious living experience.</p>
                    <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 25px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <!-- <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Property Type</option>
                                    <option value="1">Property Type 1</option>
                                    <option value="2">Property Type 2</option>
                                    <option value="3">Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Category Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Property Types</h1>
                    <p>We have a wide variety of property types to suit your needs. We offer apartments, villas, homes, offices, buildings and shops for sale.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-apartment.png" alt="Icon">
                                </div>
                               <h6>Apartment</h6>
                               <small id="apartment-count">0 Properties</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-villa.png" alt="Icon">
                                </div>
                                <h6>Villa</h6>
                                <small id="villa-count">0 Properties</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                                </div>
                                <h6>Home</h6>
                                <small id="home-count">0 Properties</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-housing.png" alt="Icon">
                                </div>
                                <h6>Office</h6>
                                <small id="office-count">0 Properties</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-building.png" alt="Icon">
                                </div>
                                <h6>Building</h6>
                                <small id="building-count">0 Properties</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-neighborhood.png" alt="Icon">
                                </div>
                                <h6>Townhouse</h6>
                                <small id="townhouse-count">0 Properties</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-condominium.png" alt="Icon">
                                </div>
                                <h6>Shop</h6>
                                <small id="shop-count">0 Properties</small>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-luxury.png" alt="Icon">
                                </div>
                                <h6>Garage</h6>
                                <small id="garage-count">0 Properties</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img position-relative overflow-hidden p-5 pe-0">
                            <img class="img-fluid w-100" src="img/about.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                        <p class="mb-4">We are a leading real estate company that helps you find the perfect property for sale or rent. Our team of experts is dedicated to providing you with the best service and the most accurate information.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Expert real estate agents</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Wide variety of property types</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Best prices in the market</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Property List Start -->
<div class="container-fluid py-5">
    <div class="container">

        <!-- Heading + Tabs -->
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5">
                    <h1 class="mb-3">Property Listing</h1>
                    <p>Find the perfect property for sale or rent in our extensive listing.</p>
                </div>
            </div>

            <div class="col-lg-6 text-start text-lg-end">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
                    </li>
                    <!-- <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
                    </li> -->
                </ul>
            </div>
        </div>

        <!-- Tabs -->
        <div class="tab-content">

            <!-- TAB 1 (ALL / FEATURED) -->
            <div id="tab-1" class="tab-pane fade show active">
    <div class="row g-4">

    <?php
    include 'db.php';
    $query = "SELECT * FROM properties LIMIT 6";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)) {
    ?>

        <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">

                <div class="position-relative overflow-hidden">
                    <a href="property-detail.php?id=<?php echo $row['id']; ?>">
                        <img class="img-fluid" src="<?php echo $row['image']; ?>">
                    </a>

                    <div class="bg-primary text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                        <?php echo $row['status']; ?>
                    </div>
                </div>

                <div class="p-4 pb-0">
                    <h5 class="text-primary mb-3"><?php echo $row['price']; ?></h5>
                    <a class="d-block h5 mb-2"><?php echo $row['title']; ?></a>
                    <p><?php echo $row['location']; ?></p>
                </div>

                <div class="d-flex border-top">
                    <small class="flex-fill text-center py-2"><?php echo $row['area']; ?></small>
                    <small class="flex-fill text-center py-2"><?php echo $row['feature1']; ?></small>
                    <small class="flex-fill text-center py-2"><?php echo $row['feature2']; ?></small>
                </div>

            </div>
        </div>

    <?php } ?>

    </div>

    <div class="col-12 text-center mt-4">
        <a class="btn btn-primary py-3 px-5" href="property-list.php">
            Browse More Property
        </a>
    </div>
</div>

            <!-- TAB 2 (SALE) -->
            <div id="tab-2" class="tab-pane fade">
    <div class="row g-4">

    <?php
    $query = "SELECT * FROM properties WHERE status='For Sale'";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)) {
    ?>

        <!-- SAME CARD DESIGN -->

        <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">

                <div class="position-relative overflow-hidden">
                    <img class="img-fluid" src="<?php echo $row['image']; ?>">
                    <div class="bg-primary text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                        <?php echo $row['status']; ?>
                    </div>
                </div>

                <div class="p-4 pb-0">
                    <h5 class="text-primary mb-3"><?php echo $row['price']; ?></h5>
                    <p><?php echo $row['title']; ?></p>
                    <p><?php echo $row['location']; ?></p>
                </div>

            </div>
        </div>

    <?php } ?>

    </div>
</div>

            <!-- TAB 3 (RENT) -->
            <div id="tab-3" class="tab-pane fade">
    <div class="row g-4">

    <?php
    $query = "SELECT * FROM properties WHERE status='For Rent'";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)) {
    ?>

        <!-- SAME CARD DESIGN -->

        <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">

                <div class="position-relative overflow-hidden">
                    <img class="img-fluid" src="<?php echo $row['image']; ?>">
                    <div class="bg-primary text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                        <?php echo $row['status']; ?>
                    </div>
                </div>

                <div class="p-4 pb-0">
                    <h5 class="text-primary mb-3"><?php echo $row['price']; ?></h5>
                    <p><?php echo $row['title']; ?></p>
                    <p><?php echo $row['location']; ?></p>
                </div>

            </div>
        </div>

    <?php } ?>

    </div>
</div>

        </div>

    </div>
</div>
<!-- Property List End -->


        <!-- Call to Action Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/dummy1.png" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact With Our Certified Agent</h1>
                                    <p>Contact our agents for more information about properties and services.</p>
                                </div>
                                <a href="" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
                                <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->


        <!-- Team Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Property Agents</h1>
                    <p>Our certified agents are here to help you find the perfect property. Get the best deals and services from our experienced professionals.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/dummy2.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/dummy3.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/dummy4.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/dummy5.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Our Clients Say!</h1>
                    <p>Discover what our satisfied clients have to say about their experience working with us. Know more about our services and professionalism.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>This is a best property management company in the city. Their agents are professional and helpful.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>This company has helped me find my dream home. The team is responsive and knowledgeable.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>This site has made property hunting so easy and efficient. I highly recommend their services.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Client Name</h6>
                                    <small>Profession</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>5th Street, J P Nagar, Bangalore</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9900569900</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>makaan@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Photo Gallery</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Subscribe to our newsletter for the latest updates and offers.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Makaan</a>, All Right Reserved. 
							
							<!--/*** The author’s attribution link must remain intact in the template. ***/-->
                            <!--/*** If you wish to remove this credit link, please purchase the Pro Version . ***/-->
                             <a class="border-bottom" href="https://htmlcodex.com"></a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    
<script>
window.addEventListener("scroll",()=>{
document.querySelectorAll(".fade-up").forEach(el=>{
let top=el.getBoundingClientRect().top;
if(top<window.innerHeight-50)el.classList.add("show");
});
let scroll=(window.scrollY/(document.body.scrollHeight-window.innerHeight))*100;
let p=document.getElementById("progress");
if(p)p.style.width=scroll+"%";
let nav=document.querySelector(".navbar");
if(nav)nav.classList.toggle("scrolled",window.scrollY>50);
});
</script>

<!-- CHAT BUTTON -->
<div id="chat-btn">💬</div>

<!-- CHAT BOX -->
<div id="chat-box">

    <div id="chat-header">
        Property Assistant
    </div>

    <div id="chat-messages"></div>

    <div class="chat-input-area">

        <input 
            type="text" 
            id="chat-input" 
            placeholder="Ask something..."
        >

        <button onclick="sendMessage()" id="send-btn">
            Send
        </button>

    </div>

</div>

<style>

#chat-btn {
    position: fixed;
    bottom: 10px;
    right: 10px;
    background: #00B98E;
    color: white;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    cursor: pointer;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 28px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

#chat-box {
    display: none;
    position: fixed;
    bottom: 90px;
    right: 20px;
    width: 350px;
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.25);
    z-index: 9999;
}

#chat-header {
    background: #036c54;
    color: white;
    padding: 15px;
    font-weight: bold;
    text-align: center;
}

#chat-messages {
    height: 300px;
    overflow-y: auto;
    padding: 10px;
    background: #f9f9f9;
}

.chat-input-area {
    display: flex;
    border-top: 1px solid #ddd;
}

#chat-input {
    flex: 1;
    border: none;
    padding: 12px;
    outline: none;
}

#send-btn {
    background: #00B98E;
    color: white;
    border: none;
    padding: 0 20px;
    cursor: pointer;
}

.user-msg {
    background: #00B98E;
    color: white;
    padding: 10px;
    border-radius: 12px;
    margin: 8px 0;
    text-align: right;
}

.bot-msg {
    background: #ececec;
    padding: 10px;
    border-radius: 12px;
    margin: 8px 0;
}

</style>

<script>

// OPEN/CLOSE CHAT
document.getElementById("chat-btn").onclick = function () {

    let box = document.getElementById("chat-box");

    if (box.style.display === "block") {
        box.style.display = "none";
    } else {
        box.style.display = "block";
    }
};

// SEND MESSAGE
async function sendMessage() {

    let input = document.getElementById("chat-input");

    let message = input.value.trim();

    if (message === "") return;

    let chatBody = document.getElementById("chat-messages");

    // USER MESSAGE
    let userDiv = document.createElement("div");

    userDiv.className = "user-msg";

    userDiv.innerHTML = `<strong>You:</strong> ${message}`;

    chatBody.appendChild(userDiv);

    input.value = "";

    // LOADING MESSAGE
    let loadingDiv = document.createElement("div");

    loadingDiv.className = "bot-msg";

    loadingDiv.id = "loading";

    loadingDiv.innerHTML = `<strong>Bot:</strong> Typing...`;

    chatBody.appendChild(loadingDiv);

    chatBody.scrollTop = chatBody.scrollHeight;

    // FORM DATA
    let formData = new FormData();

    formData.append("message", message);

    try {

        // IMPORTANT
        let response = await fetch("chatbot.php", {
            method: "POST",
            body: formData
        });

        let data = await response.json();

        document.getElementById("loading").remove();

        let botDiv = document.createElement("div");

        botDiv.className = "bot-msg";

        botDiv.innerHTML = `<strong>Bot:</strong> ${data.reply}`;

        chatBody.appendChild(botDiv);

        chatBody.scrollTop = chatBody.scrollHeight;

    } catch (error) {

        document.getElementById("loading").remove();

        let errorDiv = document.createElement("div");

        errorDiv.className = "bot-msg";

        errorDiv.innerHTML = `<strong>Bot:</strong> Error connecting to AI.`;

        chatBody.appendChild(errorDiv);

        console.error(error);
    }
}

// ENTER KEY
document.getElementById("chat-input")
.addEventListener("keypress", function (e) {

    if (e.key === "Enter") {
        sendMessage();
    }
});

// DEFAULT BOT MESSAGE
window.onload = () => {

    let chatBody = document.getElementById("chat-messages");

    let botDiv = document.createElement("div");

    botDiv.className = "bot-msg";

    botDiv.innerHTML = `
        <strong>Bot:</strong><br>
        Hi 👋 Ask me about:
        <br><br>
        • Villas in Bangalore
        <br>
        • Rental homes
        <br>
        • Apartments under 1 crore
    `;

    chatBody.appendChild(botDiv);
};

</script>

</body>

</html>