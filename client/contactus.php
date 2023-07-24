<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Document</title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>
<header>

    
<a href="#" class="logo">logo<span>.</span></a>

<nav class="navbar">
<a href="#">Home</a>
    <a href="#">Services</a>
    <a href="#">About us</a>
    <a href="#">Contact us</a>
</nav>
<div class="main">
    <a href="#" class="user"><i class="ri-user-fill"></i>Sign In</a>
    <a href="#">Register</a>
    <div class="bx bx-menu" id="menu-icon"></div>
   </div>




</header>
    <div class="contact-form">
        <h1>ContactUs Form</Form></h1>
    </div>
    <div class="contact-us">
       <form action="save.php" method="post">
           <input type="text" name="fname"   class="form-control" placeholder="Enter First Name"> <br>
           <input type="text" name="lname"  class="form-control" placeholder="Enter last Name"> <br>
           <input type="email" name="email"  class="form-control" placeholder="Enter Email"> <br>
           <input type="text" name="mobile"  class="form-control" placeholder="Enter Mobile Number"> <br>
           <input type="submit" class="form-control submit" value="submit" >
       </form>
    </div>
</body>
</html>