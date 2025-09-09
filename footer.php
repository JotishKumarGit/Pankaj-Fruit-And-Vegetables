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

        const phoneNumber = "919944165801"; // Replace with your WhatsApp number (no + or spaces)

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
        var phoneNumber = "919944165801"; // <-- Replace this with your WhatsApp number

        // Message format
        var whatsappMessage = `Name: ${name}%0AEmail: ${email}%0ASubject: ${subject}%0AMessage: ${message}`;

        // Open WhatsApp
        var whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
        window.open(whatsappURL, '_blank');
    });
</script>

