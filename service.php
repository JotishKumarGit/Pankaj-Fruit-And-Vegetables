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


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Services</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Services</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    
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



  
    <!-- footer -->
    <?php include('footer.php') ?>