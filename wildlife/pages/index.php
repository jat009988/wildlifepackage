<?php
$pageTitle = 'Masai Mara | Wildlife Safari Adventures';
include __DIR__ . '/../includes/header.php';
?>

    <section class="hero">
        <div class="hero-overlay">
            <div class="container">
                <div class="hero-content">
                    <h1>Experience the Magic of Masai Mara</h1>
                    <p>Witness the greatest wildlife spectacle on Earth</p>
                    <a href="packages.php" class="btn btn-accent">Book Your Safari</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section intro">
        <div class="container">
            <div class="section-header text-left">
                <h2>Welcome to Masai Mara</h2>
                <p>Kenya's Premier Wildlife Destination</p>
            </div>
            <div class="grid grid-2">
                <div class="intro-content">
                    <p>The Masai Mara National Reserve is one of Africa's most renowned wildlife conservation areas,
                        famous for its exceptional population of lions, leopards, cheetahs, and the annual Great
                        Migration of wildebeest and zebra.</p>
                    <p>Spanning over 1,500 square kilometers of rolling savannah, riverine forests, and acacia
                        woodlands, the Mara offers unparalleled wildlife viewing opportunities throughout the year.</p>
                    <div class="features">
                        <div class="feature">
                            <i class="fas fa-paw"></i>
                            <h4>Big Five</h4>
                            <p>See lions, leopards, elephants, rhinos, and buffalo</p>
                        </div>
                        <div class="feature">
                            <i class="fas fa-camera"></i>
                            <h4>Photography</h4>
                            <p>Perfect opportunities for wildlife photography</p>
                        </div>
                    </div>
                </div>
                <div class="intro-image">
                    <img src="../images/savannah.jpg" alt="Masai Mara Savannah" class="rounded">
                </div>
            </div>
        </div>
    </section>

    <section class="section wildlife-highlights">
        <div class="container">
            <div class="section-header text-left">
                <h2>Wildlife Highlights</h2>
                <p>Discover the incredible animals of Masai Mara</p>
            </div>
            <div class="grid grid-3">
                <div class="animal-card">
                    <div class="animal-image">
                        <img src="../images/lion.jpg" alt="Lion">
                    </div>
                    <div class="animal-info">
                        <h3>African Lion</h3>
                        <p>The apex predator of the savannah, lions are frequently spotted in prides throughout the
                            reserve.</p>
                        <a href="wildlife.php" class="btn">View More</a>
                    </div>
                </div>
                <div class="animal-card">
                    <div class="animal-image">
                        <img src="../images/elephant.jpg" alt="Elephant">
                    </div>
                    <div class="animal-info">
                        <h3>African Elephant</h3>
                        <p>Majestic herds of elephants roam the grasslands and gather near watering holes.</p>
                        <a href="wildlife.php" class="btn">View More</a>
                    </div>
                </div>
                <div class="animal-card">
                    <div class="animal-image">
                        <img src="../images/cheetah.jpg" alt="Cheetah">
                    </div>
                    <div class="animal-info">
                        <h3>Cheetah</h3>
                        <p>Witness the world's fastest land animal in action during thrilling hunts.</p>
                        <a href="wildlife.php" class="btn">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section packages">
        <div class="container">
            <div class="section-header text-left">
                <h2>Safari Packages</h2>
                <p>Tailored experiences for every traveler</p>
            </div>
            <div class="package-table">
                <table>
                    <thead>
                        <tr>
                            <th>Package</th>
                            <th>Duration</th>
                            <th>Accommodation</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mara Explorer</td>
                            <td>3 Days / 2 Nights</td>
                            <td>Tented Camp</td>
                            <td>$850</td>
                            <td><a href="packages.php" class="btn">Details</a></td>
                        </tr>
                        <tr>
                            <td>Great Migration Special</td>
                            <td>5 Days / 4 Nights</td>
                            <td>Lodge & Camp</td>
                            <td>$1,450</td>
                            <td><a href="packages.php" class="btn">Details</a></td>
                        </tr>
                        <tr>
                            <td>Photographic Safari</td>
                            <td>7 Days / 6 Nights</td>
                            <td>Premium Lodge</td>
                            <td>$2,300</td>
                            <td><a href="packages.php" class="btn">Details</a></td>
                        </tr>
                        <tr>
                            <td>Family Adventure</td>
                            <td>4 Days / 3 Nights</td>
                            <td>Family Lodge</td>
                            <td>$1,150</td>
                            <td><a href="packages.php" class="btn">Details</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="section testimonials">
        <div class="container">
            <div class="section-header text-left">
                <h2 class="text-center">Visitor Experiences</h2>
                <p class="text-center">What our guests say about their safari</p>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial active">
                    <p>"The Masai Mara exceeded all our expectations. Our guide was incredibly knowledgeable and we saw
                        the Big Five within our first two days!"</p>
                    <div class="author">- Sarah J., USA</div>
                </div>
                <div class="testimonial">
                    <p>"Witnessing the Great Migration was a once-in-a-lifetime experience. The sheer number of
                        wildebeest crossing the river was breathtaking."</p>
                    <div class="author">- David M., UK</div>
                </div>
                <div class="testimonial">
                    <p>"As a photographer, I found endless opportunities for amazing shots. The golden light at sunrise
                        and sunset is magical."</p>
                    <div class="author">- Kenji T., Japan</div>
                </div>
                <div class="testimonial-nav">
                    <button class="prev"><i class="fas fa-chevron-left"></i></button>
                    <button class="next"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h3>Ready for Your Adventure?</h3>
                <p>Book your safari today and experience the wonder of Masai Mara</p>
                <a href="contact.php" class="btn btn-accent">Contact Us Now</a>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

