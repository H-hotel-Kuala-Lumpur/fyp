<!DOCTYPE html>
<html lang="en">
    <head>
        <title>H-hotel Kuala Lumpur</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Add icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- W3.CSS -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Font-family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Icon CDN -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!-- Social media butto CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Castoro:ital@1&display=swap" rel="stylesheet">
    </head>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }
        /* background */
        header{
            background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url("hotel 5.jpg");
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        /* sign in */
        ul{
            float: right;
            margin-top: 25px;
            margin-right: 25px;
            list-style-type: none;
        }
        /* a best place to stay */
        .head{
            position: absolute;
            top: 40%;
            left: 26%;
            transform: translate(-50%, -50%);
        }
        .head h1{
            color: white;
            font-size: 70px;
            font-family: 'Castoro', serif;
        }
        /* img hotel logo */
        .main img{
            padding-left: 15px;
        }
        .body p{
            font-family: 'Roboto Slab', serif;
            font-size: 25px;
        }
        /* style all the "sign up" input */
        input[name=email-2], input[name=password-2], input[name=name-2], input[name=ip-2]{
            width: 100%;
            padding: 10px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: 2px solid #dadada;
            border-radius: 7px;
            background: #f1f1f1;
            outline: none;
            border: 1px solid #DDDDDD;
        }
        /* when user focus it */
        input[name=email-2]:focus, input[name=password-2]:focus, input[name=name-2]:focus, input[name=ip-2]:focus{
            box-shadow: 0 0 5px rgba(81, 203, 238, 1);
            border: 1px solid rgba(81, 203, 238, 1);
        }
        /* text */
        .body{
            margin-top: 20px;
        }
        .body p{
            color: white;
            line-height: 25px;
            font-size: 20px;
        }
        /* Sign up header text */
        .signup h1{
            font-size: 35px;
        }
        /* background with shadow */
        .register{
            width: 530px;
            height: 690px;
            color: #000;
            position: absolute;
            top: 12%;
            left: 53%;
            padding: 0px 35px; 
			box-sizing: border-box;
			box-shadow: 8px 8px 50px #000;
        }
        .register h1, p, label{
            color: white;
        }
        .register a{
            color: #00BFFF;
        }
        /* screen less 1100px */
        @media screen and (max-width: 1100px){
            .head h1{
                font-size: 30px;
                margin-left: 50%;
                margin-top: -240px;
            }
            .head .fa-bed{
                font-size: 35px;
            }
            .body p{
                font-size: 14px;
                margin-left: 26.5%;
                word-break: break-all;
                white-space: nowrap;
                margin-top: -15px;
            }
        }
        /* screen less 1000px */
        @media screen and (max-width: 1000px){
            .register{
                top: 35%;
                left: 3.5%;
                height: 480px;
                width: 450px;
                padding: 0px 45px;
            }
            .register h1{
                font-size: 20px;
            }
            .register p{
                font-size: 14px;
            }
            .register label{
                font-size: 14px;
            }
            .register hr{
                margin-bottom: 3px;
            }
            .register button{
                margin-bottom: -10px;
                margin-top: -5px;
            }
            /* sign up button */
            .register input[name="sign-up"]{
                margin-bottom: -10px;
                margin-top: -5px;
            }
            .register input{
                padding: 5px;
            }
            .register input[name=email-2], input[name=password-2], input[name=name-2], input[name=ip-2]{
               padding: 3px;
               margin-bottom: 4px;
            }
            .register ::placeholder{
                font-size: 12px;
            }
        }
        /* all the sign up input */
        .register input[name=email-2], input[name=password-2], input[name=name-2], input[name=ip-2]{
            margin-top: -5px;
        }
        /* header text with a bed icon */
        .fa-bed{
            font-size: 70px; 
            margin-left: 15px;
        }
        .down-bar{
            background: #000;
            background: #000;
            color: #f1f1f1; 
            border-top:5px solid #376990;
            padding: 70px 60px 10px 60px;
        }
        .company-info{
            margin-bottom: 20px;
        }
        #top{
            border-top: 1px solid white;
            width: 145px;
        }
        #bottom{
            border-top: 1px solid white;
            width: 145px;
        }
        .text{
            line-height: 30px;
            word-spacing: 3px;
        }
        .hotel-logo2{
            margin-top: -70px;
        }
        .social-media{
            text-align: right;
        }
        .social-media a{
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-decoration: none;
            margin: 5px 2px;
        }
        .social-media a:hover {
            opacity: 0.7;
        }
        h5{
            text-align: center;
            opacity: 0.5;
            padding: 10px 0px;
            bottom: -5px;
        }
        hr{
            border-top: 1px solid white;
        }
        /* style login input */
        input[name=email-1], input[name=password-1] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        /* Set a style for all buttons and sign up button */
        button, input[name="savebtn"]{
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover, input[name="savebtn"]:hover{
            opacity: 0.8;
        }
        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }
        img.avatar {
            border-radius: 50%;
        }
        .container {
            padding: 16px;
        }
        span.psw {
            float: right;
            padding-top: 16px;
        }
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }
        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 50%; /* Could be more or less, depending on screen size */
        }
        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }
        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }
        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)} 
            to {-webkit-transform: scale(1)}
        }
        @keyframes animatezoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
        }
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
        }
    </style>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <body>
        <header>
            <div class="main">
                <img src="hotel logo3.png" width="170px" height="100px">
                <!-- Sign In button -->
                <button id="login" onclick="document.getElementById('id01').style.display='block'" style="width: auto; float: right; margin: 15px 35px 0px 0px;">Login</button>
                <div id="id01" class="modal">
                    <!-- Sign in -->
                  <form class="modal-content animate" action="#" method="POST">
                    <div class="imgcontainer">
                        <!-- X -->
                      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                      <img src="staff logo.png" width="160" height="150" alt="Avatar" class="avatar">
                    </div>
                
                    <div class="container">
                      <label for="email-1" style="color: black; margin-left: 5px; margin-bottom: -20px;"><b>Email</b></label>
                      <input type="email" placeholder="Enter Email" name="email-1" required>
                
                      <label for="psw-1" style="color: black; margin-left: 5px; margin-bottom: -20px;"><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="password-1" id="myInput" required>

                      <input type="checkbox" onclick="myFunction()"> Show Password
                            <script>
                                // show the password
                                function myFunction() {
                                    var x = document.getElementById("myInput");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }
                            </script>
                        <button type="submit" name="loginbtn">Login</button>
                        <label style="color: black;">
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <!-- Cancel Button -->
                    <div class="container" style="background-color:#f1f1f1">
                      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                      <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                  </form>
                </div>

            <!-- text -->
            <div class="head">
                <h1>A Best Place <br> To Stay<i class="fa fa-bed"></i></h1>
                    <div class="body">
                        <p>
                        Nothing makes you feel better than when you get into a hotel bed, <br>and the sheets feel so good. 
                        Why shouldn't you wake up like that every day?</p>
                        <p>
                        Spend money on your mattress and bedding because these things make a <br> difference on your sleep and, 
                        ultimately, your happiness.
                        </p>
                    </div>
            </div>

            <!-- Sign Up -->
            <div class="register">
            <form action="#" id="myForm" method="POST">
                <div class="container">
                    <h1 class="signup" style="margin-bottom: 2px;">Sign Up</h1>
                        <p style="margin-top: 10px;">Please fill in this form to create an account.</p>
                <hr>
              
                <label for="email-2"><b>Email</b></label>
                    <i class="fa fa-envelope icon" style="color: white; font-size:20px;"></i>
                    <input type="email" placeholder="Enter Email" name="email-2" id="email" required>
              
                <label for="psw-2"><b>Password</b></label>
                    <i class="fa fa-key icon" style="color: white; font-size:20px;"></i>
                    <input type="password" placeholder="Enter Password" name="password-2" id="password" required>
              
                <label for="name-2"><b>Name as per ic</b></label>
                    <i class="fa fa-user" style="color:white; font-size:20px;"></i>
                    <input type="text" placeholder="Enter Name" name="name-2" id="ic" required>

                <label for="ip-2"><b>Phone number</b></label>
                    <i class="fa fa-phone" style="color: white; font-size:20px"></i>
                    <input type="tel" placeholder="+60" pattern="[0-9]{3}-[0-9]{7}" name="ip-2" id="phone" required>
                <hr>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                
                <input type="submit" value="Submit" id="submit" name="savebtn">
                </div>
                
                <div id="container signin">
                  <p style="margin-left: 15px;">Already have an account? <a href="#">Sign in</a>.</p>
                </div>
              </form>
              </div>
        </header>

        <div class="down-bar">
            <img src="hotel logo2.jpeg" height="120" width="170" class="hotel-logo2">
          <div>
          <div id="company">
            <hr id="top">
            <h4 class="company-info">Company Info</h4>
            <hr id="bottom">
          </div>
            <p class="text">
              Dreamztech (M) Berhad (1297765-M)
              16, Jalan Suarasa 8/4, Tun Hussein Onn, 43200 Batu 9 Cheras, Selangor, Malaysia<br>
              Phone : +6011-1657 4285<br>
              Email : sales@klwebdesign.my<br>
              Our Branches : Penang / JB / Selangor / Sabah / Sarawak / Ipoh / Melaka
            </p>
            <div class="social-media">
              <a href="#" class="fa fa-facebook"></a>
              <a href="#" class="fa fa-twitter"></a>
              <a href="#" class="fa fa-google"></a>
            </div>
            <hr>
            <h5>Copyright 2020 Dreamztech. All Right Reserved</h5>
          </div>
          </div>
    </body>
</html>

<?php
    include("dataconnection.php");
    
    // check for user sign-up.
	if(isset($_POST["savebtn"]))
	{
		$email2 = $_POST["email-2"];
		$password2 = $_POST["password-2"];
		$name2 = $_POST["name-2"];
		$ip2 = $_POST["ip-2"];

        $query = mysqli_query($connect, "SELECT * FROM signup WHERE Email='$email2'");

        $count = mysqli_num_rows($query);

        if($count != 0){
?>
        <script type="text/javascript">
			alert("<?php echo($email2). " alreday exists, Please try another Email. " ?> ");
        </script>
        <?php
        }
		else{
            mysqli_query($connect, "INSERT INTO signup (Email, Password, Name, Phone_Number) VALUES ('$email2', '$password2', '$name2', '$ip2')");
        ?>
            <script type="text/javascript">
                alert("<?php echo strtoupper($name2). " saved, Please Login. " ?> ");
            </script>
        <?php
        }
}
?>

<?php
    include("dataconnection.php");

    // check for user login.
    if(isset($_POST["loginbtn"]))
    {
        $email1 = $_POST["email-1"];
        $password1 = $_POST["password-1"];

        // get the current time of user login.
        mysqli_query($connect, "INSERT INTO login (email, password, login_time) VALUES ('$email1', '$password1', CURTIME())");
    ?>
        <script type="text/javascript">
            alert("Login Succesful");
        </script>
    <?php
    }
?>
