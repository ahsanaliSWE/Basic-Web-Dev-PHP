<?php
    require_once('require/database_connection.php');
    require_once('require/library.php');
?>

            <!-- header -->
           <?php General::site_header('Apple') ?>
            <!-- header -->

            <!-- navbar -->
            <?php General::site_navbar() ?>
            <!-- navbar -->

            <!-- modal -->
            <?php General::login_modal() ?>
            <!-- modal -->

            <!-- slider -->
            <?php General::site_slider() ?>
            <!-- slider -->


            <!-- hero section -->
            <?php General::site_hero("iPhone 15 Pro","Titanium. So strong. So light. So Pro.") ?>
            <!-- hero section -->

            
            <!-- product section -->
            <div class="row bg-light text-center mt-5 py-5 fw-bold shadow-md rounded-3 border-bottom border-2 border-dark">
                    <div class="col-12">
                        <h1 class="display-4 fw-bold">Our Products</h1>
                    </div>

                    <div class="col-12 mt-4">
                        <p class="lead text-muted">Explore the latest Apple products and accessories.</p>
                    </div>
            </div>

            <div class="container mx-auto shadow-md rounded-3">
                <div class="row bg-light text-center py-5 fw-bold shadow-md rounded-3">
                    <div class="col-12">
                        <h1 class="display-4 fw-bold" id="iphone">iPhones</h1>
                    </div>
                </div>
                <div class="row bg-light text-center py-5 fw-bold shadow-md rounded-3">
                <?php
                    $query = "SELECT * FROM products WHERE category = 'iphone'";
                    $result = mysqli_query($connection, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    
                            General::products_card($row['image'], $row['name'], $row['description'], $row['price']);
                    
                        }
                    } else {
                        echo "<p class='text-center'>No products found.</p>";
                    }
                ?>

                </div>           
            </div>

            <div class="container mx-auto shadow-md rounded-3">
                <div class="row bg-light text-center py-5 fw-bold shadow-md rounded-3">
                    <div class="col-12">
                        <h1 class="display-4 fw-bold" id="ipads">iPads</h1>
                    </div>
                </div>
                <div class="row bg-light text-center py-5 fw-bold shadow-md rounded-3">
                <?php
                    $query = "SELECT * FROM products WHERE category = 'ipad'";
                    $result = mysqli_query($connection, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    
                            General::products_card($row['image'], $row['name'], $row['description'], $row['price']);
                    
                        }
                    } else {
                        echo "<p class='text-center'>No products found.</p>";
                    }
                ?>

                </div>           
            </div>

            <div class="container mx-auto shadow-md rounded-3">
                <div class="row bg-light text-center py-5 fw-bold shadow-md rounded-3">
                    <div class="col-12">
                        <h1 class="display-4 fw-bold" id="mac">Mac</h1>
                    </div>
                </div>
                <div class="row bg-light text-center py-5 fw-bold shadow-md rounded-3">
                <?php
                    $query = "SELECT * FROM products WHERE category = 'Mac'";
                    $result = mysqli_query($connection, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    
                            General::products_card($row['image'], $row['name'], $row['description'], $row['price']);
                    
                        }
                    } else {
                        echo "<p class='text-center'>No products found.</p>";
                    }
                ?>

                </div>           
            </div>


            <div class="container mx-auto shadow-md rounded-3">
                <div class="row bg-light text-center py-5 fw-bold shadow-md rounded-3">
                    <div class="col-12">
                        <h1 class="display-4 fw-bold" id="watch">Watch</h1>
                    </div>
                </div>
                <div class="row bg-light text-center py-5 fw-bold shadow-md rounded-3">
                <?php
                    $query = "SELECT * FROM products WHERE category = 'watch'";
                    $result = mysqli_query($connection, $query);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    
                            General::products_card($row['image'], $row['name'], $row['description'], $row['price']);
                    
                        }
                    } else {
                        echo "<p class='text-center'>No products found.</p>";
                    }
                ?>

                </div>           
            </div>
            
            
            <!-- product section -->  

            <!-- about us section -->

            <div class="row bg-white py-5">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold" id="about-us">About Us</h1>
                </div>

                <div class="col-12 mt-4 px-5">
                    <p class="lead text-muted mb-4">
                        Welcome to our Apple-inspired tech hub! We are passionate about delivering the most elegant, powerful, and user-friendly products to elevate your digital lifestyle. 
                    </p>
                    <p class="text-muted">
                        From the sleek MacBook lineup and innovative iPhones to the immersive iPads and feature-packed Apple Watches — we aim to bring you the best of Apple's ecosystem, all in one place.
                        Our platform not only showcases the finest Apple gear but also ensures a seamless and secure shopping experience. Whether you're a student, creative professional, or tech enthusiast, we’re here to help you find the perfect Apple product for your needs.
                    </p>
                    <p class="text-muted">
                        Trust, innovation, and customer satisfaction are at the core of everything we do.
                        Join us on our journey as we celebrate the design, technology, and inspiration behind Apple.
                    </p>
                </div>
            </div>
            <!-- about us section -->


                <!-- support section -->
                <div class="bg-light py-5">
                    <div class="container">
                        <h2 class="fw-bold text-center mb-4" id="support">Support</h2>
                        <p class="lead text-center text-muted mb-5">We’re here to help. Find answers to common questions or reach out directly.</p>

                        <div class="row text-center mb-5">
                            <div class="col-md-4">
                                <div class="p-4 bg-white rounded shadow-sm h-100">
                                    <i class="bi bi-envelope-fill fs-2 text-dark mb-2"></i>
                                    <h5>Email Support</h5>
                                    <p class="text-muted">Get in touch with us via email and we’ll respond within 24 hours.</p>
                                    <a href="mailto:support@applehub.com" class="btn btn-outline-dark btn-sm">Email Us</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 bg-white rounded shadow-sm h-100">
                                    <i class="bi bi-chat-dots-fill fs-2 text-dark mb-2"></i>
                                    <h5>Live Chat</h5>
                                    <p class="text-muted">Talk with our experts in real-time for quick solutions.</p>
                                    <a href="#" class="btn btn-outline-dark btn-sm">Start Chat</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-4 bg-white rounded shadow-sm h-100">
                                    <i class="bi bi-telephone-fill fs-2 text-dark mb-2"></i>
                                    <h5>Call Us</h5>
                                    <p class="text-muted">Available Mon–Sat, 9AM to 6PM.</p>
                                    <p class="fw-bold">+1 (800) 555-APPLE</p>
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold text-center mb-4">Frequently Asked Questions</h4>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        How do I track my order?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        After placing your order, you’ll receive a tracking ID via email. You can use it to track your order status on our Order Tracking page.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        What is your return policy?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        You can return any product within 14 days of delivery for a full refund, as long as it’s in original condition.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        Do you offer student discounts?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        Yes! We offer exclusive discounts for students. Please verify your student status during checkout to apply the discount.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- support section -->



                <!-- footer -->
               <?php General::site_footer() ?>
                <!-- footer -->


                <?php General::site_scripts() ?>