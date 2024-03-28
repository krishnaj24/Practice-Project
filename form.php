s<!DOCTYPE html>
<html>
<head>

  <title>Radiant Beauty</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
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
        <li><a href="#">PRODUCTS</a></li>
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
    
      <div class="container-fluid" style="font-size:20px;">
        <center><h1 style="color:black">Login</h1></center><br>
        <form action="#"style="color:black" method="POST">
                  <div class="data">

                    <label>Email</label><br>
                    <input class="emal" type="email" required placeholder="Email" id="userInput" name="email" style="font-size:15px">
                    <p id="validationMessage"></p>
                  </div>
        <div class="data">
                    <label>Password</label>
                    <input type="password" required placeholder="Password" id="p" style="font-size:15px" name="pass">
                  </div>
                
                  <div id="pass_div"></div>
       <br>
          <div class="remember_box">
            
             <a href="#" onclick="message()"><u style="color: black;">Forgot Password?</u></a>
          </div>
        <div class="btn">
                    <div class="inner">
        </div>
        <button type="submit" name="login" onclick="validate()" >Login</button>
                  </div>
        <div class="signup-link">
        Not a member? <a href="index.php" style="color: black;"><u>Signup now</u></a></div>
        

        </form>
    
  </div>
  </div>
  <style>
  body{
    background-image: url(back1.jpg) ;
    background-size: 400px;
  }
    .container-fluid{
      margin-top:none;
      background-color: white;
      backdrop-filter: blur(30px);
      border:2px solid black;
      height:600px;
      width:500px;
      align-items: center;
      justify-content: center;
      border-radius:10px;
    
    
    }
  </style>
  <script>
    function message(){
      alert("Please enter your email address or username to reset your password.");
    }
    function validate() {
      var password = document.getElementById("p").value;

      // Check for minimum length, at least one uppercase, one lowercase, one digit, and one special character
      var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

      if (!passwordRegex.test(password)) {
        document.getElementById("pass_div").innerHTML = "**Password must be at least 8 characters long and include at least one uppercase letter, one lowercase letter, one digit, and one special character.**";
        document.getElementById("pass_div").style.color = "red";
        document.getElementById("pass_div").style.fontSize = "12px";
        return false;
      }
      document.getElementById("pass_div").innerHTML = "";

      var userInput = document.getElementById('userInput').value;
      var isValidEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(userInput);
      var isValidPhone = /^\d{10}$/.test(userInput);
      var validationMessage = document.getElementById('validationMessage');

      if (isValidEmail || isValidPhone) {
        validationMessage.textContent = '';
      } else {
        validationMessage.textContent = 'Invalid input. Please enter a valid email address or a 10-digit phone number.';
        return false;
      }

      return true; // If everything is valid, allow form submission
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
          <li><a href="">Reviews</a></li>
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
</body>
</html>
<?php
  include("connection.php");
  if(isset($_POST['login']))
  {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $query="SELECT * FROM form WHERE email='$email' && pass ='$pass'";
    $data =mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    //echo $total;
    if($total==1)
    {
       //header('location:homepage.html');
     ?>

       <meta http-equiv = 'refresh' content = '0; url = /foeweb/homepage.html'/>
       <?php
    }
    else{
      $login_failed = true;
    }

// JavaScript to display login failed message
if(isset($login_failed) && $login_failed === true) {
    echo "<script>alert('Login failed. Please check your credentials.');</script>";
}

  }
?>
