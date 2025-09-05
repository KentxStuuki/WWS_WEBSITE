<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WWS | Sign Up</title>
   <!-- Css And Scass Connection -->
    <link rel="stylesheet" href="../../../public/main/style/main.css">
    <link rel="stylesheet" href="../../../public/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../public/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

        <!-- Java Script Connection -->
    <script src="../../../public/main/script/bootstrap.bundle.min.js"></script> 
    <script src="../../../public/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../../public/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../main/script/data.js"></script>


  <style>
  @media (min-width: 768px) {
    .section-paragraph {
      margin-left: 110px;
    }
  }
</style>
</head>
<body class="bg-light" data-bs-spy="scroll" data-bs-target="#nav-tabs" data-bs-offset="0" data-bs-smooth-scroll="true" tabindex="0">
   <!-- Navbar Section -->
    <div class="pt-3 pb-1 mx-5">
        <!-- Top header (Desktop only) -->
        <div class="d-none d-lg-flex justify-content-between px-2 mx-5 gap-2">
            <h4 class="mx-2 fs-4">Pathway to Financial Security & Generational Wealth</h4>
            <h4 class="mx-5 px-5 fs-4">800-533-0538 <img src="../../main/images/call.png" alt="Phone Icon" style="width: 35px; height: auto;"></h4>
        </div>

        <!-- Top header (Mobile only) -->
        <div class="nav_header_mobile d-flex flex-column align-items-center d-lg-none  text-center">
            <h4 class="mb-2">800-533-0538 <img src="../../main/images/call.png" alt="Phone Icon" class="mb-1" style="width: 25px; height: auto;"></h4>
            <h4>Pathway to Financial Security & Generational Wealth</h4>
        </div>
     </div>
<div class="">
    <!-- Navbar -->
    <div class="navbar_container navbar border border-secondary rounded-pill shadow-sm  position-relative px-1 mx-5" style="width: 91%;" >
        <div class="d-flex align-items-center justify-content-between w-100"> 
            <!-- Logo -->
            <img src="../../main/images/wws_logo.png" alt="WWS logo" style="width: 50px; height: auto;">

            <!-- Title -->
            <h3 class="text-secondary m-0 ms-2 d-none d-lg-block">WINWARD WEALTH SYSTEMS</h3>
            <h5 class="text-secondary fs-6 m-0 text-center w-100 d-lg-none">WINWARD WEALTH SYSTEMS</h5>


            <!-- Centered Navigation (desktop only) -->
            <nav class="flex-grow-1 d-none d-lg-flex justify-content-center pe-5">
                <ul class="d-flex gap-4 list-unstyled align-items-end m-0  nav-tabs" style="font-size: 18px;">
                    <li><a href="#intro" class="nav-link text-decoration-none text-secondary">Home</a></li>
                    <li><a href="#about" class="nav-link text-decoration-none text-secondary">About Us</a></li>
                    <li><a href="#services" class="nav-link text-decoration-none text-secondary">Services</a></li>
                    <li><a href="#testimonials" class="nav-link text-decoration-none text-secondary">Testimonials</a></li>
                    <li><a href="#contact" class="nav-link text-decoration-none text-secondary">Contact Us</a></li>
                </ul>
            </nav>

            <!-- Floating button (desktop only) -->
            <a href="components/signup.php" class="btn btn-info text-white position-absolute top-50 translate-middle-y px-5 py-4 fs-5 rounded-pill d-none d-lg-block" style="right: -10px;">
                Sign Up
            </a>

            <!-- Hamburger button (mobile only) -->
            <button class="btn btn-info text-white rounded-circle p-4 fs-3 d-lg-none ms-auto position-absolute top-50 translate-middle-y" style="right: -10px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </div>
</div>

<!-- Offcanvas Menu (mobile) -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-secondary " id="mobileMenuLabel">WINWARD WEALTH SYSTEMS</h5> 
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav fw-bold fs-5">
            <li class="nav-item"><a href="#" class="nav-link text-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-secondary">About Us</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-secondary">Services</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-secondary">Testimonials</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-secondary">Contact Us</a></li>
        </ul>
        <div class="mt-4">
            <a href="components/signup.php" class="btn btn-info text-white px-4 py-2 rounded-pill w-100">Sign Up</a>
        </div>
    </div>
</div>

 
<section class="text-center text-white d-flex flex-column justify-content-center align-items-center mt-4" 
           style="background: url('../../main/signup_section/signup_background.jpg') center/cover no-repeat; min-height: 20vh;">
    <h1 class="fw-bold display-4">Sign Up</h1>
</section>
 

<section class="my-4">
  <div class="container">
    <form class="row align-items-center g-4">
      <div class="col-12 col-md-6 text-center text-start">
        <h5 class="mb-0 section-paragraph mx-auto">
          Sign Up to Receive Rewarding Deals for Any of Our Services
        </h5>
      </div>
    
      <div class="col-12 col-md-6">
        <div class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Type here..." aria-label="Search"
          style="border:3px solid #077FFF;">
          <button class="btn btn-info w-25" type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>
</section>

<div class="text-center" style="margin-bottom: -39px;">
  <h3 class="fw-bold bg-white text-info rounded-pill px-3 px-md-4 py-2 py-md-3 d-inline-block"
      style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.25); max-width: 90%;">
    Be a Step Ahead in Getting Rewarding Financial Solutions
  </h3>
</div>



<section class="text-white text-center p-4" style="background-color:#000080; margin-top: -1rem;">
  <p class="fs-4 mt-4">
    You can get a head start in solving your money matters by filling out and sending us the form below.
    <br>It puts you closer to getting the rewarding financial solution you need and deserve. 
  </p>
   

  <p class="fw-bold fs-4 mt-3">
    Or, you can reach us by phone at  
    <span class="bg-white text-dark px-2 py-1 rounded d-inline-flex align-items-center">
      <span id="phone-number" class="text-dark">1-800-533-0538</span>
      <button class="btn btn-sm btn-link text-dark ms-2 p-0" 
              onclick="copyPhone()" style="line-height: 1;">
        <img src="../../main/signup_section/copyicon.png" alt="Copy Icon" style="width:20px; height:20px;">
      </button>
      <small id="copy-msg" class="text-success ms-2 d-none">Copied!</small>
    </span>  
    for immediate assistance.
  </p>
</section>




<section class="py-5" 
  style="background: url('../../main/signup_section/signup_background2.jpg') center/cover no-repeat;">
  
  <div class="container h-100">
    <div class="row g-4 h-100 align-items-center">
      
      <!-- Left: Form -->
      <div class="col-md-6 d-flex flex-column justify-content-center" style="border-right:3px solid #077FFF; padding-right:2rem;">
<div class="d-flex justify-content-center">
  <div class="d-flex align-items-center position-relative">

    <!-- Step 1 -->
    <div class="position-relative d-flex justify-content-center align-items-center" style="width:60px; height:60px;">
      <!-- Outer blue circle -->
      <div class="rounded-circle bg-info w-100 h-100"></div>
      <!-- Inner white-bordered circle -->
      <div class="rounded-circle position-absolute d-flex justify-content-center align-items-center" 
           style="width:50px; height:50px; border:3px solid white; top:50%; left:50%; transform:translate(-50%, -50%); font-weight:600; font-size:40px; font-family:cambria; color:white;">
        1
      </div>
    </div>

    <!-- Line between Step 1 and 2 -->
    <div style="width:40px; height:7px; background-color:#CCCCCC; margin-left:-1px; margin-right:-1px;"></div>

    <!-- Step 2 -->
    <div class="position-relative d-flex justify-content-center align-items-center" style="width:60px; height:60px;">
      <!-- Outer gray circle -->
      <div class="rounded-circle" style="width:100%; height:100%; background-color:#CCCCCC;"></div>
      <!-- Inner white-bordered circle -->
      <div class="rounded-circle position-absolute d-flex justify-content-center align-items-center" 
           style="width:50px; height:50px; border:3px solid white; top:50%; left:50%; transform:translate(-50%, -50%); font-weight:600; font-size:40px; font-family:cambria; color:white;">
        2
      </div>
    </div>

    <!-- Line between Step 2 and 3 -->
    <div style="width:40px; height:7px; background-color:#CCCCCC; margin-left:-1px; margin-right:-1px;"></div>

    <!-- Step 3 -->
    <div class="position-relative d-flex justify-content-center align-items-center" style="width:60px; height:60px;">
      <!-- Outer gray circle -->
      <div class="rounded-circle" style="width:100%; height:100%; background-color:#CCCCCC;"></div>
      <!-- Inner white-bordered circle -->
      <div class="rounded-circle position-absolute d-flex justify-content-center align-items-center" 
           style="width:50px; height:50px; border:3px solid white; top:50%; left:50%; transform:translate(-50%, -50%); font-weight:600; font-size:40px; font-family:cambria; color:white;">
        3
      </div>
    </div>

  </div>
</div>





        <form style="margin-top:1.5rem;">
          <!-- Contact Information -->
          <div class="mb-3">
            <label class="form-label">Contact Information</label>
            <input type="text" class="form-control" style="border:3px solid #077FFF;" placeholder="Contact Information">
          </div>

          <!-- First & Last Name -->
          <div class="row mb-3">
            <div class="col">
              <label class="form-label">First Name</label>
              <input type="text" class="form-control" style="border:3px solid #077FFF;" placeholder="First Name">
            </div>
            <div class="col">
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control" style="border:3px solid #077FFF;" placeholder="Last Name">
            </div>
          </div>

         <!-- Email & Phone Number -->
<div class="row mb-3">
  <!-- Email Input -->
  <div class="col">
    <label class="form-label">Email Address</label>
    <input type="email" class="form-control" style="border:3px solid #077FFF;" placeholder="Email Address">
  </div>

  <!-- Phone Input with PH flag and separator -->
  <div class="col">
  <label class="form-label">Phone Number</label>
  <div class="d-flex align-items-center" 
       style="border:3px solid #077FFF; border-radius:0.25rem; overflow:hidden;">
    

    <div class="d-flex align-items-center px-3" style="border-right:2px solid #077FFF;">
      <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Flag_of_the_Philippines.svg" 
           alt="PH Flag" style="width:35px; height:20px;">
    </div>
 
    <input type="tel" class="form-control" placeholder="9** *** ****" style="border:none;">
    
  </div>
</div>
</div>

          <!-- Submit Button -->
        <div class="d-flex justify-content-end">
  <button type="submit" class="btn text-white px-5" 
          style="background-color: #077FFF; border: 3px solid #077FFF;"
          onmouseover="this.style.backgroundColor='#055FCC'; this.style.borderColor='#055FCC';"
          onmouseout="this.style.backgroundColor='#077FFF'; this.style.borderColor='#077FFF';">
    Next
  </button>
</div>


        </form>

      </div>

      <!-- Right: Privacy -->
      <div class="col-md-6 d-flex flex-column justify-content-start" style="padding-left:2rem;">
        <h2 class="text-secondary fw-bold mb-3">We value and respect <br>
         your privacy</h2>
        <p class="fs-4">
          Rest assured that the information we receive <br>will only be used by us and for its intended<br> purpose 
          which is to make helping you <br>convenient and a more efficient process.
        </p>
      </div>

    </div>
  </div>
</section>

<section>
  <footer class="bg-secondary text-white pt-4">
    <div class="container ps-4 pe-5 py-3 ps-5 pe-5 gap-4">
      <div class="row g-4 text-center text-md-start align-items-start">
            <div class="col-12 col-md-5 col-lg-4 d-flex flex-column justify-content-between">
                <div>
                <p class="fw-bold fs-5">Follow Winward Wealth Systems on Social Media</p>
                <p class="fs-6 mb-3">
                    We're passionate about delivering the best possible rewarding results for any money matters you wish to bring forth a solution or resolution.
                </p>
                </div>
            <div class="d-flex justify-content-center justify-content-md-start gap-3 mt-5 mb-0" style="padding-top: 10%;">
                <a href="#"><img src="../../main/contactus/fb.png" class="img-fluid" style="max-width:40px;" alt="Facebook"></a>
                <a href="#"><img src="../../main/contactus/x.png" class="img-fluid" style="max-width:40px;" alt="X"></a>
                <a href="#"><img src="../../main/contactus/ig.png" class="img-fluid" style="max-width:40px;" alt="Instagram"></a>
                <a href="#"><img src="../../main/contactus/in.png" class="img-fluid" style="max-width:40px;" alt="LinkedIn"></a>
            </div>
            </div>

        <div class="col-6 col-md-3 col-lg-3">
          <p class="fw-bold fs-5">Quick Links</p>
          <div class="d-flex flex-wrap fs-6 mb-0 gap-3">
            <ul class="list-unstyled me-4 mb-0 py-4">
                <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                <li><a href="#" class="text-white text-decoration-none">Services</a></li>
                <li><a href="#" class="text-white text-decoration-none">Testimonials</a></li>
            </ul>
            <ul class="list-unstyled mb-0 py-4">
                <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                <li><a href="#" class="text-white text-decoration-none">Affiliate Program</a></li>
                <li><a href="#" class="text-white text-decoration-none">Terms & Condition</a></li>
                <li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
            </ul>
        </div>
        </div>

        <div class="col-12 col-md-4 col-lg-5">
          <p class="fw-bold fs-5">Feedback</p>
          <form>
            <div class="mb-0 py-4">
              <h5>Full Name</h5>
              <input type="text" class="form-control rounded-2" placeholder="Full name">
            </div>
            <div class="mb-3">
                <h5>Feedback</h5>
              <textarea class="form-control rounded-2" rows="2" placeholder="Feedback"></textarea>
            </div>
            <button type="submit" class="btn btn-info text-white w-100 rounded-2">Send</button>
          </form>
        </div>
      </div>
    </div>

    <div class="text-center mt-3 pb-3 bg-white text-secondary py-3">
      <small class="fs-6">Winward Wealth Systems &lt;W&gt; Copyright 2025 &lt;W&gt; All Rights Reserved</small>
    </div>
  </footer>
</section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  function copyPhone() {
    const phone = document.getElementById("phone-number").textContent;
    navigator.clipboard.writeText(phone).then(() => {
      const msg = document.getElementById("copy-msg");
      msg.classList.remove("d-none"); 
      setTimeout(() => msg.classList.add("d-none"), 1500); 
    });
  }
</script>
</body>
</html>





