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
                <h1 class="display-1 text-white animated zoomIn">Watermelon</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Watermelon</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


<section class="product-details py-4">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- Product Image -->
            <div class="col-md-6">
                <div class="product-image p-3 shadow-sm rounded bg-white">
                    <img src="img/Watermelon.jpg" height="auto" width="100%" alt="Watermelon" class="img-fluid rounded">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Watermelon</h2>

                <p class="text-muted">
                    Our Watermelons are freshly harvested to ensure maximum juiciness, natural sweetness,
                    and refreshing flavor. Perfect for summer consumption, juices, fruit salads, and commercial use.
                </p>

                <ul class="list-unstyled">
                    <li>✔ Naturally sweet and extremely juicy</li>
                    <li>✔ Rich in hydration and essential nutrients</li>
                    <li>✔ Farm-fresh and quality inspected</li>
                    <li>✔ Available in bulk and retail quantities</li>
                </ul>

                <!-- Enquiry Button -->
                <a href="#" data-bs-toggle="modal" data-bs-target="#enquiryModal"
                    class="btn btn-warning fw-bold px-4 mt-3">
                    Send Enquiry
                </a>
            </div>

        </div>
    </div>
</section>


  
    <!-- footer -->
    <?php include('footer.php') ?>