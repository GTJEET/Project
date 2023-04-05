<?php
    include('login-script.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GammaStore|Sign Up</title>
    <link rel="stylesheet" href="formvalid.css">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="GammaStore title.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <script>
        // Defining a function to display error message
        function printError(elemId, hintMsg) {
            document.getElementById(elemId).innerHTML = hintMsg;
        }

        // Defining a function to validate form 
        function validateForm() {
            // Retrieving the values of form elements 
            var name = document.contactForm.name.value;
            var email = document.contactForm.email.value;
            var pass = document.contactForm.pass.value;
            var repass = document.contactForm.repass.value;
            var mobile = document.contactForm.mobile.value;
                      
            // Defining error variables with a default value
            var nameErr = emailErr = mobileErr = passErr = repassErr = true;


            //Validate password
            if(pass == "")
            {
                printError("passErr", "Enter 8+ character password.");
            }
            else{
                var regex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,15}$/;
                if(regex.test(pass)==false){
                    printError("passErr", "Enter password with 8+ characters, 1 uppercase, 1 lowercase, 1 digit, and 1 special character.");
                }
                else {
                    printError("passErr", "");
                    passErr = false;
                }
            }
            //Validate Confirm Password
            if(repass == "")
            {
                printError("repassErr", "Please Enter Password");
            }
            else if(repass == pass)
            {
                printError("repassErr", "");
                repassErr = false;
            }
            // Validate name
            if(name == "") {
                printError("nameErr", "Please enter your name");
            } else {
                var regex = /^[a-zA-Z\s]+$/;                
                if(regex.test(name) === false) {
                    printError("nameErr", "Please enter a valid name");
                } else {
                    printError("nameErr", "");
                    nameErr = false;
                }
            }
            
            // Validate email address
            if(email == "") {
                printError("emailErr", "Please enter your email address");
            } else {
                // Regular expression for basic email validation
                var regex = /^\S+@\S+\.\S+$/;
                if(regex.test(email) === false) {
                    printError("emailErr", "Please enter a valid email address");
                } else{
                    printError("emailErr", "");
                    emailErr = false;
                }
                
            }
            
            // Validate mobile number
            if(mobile == "") {
                printError("mobileErr", "Please enter your mobile number");
            } else {
                var regex = /[1-9]{9}$/;
                if(regex.test(mobile) === false) {
                    printError("mobileErr", "Please enter a valid 10 digit mobile number");
                } else{
                    printError("mobileErr", "");
                    mobileErr = false;
                }
            }

            if (nameErr || emailErr || mobileErr || passErr || repassErr)
            {
                return false;
            }
            };
    </script>
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
          <div class="logo">
            <h1 class="text-light"><a href="Gamma Store homepage.html"><span>GammaStore</span></a></h1>
          </div>
    
          <nav id="navbar" class="navbar">
    
            <ul>
              <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="#about">About Us</a></li>
              
              <li><a class="nav-link scrollto" href="#portfolio">Browse Items</a></li>
              
              <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Books</a></li>
                  <li class="dropdown"><a href="#"><span>Electronics</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Phones</a></li>
                      <li><a href="#">Computers</a></li>
                      <li><a href="#">Tablets</a></li>
                      <li><a href="#">Accessories</a></li>
                      <li><a href="#">TV and Appliances</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="#"><span>Fashion</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Men's Fashion</a></li>
                      <li><a href="#">Women's Fashion</a></li>
                      <li><a href="#">Kids' Fashion</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Home and Kitchen</a></li>
                  <li><a href="#">Sports Equipments</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
              <li style="padding-left: 30px;"><input type="text" id="search" placeholder="Search" style="border-radius: 25px; padding-left: 10px; height: 20px;border: 2px solid black;"></li>
              <li><a class="getstarted scrollto" href="loginpage.html" target= "_blank">Login</a></li>
              <li><img src="shop icon.png" alt="Cart" style="padding-left: 20px;"></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
      </header><!-- End Header -->
    
        <p style="color:red"><?php if(!empty($msg)){echo $msg; }?></p>
        <form name="contactForm" onsubmit ="return validateForm()" method="post" action="" style="width: 23%;">
            
            <h3>Sign Up</h3>
            <div class="row">
                <label>Full Name</label>
                <input type="text" name="full_name" placeholder="Full Name" required>
                <div class="error" id="nameErr"></div>
                
            </div>
            <div class="row">
                <label>Email Address</label>
                <input type="text" name="email" placeholder="Email" required>
                <div class="error" id="emailErr"></div>
            </div>
            <div class="row">
                <label>Mobile Number</label>
                <input type="text" name="pno" maxlength="10" placeholder="Mobile Number" required>
                <div class="error" id="mobileErr"></div>
            </div>
            <div class="row">
                <label>Password</label>
                <input type="password" id = "pass" name="pass" placeholder="Password" required>
                <div class="error" id="passErr"></div>
            </div>
            <div class="row">
                <label>Confirm Password</label>
                <input type="password" id = "repass" placeholder="Password">
                <div class="error" id="repassErr"></div>
            </div>
            <div class="row">
                <button type="submit" name="create" style="background-color: #ec733b; box-shadow: none; padding:5px; color:white"> Sign Up </button>
            </div>
            <div>
                <p>Are you already a member? <a href="loginpage.html"><u>Login</u></a></p>
            </div>
        </form>
    </body>
</html>