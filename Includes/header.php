<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS_Files/header.css">
    <script src="../JS_Files/header.js" defer></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,500&family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,800;1,100;1,200;1,400;1,600;1,800&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Fonts Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Navbar Goes Here -->
    <nav class="navbar">
        <div class="topbar">
            <div class="container top-con">
             <div class="left-side-content">
             <i class="fas fa-headphones-alt"></i>
             <span>Have a Question?</span>
             <a href="tel:+923164889003">+923164889003</a>
             </div>
             <div class="right-side-content">
                <div class="track-order ">
                <a href="#"><i class="fas fa-user"></i> <span id="track">Track My Order</span></a>
                <div class="order-modal">
                <i class="fas fa-times" id="close"></i>
                    <h3 class="title">Track My Order</h3>
                    <form action="">
                        <div class="input">
                            <input type="email" name="" id="email" placeholder="Email">
                        </div>
                        <div class="input">
                            <input type="text" name="" id="order_no" placeholder="Order No">
                        </div>
                        <div class="input">
                           <input type="submit" value="Track My Order" class="btn">
                        </div>
                    </form>
                </div>
                </div>
                <div class="signin">
                <a href="#" id="login-form"><i class="fas fa-user" id="signin"></i> Signin</a>
                  <div class="form-modal">
                  <i class="fas fa-times" id="form-close"></i>
                  <div class="form1">
                  <form action="">
                    <h4>Login</h4>
                    <div class="input-feild">
                        <input type="email" name="" id="email" placeholder="Email" required>
                    </div>
                    <div class="input-feild">
                        <input type="Password" name="" id="password" placeholder="Password" required>
                    </div>
                    <div class="remember-feild">
                       <!-- <input type="checkbox" name="" id="">Remember Me -->
                       <a href="#">Forgot Password</a>
                    </div>
                    <div class="submit-btn">
                      <input type="submit" value="Login">
                    </div>
                  </form>
                  <hr>
                  <footer>
                    <span>Don't have an account?</span>
                    <a href="#" id="signup">SignUp</a>
                  </footer>
                  </div>
                  <div class="form2" style="display:none;">
                  <form action="">
                    <h4>SignUp</h4>
                    <div class="input-feild">
                        <input type="text" name="" id="fname" placeholder="First Name" required>
                    </div>
                    <div class="input-feild">
                        <input type="text" name="" id="lname" placeholder="Last Name" required>
                    </div>
                    <div class="input-feild">
                        <input type="email" name="" id="Email" placeholder="Email" required>
                    </div>
                    <div class="input-feild">
                        <input type="date" name="" id="date">
                    </div>
                    <div class="input-feild">
                        <input type="number" name="" id="pno" placeholder="Phone Number">
                    </div>
                    <div class="input-feild">
                        <input type="password" name="" id="password" placeholder="Password">
                    </div>
                    <div class="submit-btn" style="margin-bottom:0;">
                      <input type="submit" value="SignUp">
                    </div>
                  </form>
                  </div>
                  </div>
                </div>
                <div class="lang-curr">
                <a href="#">English/USD <i class="fas fa-caret-down"></i></a>
                </div>
             </div>
            </div>
        </div>
        <div class="navbar-sticky">navbar</div>
        <div class="navbars">list</div>
    </nav>
    <!-- Navbar Ends -->
</body>
</html>