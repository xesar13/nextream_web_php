<?php 
    $title = 'Contact Us';
    $subtitle='Home';
    $subtitle2='Contact Us';
?>

<?php include './layouts/layoutTop.php'?>

        <!-- Contact Section Section Start -->
        <section class="contact-section section-padding">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="contact-content">
                                <div class="section-title">
                                    <span class="sub-content wow fadeInUp">
                                        <img src="assets/img/bale.png" alt="img">
                                        Contact Us
                                    </span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        Don’t Hessite to Contact <br>
                                        Our Team Member 
                                    </h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium <br>
                                    doloremque laudantium, totam rem aperiam
                                </p>
                                <ul class="contact-list wow fadeInUp" data-wow-delay=".3s">
                                    <li>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                    <li>
                                        55 Main Street, 2nd block, Malborne, Australia
                                    </li>
                                    <li>
                                        <a href="tel:+00012345688">+000 (123) 456 88</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-right wow fadeInUp" data-wow-delay=".4s">
                               <h3>Send Us Message</h3>
                                <form action="#" id="contact-form" method="POST" class="contact-form-items">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="phone" id="phone" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email2" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <textarea name="message" id="message" placeholder="Comments"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="theme-btn">
                                                Send a Message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section Start -->
        <div class="map-section">
            <div class="map-items">
                <div class="googpemap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

<?php include './layouts/layoutBottom.php'?>