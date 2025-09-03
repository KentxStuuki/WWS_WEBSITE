<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <style>
  @media (min-width: 768px) {
    .section-paragraph {
      margin-left: 110px;
    }
  }
</style>
</head>
<body class="bg-light">


  <section class="text-center text-white d-flex flex-column justify-content-center align-items-center" 
           style="background: url('../main/signup_section/signup_background.jpg') center/cover no-repeat; min-height: 20vh;">
    <h1 class="fw-bold display-4">Sign Up</h1>
  </section>


<section class="my-4">
  <div class="container">
    <form class="row align-items-center g-4">
      <div class="col-12 col-md-6 text-center text-md-start">
        <h5 class="mb-0 section-paragraph">
          Sign Up to Receive Rewarding Deals for Any of Our Services
        </h5>
      </div>

    
      <div class="col-12 col-md-6">
        <div class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Type here..." aria-label="Search"
          style="border:3px solid #077FFF;">
          <button class="btn btn-primary w-25" type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>
</section>
 


<div class="text-center" style="margin-bottom: -39px;">
  <h3 class="fw-bold bg-white text-primary rounded-pill px-3 px-md-4 py-2 py-md-3 d-inline-block"
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
      <span id="phone-number">1-800-533-0538</span>
      <button class="btn btn-sm btn-link text-dark ms-2 p-0" 
              onclick="copyPhone()" style="line-height: 1;">
        <img src="../main/signup_section/copyicon.png" alt="Copy Icon" style="width:20px; height:20px;">
      </button>
      <small id="copy-msg" class="text-success ms-2 d-none">Copied!</small>
    </span>  
    for immediate assistance.
  </p>
</section>




<section class="py-5" 
  style="background: url('../main/signup_section/signup_background2.jpg') center/cover no-repeat;">
  
  <div class="container h-100">
    <div class="row g-4 h-100 align-items-center">
      
      <!-- Left: Form -->
      <div class="col-md-6 d-flex flex-column justify-content-center" style="border-right:3px solid #077FFF; padding-right:2rem;">
<div class="d-flex justify-content-center">
  <div class="d-flex align-items-center position-relative">

    <!-- Step 1 -->
    <div class="position-relative d-flex justify-content-center align-items-center" style="width:60px; height:60px;">
      <!-- Outer blue circle -->
      <div class="rounded-circle bg-primary w-100 h-100"></div>
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





        <form style="margin-top:1rem;">
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
        <h2 class="text-primary fw-bold mb-3">We value and respect <br>
         your privacy</h2>
        <p class="fs-4">
          Rest assured that the information we receive <br>will only be used by us and for its intended<br> purpose 
          which is to make helping you <br>convenient and a more efficient process.
        </p>
      </div>

    </div>
  </div>
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





