<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sri Krishna Traders</title>
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
        body {
            background-color: #fefefe;
            font-family: 'Segoe UI', sans-serif;
        }

        .product-section {
            padding: 60px 0;
        }

        .product-img {
            border-radius: 10px;
            max-width: 100%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .product-content h2 {
            color: #d4a017;
            font-weight: bold;
        }

        .product-content p {
            color: #555;
        }

        .product-points li::before {
            content: "✔️";
            margin-right: 10px;
            color: #28a745;
        }
    </style>

</head>

<body>
    <!-- Header -->
    <?php include('header.php') ?>
    <!-- End header -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Yellow Natura Proso Millet</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Yellow Natura Proso Millet</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Section  -->
    <div class="container product-section">
        <div class="row align-items-center">
            <!-- Left Side: Image -->
            <div class="col-md-6 text-center animate__animated animate__fadeInLeft">
                <img src="img/yellow-natura-proso-millet.jpeg" alt="Yellow Natura Proso Millet" class="product-img">
            </div>

            <!-- Right Side: Content -->
            <div class="col-md-6 animate__animated animate__fadeInRight product-content">
                <h2>Yellow Natura Proso Millet</h2>
                <p>
                    Yellow Natura Proso Millet is a nutritious, gluten-free grain packed with essential nutrients.
                    A perfect choice for a healthy lifestyle, it is easy to cook and versatile for a variety of dishes.
                </p>

                <ul class="product-points mt-4">
                    <li>Rich in protein and fiber</li>
                    <li>Supports digestion and weight management</li>
                    <li>Gluten-free and suitable for all age groups</li>
                    <li>Quick cooking time and mild flavor</li>
                    <li>Ideal for porridge, salads, and baked goods</li>
                </ul>

                <!-- Enquiry Button -->
                <a href="#enquiry-form"
                    class="btn btn-warning btn-lg mt-4 animate__animated animate__pulse animate__infinite"
                    data-bs-toggle="modal" data-bs-target="#enquiryModal">
                    Enquiry Now
                </a>
            </div>
        </div>
    </div>
    <!-- Section -->


    <!-- Footer -->
    <?php include('footer.php') ?>