<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="enquiryForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="userName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="userName" required>
                    </div>

                    <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userEmail" required>
                    </div>

                    <div class="mb-3">
                        <label for="userMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="userMessage" rows="3" required></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit & Go to WhatsApp</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- script of modal -->
<script>
    document.getElementById('enquiryForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const name = document.getElementById('userName').value.trim();
        const email = document.getElementById('userEmail').value.trim();
        const message = document.getElementById('userMessage').value.trim();

        const phoneNumber = "919876543210"; // Replace with your WhatsApp number (no + or spaces)

        const whatsappMessage = `Hello, my name is ${name}%0AEmail: ${email}%0AMessage: ${message}`;
        const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURI(whatsappMessage)}`;

        // Redirect to WhatsApp
        window.open(whatsappURL, '_blank');
    });
</script>

<script>
    document.getElementById("whatsappForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Form submit hone se roke

        // Input values
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var subject = document.getElementById("subject").value;
        var message = document.getElementById("message").value;

        // WhatsApp number (with country code, no + or dashes)
        var phoneNumber = "919876543210"; // <-- Replace this with your WhatsApp number

        // Message format
        var whatsappMessage = `Name: ${name}%0AEmail: ${email}%0ASubject: ${subject}%0AMessage: ${message}`;

        // Open WhatsApp
        var whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
        window.open(whatsappURL, '_blank');
    });
</script>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Pankaj Fruit And Vegetables</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <p>
                            Pankaj Fruit And Vegetables is your trusted partner in fresh and quality fruits, vegetables,
                            millets, and pulses sourced directly from trusted farmers and agricultural markets.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="blog.php"><i class="bi bi-arrow-right text-primary me-2"></i>Blog</a>
                        <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>Plot No. 15, Nashik Agricultural Market,
                        Maharashtra, India - 422001
                    </p>
                    <p class="mb-2">
                        <i class="bi bi-envelope-open text-primary me-2"></i>pankajfruitsveggies@gmail.com
                    </p>
                    <p class="mb-0">
                        <i class="bi bi-telephone text-primary me-2"></i>+91 9876543210
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i
                                class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i
                                class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i
                                class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-12">
                    <form class="mx-auto" style="max-width: 600px">
                        <div class="input-group">
                            <input type="email" class="form-control border-white p-3" placeholder="Your Email" />
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-light py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">
                        &copy;
                        <a class="text-white border-bottom" href="#">Pankaj Fruit And Vegetables</a>.
                        All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                        Designed by
                        <a class="text-white border-bottom" href="https://trade4export.com">Trade4Export</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>