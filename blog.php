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
                <h1 class="display-1 text-white animated zoomIn">Blog</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Blog</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Featured Blog Posts Section -->
    <section class="blog-section">
        <div class="container">
            <h2 class="section-title">Our Blogs</h2>
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

    <!-- footer -->
    <?php include('footer.php') ?>