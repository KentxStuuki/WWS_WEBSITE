<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css And Scass Connection -->
    <link rel="stylesheet" href="../../public/main/style/main.css">
    <link rel="stylesheet" href="../../public/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../public/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <!-- Java Script Connection -->
    <script src="../../public/main/scripts/bootstrap.bundle.min.js"></script> 
    <script src="../../public/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../../public/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../main/scripts/data.js"></script>
    <title>WWS</title>
    
</head>
<body>
    <!-- Navbar Section -->
    <?php include 'components/navbar.php'?>

    <!-- Introduction Section -->
    <section id="intro_section" class="overflow-hidden">
        <?php include 'components/intro.php'?>
    </section>

    <div class="sep-line"></div>

    <!-- About us Section -->
    <section id="about_section" >
        <?php include 'components/about.php'?>
    </section>


    <?php include 'contactus.php'; ?>
    <?php include 'footer.php'; ?>
</body>
</html>