<?php
$pageTitle = 'Masai Mara | Contact Us';
include __DIR__ . '/../includes/header.php';
?>

    <section id="contact">
        <div class="page-hero">
            <div class="container">
                <h1>Contact Us</h1>
                <p>Get in touch to start planning your African adventure</p>
            </div>
        </div>

        <div class="container">
            <h2 class="text-left">Plan Your Safari</h2>
            <p class="text-center contact-p">Our safari experts are ready to
                answer your questions and help create your dream African journey.</p>

            <div class="contact-container contact-f">
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="interest">Safari Interest</label>
                            <select id="interest" class="form-control">
                                <option value="">Select an option</option>
                                <option value="family">Family Safari</option>
                                <option value="luxury">Luxury Safari</option>
                                <option value="photography">Photography Safari</option>
                                <option value="honeymoon">Honeymoon Safari</option>
                                <option value="custom">Custom Safari</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="travel-date">Preferred Travel Dates</label>
                            <input type="text" id="travel-date" class="form-control" placeholder="Month/Year">
                        </div>

                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" class="form-control"
                                placeholder="Tell us about your dream safari..."></textarea>
                        </div>

                        <button type="submit" class="btn snd-btn">Send Message</button>
                    </form>
                </div>

                <div>
                    <div class="info-box">
                        <h4><i class="fas fa-map-marker-alt"></i> Our Offices</h4>
                        <p><strong>Nairobi Office:</strong><br>
                            Safari Adventures Center,<br>
                            Karen Road, Nairobi, Kenya</p>

                        <p><strong>Cape Town Office:</strong><br>
                            Waterfront Business Park,<br>
                            Dock Road, Cape Town, South Africa</p>
                    </div>

                    <div class="info-box">
                        <h4><i class="fas fa-phone-alt"></i> Contact Information</h4>
                        <p><strong>Phone:</strong> +254 700 123 456 (Kenya)<br>
                            <strong>Phone:</strong> +27 21 123 4567 (South Africa)<br>
                            <strong>Email:</strong> info@safariadventures.com
                        </p>

                        <p><strong>Office Hours:</strong><br>
                            Monday-Friday: 8:00 AM - 5:00 PM (GMT+3 / GMT+2)</p>
                    </div>

                    <div class="info-box">
                        <h4><i class="fas fa-headset"></i> Safari Specialists</h4>
                        <p>Our team of safari experts includes:</p>
                        <ul>
                            <li>Certified safari guides with 10+ years experience</li>
                            <li>Wildlife biologists and conservation specialists</li>
                            <li>Local experts from each safari region</li>
                            <li>Multilingual consultants</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

