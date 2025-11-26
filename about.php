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
                <h1 class="display-1 text-white animated zoomIn">About Us</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">About</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

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

    <!-- footer -->
    <?php include('footer.php') ?>