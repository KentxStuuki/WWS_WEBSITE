<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css And Scass Connection -->
    <link rel="stylesheet" href="../../public/main/style/main.css">
    <link rel="stylesheet" href="../../public/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../public/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../public/node_modules/aos/dist/aos.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <!-- Java Script Connection -->
    <script src="../../public/main/script/bootstrap.bundle.min.js"></script> 
    <script src="../../public/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../public/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../main/script/data.js"></script>
    <script src="../node_modules/aos/dist/aos.js"></script>
    <title>WWS</title>
    
</head>
<body data-bs-spy="scroll" data-bs-target="#nav-tabs" data-bs-offset="0" data-bs-smooth-scroll="true" tabindex="0">
     <!-- Navbar Section -->
    <div class="pt-3 pb-1 mx-5">
        <!-- Top header (Desktop only) -->
        <div class="d-none d-lg-flex justify-content-between px-2 mx-5 gap-2">
            <h4 class="mx-2 fs-4">Pathway to Financial Security & Generational Wealth</h4>
            <h4 class="mx-5 px-5 fs-4">800-533-0538 <img src="../main/images/call.png" alt="Phone Icon" style="width: 35px; height: auto;"></h4>
        </div>

        <!-- Top header (Mobile only) -->
        <div class="nav_header_mobile d-flex flex-column align-items-center d-lg-none  text-center">
            <h4 class="mb-2">800-533-0538 <img src="../main/images/call.png" alt="Phone Icon" class="mb-1" style="width: 25px; height: auto;"></h4>
            <h4>Pathway to Financial Security & Generational Wealth</h4>
        </div>
     </div>
     <section class="sticky-top bg-white pb-2">
        <?php include 'components/navbar.php'?>
     </section>

    <!-- Introduction Section -->
    <section id="intro" class="overflow-hidden">
        <?php include 'components/intro.php'?>
    </section>

    <div class="sep-line"></div>

    <!-- About us Section -->
    <section id="about" >
        <?php include 'components/about.php'?>
    </section>

    <!-- Services Section -->
    <section id="services">
        <?php include 'components/services.php'; ?>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials">
        <?php include 'components/testimonial.php'; ?>
    </section>

    <!-- Contact Us Section -->
    <section id="contact">
        <?php include 'components/contactus.php'; ?>
    </section>

    <!-- Footer Section -->
    <section id="footer_section">
        <?php include 'components/footer.php'; ?>
    </section>

</body>
</html>
<script>
  AOS.init();
</script>