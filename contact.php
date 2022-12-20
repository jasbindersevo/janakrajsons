


<?php include('header.php');?>


    <!-- contact-banner -->
    <section class="contact-banner-two">
        <div class="container">
            <div class="content-box">
                <h1>Contact Us</h1>
            </div>
        </div>
    </section>
    <!-- contact-banner end -->


    <!-- contact-info-section -->
    <section class="contact-info-section contact-page-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-location"></i></div>
                        <h3>Location</h3>
                        <div class="text">#12628/1A, Street No. Zero, Near Sangeet Cinema, Pratap Chowk, Ludhiana-141003, Punjab
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-telephone"></i></div>
                        <h3>Call us on</h3>
                        <div class="text">
                            <a href="tel:+919914510883">+91 99145-10883
                            </a><br />
                            <a href="tel:+917900000650">+91 79000-00650</a>
                        </div><br><br>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                    <div class="single-info-box">
                        <div class="icon-box"><i class="flaticon-envelope"></i></div>
                        <h3>Location</h3>
                        <div class="text">
                            <a href="mailto:janakrajsons@gmail.com">janakrajsons@gmail.com</a>
                            <a href="mailto:info@janakrajsons.com">info@janakrajsons.com</a>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->

    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                    <div class="contact-form-area">
                        <h2>Drop us a line</h2>
                        <form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Your Name*" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email*" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone number" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group message-btn">
                                <button name="submit" type="submit" class="theme-btn" name="submit-form">Submit a Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                    <div class="google-map-area">
                        <div 
                            class="google-map" 
                            id="contact-google-map" 
                         >
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3423.909386276363!2d75.86170891436575!3d30.889195781582877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a82fcdf68bb27%3A0x5ce5b15e7ae2118c!2sJANAK%20RAJ%20%26%20SONS%20(JRS)!5e0!3m2!1sen!2sin!4v1671106213689!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
  
    <!-- contact-section end -->
    <?php include('footer.php');?>
