<footer class="footer bg-dark text-light py-4">
    <div class="container">
        <div class="row">
            
            <!-- Contact Info -->
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>Email: support@esportsarena.com</p>
                <p>Phone: +61 342 543 661</p>
                <p>Address: 123 Gaming St, Esports Arena</p>
            </div>

            <!-- Newsletter Signup -->
            <div class="col-md-4">
                <h5>Newsletter</h5>
                <p>Stay updated with our latest tournaments & events!</p>

                <!-- Newsletter form that will trigger javascript on submission. This form is fake and will be handled by javascript as shown at the bottom of footer.php-->
                <form id="newsletterForm" onsubmit="event.preventDefault(); handleFormSubmit();">
                    <input type="email" id="email" class="form-control mb-2" placeholder="Enter your email" required>
                    <button type="submit" class="btn btn-primary btn-sm">Subscribe</button>
                </form>

                <!-- Success Message (hidden initially until the user enters email) -->
                <div id="successMessage" style="display: none; color: green; margin-top: 10px;">
                    Thank you for subscribing! You’ll be the first to know about our events and updates!
                </div>
            </div>

            <!-- Social Media Icons -->
            <div class="col-md-4 text-center">
                <h5>Follow Us</h5>
                <!-- Links are FAKE (but there is already an Esports Arena around, so the YouTube, Twitter and Instagram pages are real - this was not my intention, as this website is not built for them, but it's there) -->
                <div class="social-icons">
                    <a href="https://facebook.com/esportsarena" target="_blank" rel="noopener noreferrer" class="me-3">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="https://twitter.com/esportsarena" target="_blank" rel="noopener noreferrer" class="me-3">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="https://instagram.com/esportsarena" target="_blank" rel="noopener noreferrer" class="me-3">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>
                    <a href="https://youtube.com/esportsarena" target="_blank" rel="noopener noreferrer" class="me-3">
                        <i class="fab fa-youtube fa-2x"></i>
                    </a>
                    <a href="https://discord.gg/esportsarena" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-discord fa-2x"></i>
                    </a>
                </div>
            </div>

        </div>

        <!-- Divides the footer, so that sponsors/partners can go in the next row -->
        <hr class="bg-light">

        <!-- Sponsors / Partners -->
        <div class="text-center">
            <h5>Our Partners</h5>
            <p>Supported by:</p>
            <div class="sponsor-logos d-flex justify-content-center align-items-center flex-wrap">
                <div class="sponsor-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/redbull.png"
                        alt="Red Bull Gaming Sponsor Logo"
                        class="img-fluid sponsor-img">
                </div>

                <div class="sponsor-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/intel.png" 
                        alt="Intel Sponsor Logo"
                        class="img-fluid sponsor-img">
                </div>

                <div class="sponsor-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/razer.png" 
                        alt="Razer Gaming Sponsor Logo"
                        class="img-fluid sponsor-img">
                </div>
            </div>
        </div>

        <!-- Another divider to make the site look better -->
        <hr class="bg-light">

        <!-- Bottom Footer, displaying copyright and year -->
        <div class="text-center">
            <p>&copy; <?php echo date('Y'); ?> Esports Arena. All Rights Reserved.</p>
        </div>
    </div>

    <?php wp_footer(); ?>
</footer>

<!-- Includes Font Awesome for Social Icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>


<script>
    // Javacscript function to handle the fake form submission from above
    function handleFormSubmit() 
    {
        // Get the email value from the input field
        const email = document.getElementById('email').value;

        // Checks if the email field is not empty 
        if (email) 
        {
            // Display the success message
            document.getElementById('successMessage').style.display = 'block';
            // Clears the email input field after submission
            document.getElementById('email').value = '';
        } 
        else 
        {
            // If no email is provided, there is an error. 
            alert('Please enter a valid email address.');
        }
    }
</script>