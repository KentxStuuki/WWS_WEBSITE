<!-- Style -->
 <style>
    .contact-section {
    position: relative;
    padding: 0 0 50px;
    width: 100%;
    background: 
        linear-gradient(to bottom, rgba(255,255,255,0) 60%, white 40%),
        url("../main/contactus/cbg.jpg");
    background-size: cover;
    background-position: center top;
    background-repeat: no-repeat;
}


    .contact-section h2 {
        font-size: 3.5rem;
        font-weight: bold;
        /* text-shadow: 1px 1px 8px rgba(0, 0, 0, 0.5); */
        margin-bottom: 0px; /* keeps slight space before cards */
        text-shadow: 50px 50px 50px rgba(0, 0, 255, 0.7);
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-top: 0px;
    }

    .card:hover {
        background-color: var(--bs-info);
        color: white;
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        border:none;
    }

/* Ensure specific text elements inside also turn white */
.card:hover h5,
.card:hover h4,
.card:hover h6,
.card:hover p,
.card:hover a {
    color: white !important;
}


.connect-title {
    font-size: 3rem; /* Adjust size if needed */
    font-weight: 800;
    color: white; /* Main text color */
    text-align: center;
    letter-spacing: 2px;
}

.connect-title h2 {
    text-shadow: 50px 50px 50px rgba(0, 0, 255, 0.7); /* Subtle shadow for better readability */
}

 </style>
 
<section>
    <div class="container mt-5">
        <div class="d-flex flex-column flex-lg-row gap-5 mt-4 ps-5 pe-5">
            <!-- Contact Form -->
            <div class="flex-fill text-dark">
                <h1 class="flex-fill text-info fw-bold" data-aos="fade-up" data-aos-duration="1000">Contact Us</h1>
                <p class="fs-5" data-aos="fade-up" data-aos-duration="1000">
                    Have questions or need assistance? We're here to help! Reach out to us anytime and our team will glad to connect with you.
                </p>
                <form class="row g-3">
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
                        <label for="inputName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Full name">
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
                        <label for="inputEmail" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
                        <label for="inputName" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="inputNumber" placeholder="Phone Number">
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
                        <label for="inputEmail" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                    </div>

                    <div class="col-12" data-aos="fade-up" data-aos-duration="1500">
                        <label for="inputAbout" class="form-label">What is it all about?</label>
                        <input type="text" class="form-control" id="inputAbout" placeholder="What is it all about?">
                    </div>

                    <div class="col-12" data-aos="fade-up" data-aos-duration="1500">
                        <label for="inputMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="message" placeholder="Message..." rows="5"></textarea>
                    </div>

                    <div class="col-12 py-3 text-center" data-aos="fade-up" data-aos-duration="1500">
                        <button type="submit" class="btn btn-info w-50 text-white">Send</button>
                    </div>
                </form>
            </div>

            <!-- card -->
            <div class="map-mobile" style="min-width: 550px;" data-aos="flip-right" data-aos-duration="2000">
                <div class="card rounded-4 shadow-lg feedback-card text-white" style="overflow: hidden;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3158.9712648557!2d-122.4191946!3d37.6498796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f79a36fc7894d%3A0x65916de1a2ecb832!2s156%20S%20Spruce%20Ave%20%232078%2C%20South%20San%20Francisco%2C%20CA%2094080%2C%20USA!5e0!3m2!1sen!2sph!4v1756713174244!5m2!1sen!2sph"
                        width="100%"
                        height="630px"
                        style="display: block;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="border border-info">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="contact-section my-5">
  <img src="../main/images/contact_section/connect.png" class="py-5 d-block mx-auto" alt="" data-aos="fade-up" data-aos-duration="1000">
  <div class="d-flex gap-3 text-center ps-5 pe-5 w-100">
    <div class="container d-flex gap-3 flex-wrap w-100">

      <!-- Phone Card -->
      <div class="flex-fill" data-aos="fade-up" data-aos-duration="1000">
        <div class="card text-white rounded-4 shadow-sm text-center h-100">
          <div class="card-body">
            <div class="fs-1">
              <img src="../main/contactus/picon.png" alt="" class="img-fluid mb-3" style="max-width: 60px;">
            </div>
            <h4 class="text-info fw-bold">Phone Number</h4>
            <p class="mb-0 text-info"><strong>Toll Free</strong></p>
            <p class="text-dark">800-533-0538</p>
            <p class="mb-0 text-info"><strong>Phone</strong></p>
            <p class="text-dark">650-239-3224</p>
          </div>
        </div>
      </div>

      <!-- Email Card -->
      <div class="flex-fill" data-aos="fade-up" data-aos-duration="1500">
        <div class="card text-white rounded-4 shadow-sm text-center h-100">
          <div class="card-body">
            <div class="fs-1">
              <img src="../main/contactus/eicon.png" alt="" class="img-fluid mb-3" style="max-width: 60px;">
            </div>
            <h4 class="text-info fw-bold">Email Address</h4>
            <p class="mb-0 text-info"><strong>Gmail</strong></p>
            <p class="text-dark">winwardwealthsystems@gmail.com</p>
          </div>
        </div>
      </div>

      <!-- Hours Card -->
      <div class="flex-fill" data-aos="fade-up" data-aos-duration="2000">
        <div class="card text-white rounded-4 shadow-sm text-center h-100">
          <div class="card-body">
            <div class="fs-1">
              <img src="../main/contactus/Oicon.png" alt="" class="img-fluid mb-3" style="max-width: 60px;">
            </div>
            <h4 class="text-info fw-bold">Office Hours</h4>
            <p class="mb-0 text-info"><strong>Days</strong></p>
            <p class="text-dark">Mon - Fri</p>
            <p class="mb-0 text-info"><strong>Time</strong></p>
            <p class="text-dark">8 am - 5 pm</p>
          </div>
        </div>
      </div>

      <!-- Office Card -->
      <div class="flex-fill" data-aos="fade-up" data-aos-duration="2500">
        <div class="card text-white rounded-4 shadow-sm text-center h-100">
          <div class="card-body">
            <div class="fs-1">
              <img src="../main/contactus/Licon.png" alt="" class="img-fluid mb-3" style="max-width: 60px;">
            </div>
            <h4 class="text-info fw-bold">Office Location</h4>
            <p class="mb-0 text-dark">
              156 South Spruce Avenue, Suite 2078<br>
              South San Francisco, San Mateo<br>
              California [94080]
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

