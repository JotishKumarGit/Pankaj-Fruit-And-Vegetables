<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Pankaj Fruit And Vegetables </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet" />
    <!-- Font awesome icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

    <style>
        #header-carousel .carousel-item img {
            height: 500px;
            object-fit: cover;
        }

        /* Optional: Ensure captions are vertically centered and don't overflow */
        #header-carousel .carousel-caption {
            height: 100%;
            top: 0;
            bottom: 0;
        }
    </style>

    <style>
        /* Card Hover Animation */
        .product-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 10px;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        /* Image Zoom on Hover */
        .product-img-container {
            height: 250px;
            background-color: #f8f9fa;
        }

        .product-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .product-img-container:hover .product-img {
            transform: scale(1.1);
        }

        /* Animated Button */
        .animated-btn {
            transition: all 0.3s ease;
        }

        .animated-btn:hover {
            background-color: #ffffff;
            color: #0d6efd;
            border: 1px solid #0d6efd;
        }

        /* blog sections css */
        .blog-section {
            padding: 4rem 0;
        }

        .blog-card {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        }

        .blog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-card-body {
            padding: 1.5rem;
        }

        .blog-card-body h5 {
            color: #007bff;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            color: #007bff;
            font-weight: bold;
        }

        footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }

        /* Fade-in animation */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <!-- Carousel Items -->
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img class="w-100" src="img/fruits.webp"
                        alt="A colorful assortment of fresh fruits representing premium quality pulses" />
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; height: 500px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">
                                Premium Quality Pulses
                            </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                                Nourish Your Family With Natural Goodness
                            </h1>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Quote</a>
                            <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img class="w-100" src="img/vegetables.webp"
                        alt="Fresh organic vegetables showcasing healthy and wholesome millets" />
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; height: 500px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">
                                Organic & Wholesome Millets
                            </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                                Healthier Grains for a Healthier You
                            </h1>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Quote</a>
                            <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img class="w-100" src="img/green_chilli.jpg"
                        alt="Close-up of fresh green chillies representing sustainably sourced pulses" />
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; height: 500px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">
                                Sustainably Sourced Pulses
                            </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                                Taste the Purity of Nature
                            </h1>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Quote</a>
                            <a href="#" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">

                <!-- Video Column -->
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <video class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s"
                            style="object-fit: contain;" autoplay muted loop playsinline>
                            <source src="img/maize.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <!-- Text Column -->
                <div class="col-lg-7">

                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h5>
                        <h1 class="display-5 mb-0">Supplying Fresh Produce with Trust & Quality</h1>
                    </div>

                    <h4 class="text-body fst-italic mb-4">
                        From farms to your kitchen — premium quality onions, green chillies, fruits, and vegetables.
                    </h4>

                    <p class="mb-4">
                        <strong>Pankaj Fruit And Vegetables</strong>, led by Mr. Chandrakant Pandharinath Hyalij, is a
                        trusted
                        name in the fresh produce industry. Based in Akhatwade, Tal Satana, District Nashik,
                        Maharashtra,
                        we specialize in supplying high-quality, farm-fresh onions, green chillies, and a wide range of
                        seasonal
                        fruits and vegetables.
                    </p>

                    <p class="mb-4">
                        We focus on delivering produce that meets the highest standards of freshness and quality.
                        Our commitment to timely delivery and customer satisfaction has earned us long-term clients
                        and growing trust across markets.
                    </p>

                    <!-- ⭐ NEW Maize Offer Section -->
                    <div class="bg-light p-4 rounded mb-4 border-start border-4 border-primary">
                        <h4 class="text-primary mb-3">Contact for Best Quality Maize (Corn)</h4>

                        <p class="mb-1"><strong>➡️ RATE:</strong> ₹20 / KG</p>
                        <p class="mb-1"><strong>➡️ VARIETY:</strong> Yellow Maize</p>
                        <p class="mb-1"><strong>➡️ QUALITY:</strong> A-Grade</p>
                        <p class="mb-1"><strong>➡️ SIZE:</strong> Big</p>
                        <p class="mb-1"><strong>➡️ PACKING:</strong> 50 KG</p>
                        <p class="mb-3"><strong>➡️ MINIMUM ORDER:</strong> 10 Ton</p>

                        <a href="contact.php" class="btn btn-primary px-4 py-2">
                            Contact Now
                        </a>
                    </div>

                    <!-- Icons Section -->
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex flex-column justify-content-center text-center border-bottom border-5 border-secondary rounded p-3"
                                style="height: 200px;">
                                <i class="fa fa-leaf fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">Fresh Farm Produce</h4>
                            </div>
                        </div>

                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                            <div class="bg-secondary d-flex flex-column justify-content-center text-center border-bottom border-5 border-primary rounded p-3"
                                style="height: 200px;">
                                <i class="fa fa-handshake fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">Reliable Supplier</h4>
                            </div>
                        </div>
                    </div>

                </div> <!-- end col-lg-7 -->

            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container justify-content-center">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">
                    Services
                </h5>
                <h1 class="display-5 mb-0">What We Offer at Pankaj Fruit And Vegetables</h1>
            </div>
            <div class="row g-5 justify-content-center">

                <!-- Fresh Produce Supply -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-carrot fa-3x text-primary mb-3"></i>
                            <h5 class="text-primary mb-0">Supply</h5>
                            <h3 class="mb-3">Fresh Fruits & Vegetables</h3>
                            <p>
                                We provide farm-fresh onions, green chillies, and a variety of fruits and vegetables
                                directly from Nashik.
                            </p>
                            <a href="#">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Wholesale Orders -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-store-alt fa-3x text-primary mb-3"></i>
                            <h5 class="text-primary mb-0">Bulk Supply</h5>
                            <h3 class="mb-3">Wholesale Distribution</h3>
                            <p>
                                Trusted by local retailers and businesses for bulk orders with competitive pricing and
                                quality assurance.
                            </p>
                            <a href="#">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Delivery Service -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-shipping-fast fa-3x text-primary mb-3"></i>
                            <h5 class="text-primary mb-0">Logistics</h5>
                            <h3 class="mb-3">Safe & Timely Delivery</h3>
                            <p>
                                We ensure timely delivery of your produce with proper packaging and careful handling at
                                every step.
                            </p>
                            <a href="#">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Flexible Payments -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.7s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-wallet fa-3x text-primary mb-3"></i>
                            <h5 class="text-primary mb-0">Payments</h5>
                            <h3 class="mb-3">Flexible Payment Options</h3>
                            <p>
                                We support advance, partial, and flexible payment options to make transactions
                                convenient for all clients.
                            </p>
                            <a href="#">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Long-Term Plans -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded">
                        <div class="position-relative p-5">
                            <i class="fas fa-calendar-check fa-3x text-primary mb-3"></i>
                            <h5 class="text-primary mb-0">Subscription</h5>
                            <h3 class="mb-3">6-Month Gold Plan</h3>
                            <p>
                                Enroll in our 6-month Gold Service for priority support, regular updates, and extended
                                visibility on trade platforms.
                            </p>
                            <a href="#">Read More<i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Product  Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 75px">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px">Our Products</h5>
                <h1 class="display-5 mb-0"></h1>
            </div>
            <div class="row g-5 justify-content-center">

                <!-- Product 1: Onion -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card product-card border-0 shadow h-100 overflow-hidden">
                        <!-- Product Image -->
                        <div class="product-img-container position-relative overflow-hidden">
                            <img src="img/onion_img.jpg" class="card-img-top product-img" alt="Fresh Onion">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title text-primary fw-bold">Fresh Onion</h5>
                            <a href="Fresh_Onion.php" class="btn btn-primary px-4 py-2 mt-2 animated-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Product 2: fruits -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card product-card border-0 shadow h-100 overflow-hidden">
                        <!-- Product Image -->
                        <div class="product-img-container position-relative overflow-hidden">
                            <img src="img/fruits.png" style="object-fit: contain;" class="card-img-top product-img"
                                alt="Fresh Onion">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title text-primary fw-bold">Fresh Fruits</h5>
                            <a href="Fresh_Fruits.php" class="btn btn-primary px-4 py-2 mt-2 animated-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Product 3: Vegitables -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card product-card border-0 shadow h-100 overflow-hidden">
                        <!-- Product Image -->
                        <div class="product-img-container position-relative overflow-hidden">
                            <img src="img/vegetables.webp" class="card-img-top product-img" alt="Fresh Onion">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title text-primary fw-bold">Fresh Vegetables</h5>
                            <a href="Fresh_Vegetables.php" class="btn btn-primary px-4 py-2 mt-2 animated-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Product 4: Green Chilli -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card product-card border-0 shadow h-100 overflow-hidden">
                        <!-- Product Image -->
                        <div class="product-img-container position-relative overflow-hidden">
                            <img src="img/green_chilli.jpg" class="card-img-top product-img" alt="Fresh Onion">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title text-primary fw-bold">Green Chilli</h5>
                            <a href="Green_Chilli.php" class="btn btn-primary px-4 py-2 mt-2 animated-btn">View Details</a>
                        </div>
                    </div>
                </div>


                <!-- Product 5: Green Chilli -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card product-card border-0 shadow h-100 overflow-hidden">
                        <!-- Product Image -->
                        <div class="product-img-container position-relative overflow-hidden">
                            <img src="img/grapes.webp" class="card-img-top product-img" alt="Fresh Onion">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title text-primary fw-bold">Grapes</h5>
                            <a href="Grapes.php" class="btn btn-primary px-4 py-2 mt-2 animated-btn">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 6: Green Chilli -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card product-card border-0 shadow h-100 overflow-hidden">
                        <!-- Product Image -->
                        <div class="product-img-container position-relative overflow-hidden">
                            <img src="img/pomegranate.jpg" class="card-img-top product-img" alt="Fresh Onion">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title text-primary fw-bold">Pomegranate</h5>
                            <a href="Pomegranate.php" class="btn btn-primary px-4 py-2 mt-2 animated-btn">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 7: watermelon -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card product-card border-0 shadow h-100 overflow-hidden">
                        <!-- Product Image -->
                        <div class="product-img-container position-relative overflow-hidden">
                            <img src="img/watermelon.webp" class="card-img-top product-img" alt="Fresh Onion">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title text-primary fw-bold">Watermelon</h5>
                            <a href="Watermelon.php" class="btn btn-primary px-4 py-2 mt-2 animated-btn">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 8: Tomato -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card product-card border-0 shadow h-100 overflow-hidden">
                        <!-- Product Image -->
                        <div class="product-img-container position-relative overflow-hidden">
                            <img src="img/Tomato.webp" class="card-img-top product-img" alt="Fresh Onion">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title text-primary fw-bold">Tomato</h5>
                            <a href="Tomato.php" class="btn btn-primary px-4 py-2 mt-2 animated-btn">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product 9: Peru -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card product-card border-0 shadow h-100 overflow-hidden">
                        <!-- Product Image -->
                        <div class="product-img-container position-relative overflow-hidden">
                            <img src="img/Peru.jpeg" class="card-img-top product-img" alt="Fresh Onion">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title text-primary fw-bold">Peru</h5>
                            <a href="Peru.php" class="btn btn-primary px-4 py-2 mt-2 animated-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Product 9: Papaya -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card product-card border-0 shadow h-100 overflow-hidden">
                        <!-- Product Image -->
                        <div class="product-img-container position-relative overflow-hidden">
                            <img src="img/Papaya.jpg" class="card-img-top product-img" alt="Fresh Onion">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title text-primary fw-bold">Papaya</h5>
                            <a href="Papaya.php" class="btn btn-primary px-4 py-2 mt-2 animated-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- Product 10 : maize -->
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="card product-card border-0 shadow h-100 overflow-hidden">
                        <!-- Product Image -->
                        <div class="product-img-container position-relative overflow-hidden">
                            <img src="img/maize.jpg" class="card-img-top product-img" alt="Fresh Onion">
                        </div>
                        <!-- Card Body -->
                        <div class="card-body text-center bg-light">
                            <h5 class="card-title text-primary fw-bold">Maize</h5>
                            <a href="Maize.php" class="btn btn-primary px-4 py-2 mt-2 animated-btn">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Product  End -->

    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5 wow zoomIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="text-center mx-auto mb-4" style="max-width: 600px;">
                        <h5 class="text-white text-uppercase" style="letter-spacing: 5px;">
                            Special Offer
                        </h5>
                        <h1 class="display-5 text-white">
                            Get Fresh Onions & Green Chillies at Best Wholesale Rates!
                        </h1>
                    </div>
                    <p class="text-white mb-4">
                        Direct from farms in Nashik, we offer top-quality <strong>onions, green chillies, fruits, and
                            vegetables</strong> at competitive prices.
                        Book your first bulk order now and get <strong>priority delivery + flexible payment
                            options</strong>.
                        Freshness guaranteed. Limited slots available!
                    </p>
                    <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3">Enquiry Now</a>
                    <a href="#" class="btn btn-secondary py-md-3 px-md-5">View Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px">
                    Testimonial
                </h5>
                <h1 class="display-5 mb-0">What People Say About Our Products</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">

                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-1.jpg"
                        style="width: 100px; height: 100px" />
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">
                            "The onions and chillies from Pankaj Fruits & Vegetables are always fresh and perfectly
                            sorted. I never worry about quality or consistency!"
                        </p>
                        <h4 class="text-truncate">Noah Miller</h4>
                        <i>Home Chef</i>
                    </div>
                </div>

                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-2.jpg"
                        style="width: 100px; height: 100px" />
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">
                            "Reliable wholesale partner! The green chillies and bulk vegetables from Pankaj Fruits
                            always arrive fresh and on time."
                        </p>
                        <h4 class="text-truncate">Olivia Davis</h4>
                        <i>Restaurant Owner</i>
                    </div>
                </div>

                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-3.jpg"
                        style="width: 100px; height: 100px" />
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">
                            "I received top-grade onions in bulk with excellent packaging. Their customer support is
                            responsive and professional."
                        </p>
                        <h4 class="text-truncate">Suman Roy</h4>
                        <i>Health Enthusiast</i>
                    </div>
                </div>

                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-4.jpg"
                        style="width: 100px; height: 100px" />
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">
                            "I always choose their farm-fresh vegetables for my diet plans. Quality is unmatched, and
                            everything is chemical-free."
                        </p>
                        <h4 class="text-truncate">Emily Johnson</h4>
                        <i>Nutritionist</i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Featured Blog Posts Section -->
    <section class="blog-section">
        <div class="container">
            <h2 class="section-title">Featured Posts</h2>
            <div class="row g-4">
                <div class="col-md-4 fade-in">
                    <div class="blog-card">
                        <img src="img/fruits.webp" alt="Fresh Fruits">
                        <div class="blog-card-body">
                            <h5>5 Health Benefits of Eating Fresh Fruits</h5>
                            <p>Boost immunity, improve digestion, and enjoy delicious flavors with fresh fruits delivered to your home.</p>
                            <a href="contact.php" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in" style="animation-delay: 0.2s;">
                    <div class="blog-card">
                        <img src="img/pomegranate.jpg" alt="Fresh Vegetables">
                        <div class="blog-card-body">
                            <h5>Top 5 Seasonal Vegetables to Include in Your Diet</h5>
                            <p>Seasonal vegetables taste better, are more nutritious, and are perfect for your healthy meals.</p>
                            <a href="contact.php" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in" style="animation-delay: 0.4s;">
                    <div class="blog-card">
                        <img src="img/Tomato.webp" alt="Healthy Recipes">
                        <div class="blog-card-body">
                            <h5>Delicious Recipes Using Fresh Produce</h5>
                            <p>From smoothies to salads to vegetable stir-fries, enjoy healthy meals every day.</p>
                            <a href="contact.php" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contact Us</h5>
                <h1 class="display-5 mb-0">Get in Touch With Pankaj Fruit And Vegetables</h1>
            </div>
            <div class="row g-5 justify-content-center align-items-center">
                <div class="col-lg-7 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded p-5">
                        <form id="whatsappForm">
                            <div class="row g-3">
                                <div class="col-6">
                                    <input type="text" id="name" class="form-control border-0 px-4"
                                        placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-6">
                                    <input type="email" id="email" class="form-control border-0 px-4"
                                        placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" id="subject" class="form-control border-0 px-4"
                                        placeholder="Subject" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0 px-4 py-3" rows="8" id="message"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded p-5">
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-1">Our Warehouse</h5>
                                <span>Plot No. 15, Nashik Agricultural Market, Maharashtra, India - 422001</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-1">Email Us</h5>
                                <span>pankajfruitsveggies@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-1">Call Us</h5>
                                <span>+91 9876543210</span>
                            </div>
                        </div>
                        <div>
                            <iframe class="position-relative w-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.7014089536847!2d73.78163481528304!3d19.997453987028045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb2a6f0f8b77%3A0x7ee6e8d2f2c94bc6!2sNashik%20Agricultural%20Produce%20Market%20Committee!5e0!3m2!1sen!2sin!4v1755000000000!5m2!1sen!2sin"
                                frameborder="0" style="height: 230px; border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- footer -->
    <?php include('footer.php') ?>