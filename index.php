<!DOCTYPE html>
<html>
<head>
	<title>Form by radiant beauty</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" >
  <script src="homepage.js" ></script>
 <div class= "container fixed-top" id="bye" ></div>
<nav class="navbar navbar-default navbar-fixed-top sticky-top" style="margin-bottom: 70px;" >
  <div class="promo-container sticky-top" style="background-color: rgb(209, 230, 237); padding: 8px;text-align: center;width:100%;color:black; font-family: Montserrat, sans-serif;">
    <p><b>Avail 30% off on our skincare essentials</b></p>
</div>
  <div class="container">
    <div class="navbar-header">
      <img src="logo-removebg-preview2.png" style="width: 200px; height: 84; margin: 10px;">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="homepage.html">HOME</a></li>
        <li><a href="products.html">PRODUCTS</a></li>
        <li><a href="offer.html">OFFER</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="#contact">CONTACT</a></li>
       
        <li><a href="#"><span class="glyphicon glyphicon-search" style="color: black;height:10px;width:10px; margin-left: 210px;" id="sicon"onclick="showSearchPopup()"></span></a></li>
          <!-- Search Popup container -->
    <div id="overlay"></div>
    <div id="popup">
      <div id="closeIcon" onclick="hideSearchPopup()"><span class="glyphicon glyphicon-remove"></span></div>
      <hr>
        <label for="searchInput">Search:</label>
        <input type="text" id="searchInput" placeholder="search" style="width:300px;border:none;border-radius:0%;height:25px;">
        
    </div>
    <script>
      // Function to show the search popup
      function showSearchPopup() {
          document.getElementById('popup').style.display = 'block';
          document.getElementById('overlay').style.display = 'block';
      }

      // Function to hide the search popup
      function hideSearchPopup() {
          document.getElementById('popup').style.display = 'none';
          document.getElementById('overlay').style.display = 'none';
      }
  </script>
        
        
        <li><a href="form.php"><span class="glyphicon glyphicon-user" style="color: black;height:20px;width:20px;" ></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart" style="color: black;height:20px;width:20px;"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
<br><br>


<div class="container-fluid">
<h1>Sign Up Now</h1>
<form action="index.php" method="POST">
  <div class="form">

    <input type="text" class="input-box" placeholder="Firstname" id="fname" name="fname" style="width: 550px; height: 40px;" required><br>
    <span id="validationMessage"></span>
    <input type="text" class="input-box" placeholder="Lastname" id="lname" name="lname" style="width: 550px; height: 40px;" required><br>
    <span id="valid"></span>
    
    <input type="email" class="input-box" placeholder="Enter Email" name="email" style="width: 550px;height: 40px; "id= "email" required><br>
    <span id="validationMessage2"></span>

    <input type="password" class="input-box" placeholder="Enter Password" id="pass" name="pass" style="width: 550px; height: 40px;"required><br>
    <span id="validationMessage3"></span>
    <div id="passd"></div>

    <input type="password" class="Confirm_Password" placeholder="Confirm Password"name="cpass" id="cpass" style="width: 550px; height: 40px;" required><span id="validationMessage"></span>
	<center><input type="checkbox" class="Input_term"  id="termsc" name="terms" required>  I agree to the <a id="pop" onclick="showpop()">Terms and Conditions</a>
	  
	<center><button name="submit" id="submit" type="submit" onclick="validate()" style="background-color:black;color:white;width:200px;text-align:centerx; margin-top: 30px;">Register</button></center>
 
</div>
</form>
</div>


<script>
  function validate() {
    // FIRSTNAME VALIDATION
    var validationMessage = document.getElementById('validationMessage');
    var fname = document.getElementById("fname").value;
    var fnameRegex = /^[A-Za-z]+$/;

    if (fname.match(fnameRegex)) {
      validationMessage.textContent = '';
    } else {
      validationMessage.innerHTML = "**Alphabets only**";
      validationMessage.style.color = "red";
      validationMessage.style.fontSize = "13px";
      return false;
    }

    // LASTNAME VALIDATION
    var valid = document.getElementById('valid');
    var lname = document.getElementById("lname").value;

    if (lname.match(fnameRegex)) {
      valid.textContent = '';
    } else {
      valid.innerHTML = "**Alphabets only**";
      valid.style.color = "red";
      valid.style.fontSize = "13px";
      return false;
    }

    // PASSWORD VALIDATION
    var password = document.getElementById("pass").value;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/;

    if (!passwordRegex.test(password)) {
      document.getElementById("passd").innerHTML = "*Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one digit, and one special character.*";
      document.getElementById("passd").style.color = "red";
      document.getElementById("passd").style.fontSize = "13px";
      return false;
    } else {
      document.getElementById("passd").innerHTML = '';
    }

    // CONFIRM PASSWORD VALIDATION
    var confirmPassword = document.getElementById("cpass").value;

    if (password !== confirmPassword) {
      document.getElementById("passd").innerHTML = "*Passwords do not match.*";
      document.getElementById("passd").style.color = "red";
      document.getElementById("passd").style.fontSize = "13px";
      return false;
    }

    // EMAIL VALIDATION
    var email = document.getElementById('email').value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!email.match(emailRegex)) {
      document.getElementById('validationMessage2').innerHTML = "**Please enter a valid email address**";
      document.getElementById('validationMessage2').style.color = 'red';
      document.getElementById('validationMessage2').style.fontSize = "13px";
      return false;
    } else {
      document.getElementById('validationMessage2').textContent = '';
    }

    // TERMS CHECKBOX VALIDATION
    var checkbox = document.getElementById('termsc');

    if (!checkbox.checked) {
      alert("Please agree to the Terms and Conditions.");
      return false;
    }

    return true;
  }
</script>
<div id="overlay1"></div>
<div id="popup1">
  <div id="closeIcon1" onclick="hidepop()">
  <span class="glyphicon glyphicon-remove"></span>
</div>
<div class="scrollable-content">
<p><B>Terms and Conditions of Radiant Beauty </B><BR>

  1. Acceptance of Terms: <BR>
  
  By accessing or using the Radiant Beauty website ("the Site"), you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, please do not use the Site.<BR>
  
  2. Use of the Site: <BR>
  
  You agree to use the Site for lawful purposes only and in a manner consistent with all applicable laws and regulations. You must not use the Site in any way that may cause damage to the website or impair its availability.<BR>
  
  3. Product Information: <BR>
  
  Radiant Beauty strives to provide accurate and up-to-date information about its skincare products. However, we do not warrant the accuracy, completeness, or reliability of any product information on the Site.<BR>
  
  4. Intellectual Property: <BR>
  
  All content on the Radiant Beauty website, including but not limited to text, graphics, logos, images, audio clips, digital downloads, and data compilations, is the property of Radiant Beauty and is protected by international copyright laws.
  <BR>
  5. User Accounts: <BR>
  
  If you create an account on the Site, you are responsible for maintaining the confidentiality of your account and password. You agree to accept responsibility for all activities that occur under your account.
  <BR>
  6. Privacy Policy: <BR>
  
  Your use of the Site is also governed by our Privacy Policy, which can be found here.
  <BR>
  7. Order Acceptance and Pricing: <BR>
  
  While we strive to provide accurate product and pricing information, errors may occur. Radiant Beauty reserves the right to refuse or cancel any order containing incorrect information, including pricing.
  <BR>
  8. Limitation of Liability: <BR>
  
  In no event shall Radiant Beauty, its directors, officers, employees, or affiliates be liable for any indirect, incidental, special, or consequential damages arising out of or in any way connected with the use of the Site or the purchase of products.
  <BR>
  9. Governing Law: <BR>
  
  These Terms and Conditions are governed by and construed in accordance with the laws of [Your Jurisdiction], without regard to its conflict of law principles.
  <BR>
  10. Changes to Terms and Conditions: <BR>
  
  Radiant Beauty reserves the right to modify these Terms and Conditions at any time without prior notice. Please review these terms periodically for any updates.</p>
</div>
</div>
<script>
  function showpop(){
    document.getElementById("popup1").style.display = 'block';
    document.getElementById("overlay1").style.display = 'block';
  }

  function hidepop(){
    document.getElementById("popup1").style.display = 'none';
    document.getElementById("overlay1").style.display = 'none';
  }
</script>
<br><br>
<!-- Container (Contact Section) -->
<div class="footer" id="contact">
  <h2 class="text-center">CONTACT</h2>
  <p style="color:black;font-size: large;text-align: center;">Contact us and we'll get back to you within 24 hours.</p>
  <p style="color:black;font-size:large;text-align: center;"><span class="glyphicon glyphicon-envelope" style="color:black;font-weight: 200;"></span> myemail@something.com</p>
  <br>
  <div class="container row">
    <div class="footer-col">
      <h4>Need Help?</h4>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Shipping</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">Order status</a></li>
        <li><a href="#">Payment options</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Quick Links</h4>
        <ul>
          <li><a href="#">Reviews</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Visit Website</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Our Services</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Office Location</h4>
        <ul>
          <li><a href="#">Office 321, Glass Tower, Churchgate, Mumbai</a></li> 
        </ul>
      </div>
      <div class="footer-col">
        <h4>follow us</h4>
        <div class="social-links">
          <a href="#"><i class="fa-brands fa-facebook"><img src="fb-removebg-preview.png" style="height: 25px;"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"><img src="in-removebg-preview.png" style="height: 25px;"></i></a>
        </div>
      </div>
    </div>
    <div id="horizontal-line"></div>
    <div id="copyright">
      
        &copy; All Rights Reserved 2023-2024
    <br><br>
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
    </div>
  </div>


<style>
	body{
    background-image: url(back1.jpg) ;
    background-size: 400px;
  }
.Confirm_Password{
  margin-bottom: 30px;
}

.container-fluid
{
  
  margin-top: none;	
  color:black;
  background-color: white;
  backdrop-filter: blur(30px);
  border:2px solid black;
  height:600px;
  width:600px;
  border-radius:10px;
}

input{
  margin: 1px;
}


    h1{
      text-align: center;
      margin-top: 3px;
      margin-bottom: 30px;
    }

  .form{
    margin-left: 14px;
  }

#popup1 {
    display: none;
    position: fixed;
    margin-top: 50px;
    top: 50%;
    left: 50%;
    color: black;
    transform: translate(-50%, -50%);
    background-color: #fff;
    border: 1px solid BLACK;
    padding: 20px;
    z-index: 1000;
    max-width: 600px;
    max-height: 80vh; 
    overflow-y: auto;
}

.popup-content {
    text-align: left;
}

#closeIcon1 {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
}

.scrollable-content {
    max-height: 100%;
    overflow-y: auto;
  }

#overlay1 {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 999;
}


</style>
</body>
</html>
<?php include("connection.php");?>
<?php
  if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

   $query="INSERT INTO FORM values('$fname','$lname','$email','$pass','$cpass');";
   $data=mysqli_query($conn,$query);

   if($data){
    ?>

       <meta http-equiv = 'refresh' content = '0; url = /foeweb/homepage.html'/>
       <?php
   }
   else{
    echo "failed" . mysqli_error($conn);
   }
  }
?>
