<script type="text/javascript">
   
    // Function to save form data
        function saveData(event) {
            event.preventDefault(); // Prevent form submission

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const mobile = document.getElementById('mobile').value;
            const message = document.getElementById('message').value;

            // Create an object to hold the data
            const formData = {
                name: name,
                email: email,
                mobile: mobile,
                message: message,
                timestamp: new Date().toISOString()
            };

            // Log the data to the console
            console.log("Form Data:", formData);

            // Get existing data from local storage
            const existingData = JSON.parse(localStorage.getItem('contactFormData')) || [];
            existingData.push(formData); // Append new data

            // Save updated data back to local storage
            localStorage.setItem('contactFormData', JSON.stringify(existingData));

            alert(`Thank you for contacting us, ${name}. We will get back to you soon.`);
            document.getElementById('contactForm').reset(); // Reset form
        }
     
</script>
<!-- Contact Start -->
<div class="container-fluid py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h5 class="text-primary">Get In Touch</h5>
            <h1 class="mb-3">Contact for any query</h1>
            <!-- <p class="mb-2">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
        </div>
        <div class="contact-detail position-relative p-5">
            <div class="row g-5 mb-5 justify-content-center">
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Address</h4>
                            <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">Chennai-600045 </br>Salem-636503</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fa fa-phone text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Call Us</h4>
                            <a class="h5" href="tel:+91 9659396640" target="_blank">+91 9659396640</a></br>
                            <a class="h5" href="tel:+91 9659396640" target="_blank">+91 9894842640</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                    <div class="d-flex bg-light p-3 rounded">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h4 class="text-primary">Email Us</h4>
                            <a class="h5" href="mailto:skytech@gmail.com" target="_blank">skytech.startup@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                    <div class="p-5 h-100 rounded contact-map">
                        <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                
                <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                    <form id="contactForm" onsubmit="saveData(event)">
                    <div class="p-5 rounded contact-form">
                        <div class="mb-4">
                            <input type="text" id="name" name="name" class="form-control border-0 py-3" placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <input type="email" id="email" name="email" class="form-control border-0 py-3" placeholder="Your Email">
                        </div>
                        <div class="mb-4">
                            <input type="text" id="mobile" name="mobile" class="form-control border-0 py-3" placeholder="Your Mobile Number">
                        </div>
                        <div class="mb-4">
                            <textarea class="w-100 form-control border-0 py-3" id="message" name="message" rows="6" cols="10" placeholder="Message"></textarea>
                        </div>
                        <div class="text-start">
                            <button class="btn bg-primary text-white py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                    </form>
                    
                </div>
                
            </div>
        </div>
    </div> 
</div>
        <!-- Contact End -->
<div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
    <div class="container pt-5 pb-4">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <a href="index.php">
                    <h1 class="text-white fw-bold d-block"><img src="img/sky_black_bg.png" style="    width: 230px;" /></h1>
                </a>
                <p class="mt-4 text-light">At SKY TecH, we're not just about technology; we're about empowering businesses to bloom in
                              the digital era.</p>
                
                <div class="d-flex hightech-link">
                    <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                    <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                    <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                    <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Short Link</a>
                <div class="mt-4 d-flex flex-column short-link">
                    <a href="about.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                    <a href="contact.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                    <a href="service.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Services</a>
                    <a href="project.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Projects</a>
                    <a href="blog.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Help Link</a>
                <div class="mt-4 d-flex flex-column help-link">
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Terms Of use</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                    <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>FQAs</a>
                    <a href="contact.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="h3 text-secondary">Contact Us</a>
                <div class="text-white mt-4 d-flex flex-column contact-link">
                    <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Chennai - 600045</a>
                    <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Salem - 636503</a>
                    <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> +91 9659396640 </a>
                     <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> + 91 9894842640</a>
                    <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> skytech.startup@gmail.com</a>
                </div>
            </div>
        </div>
        <hr class="text-light mt-5 mb-4">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-light"><a href="#" class="text-secondary text-white fw-bold "><i class="fas fa-copyright text-secondary me-2"></i> <img src="img/sky_black_bg.png" style="width: 90px;margin-top: -11px;"/> </a>, All right reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <span class="text-light fw-bold">Designed By<a href="https://htmlcodex.com" class="text-white"> <img src="img/sky_black_bg.png" style="width: 90px;margin-top: -11px;"/></a> </span>
            </div>
        </div>
    </div>
</div>