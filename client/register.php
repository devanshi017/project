<?php
    session_start();
    include("database.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
       
        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "INSERT INTO user (firstname, lastname, username, email, password, confirmpassword) VALUES ('$firstname', '$lastname', '$username','$email','$password','$confirmpassword')";
            $result=  mysqli_query($conn, $query);
            if (mysqli_num_rows($result)===1){
                $row = mysqli_fetch_assoc($result);
    
                if ($row['email'] === $email && $row['password'] === $password){
                    header ("Location: login.php?error=database exist already");
                }
              }

                if ($password !== $confirmpassword){
                echo "<script type='text/javascript'> alert('Password does not match')</script>";
              } 
              
    
            
           else{
            if ($conn->query($query) === TRUE) {
                header("Location: login.php");
            } else {
                header("Location:register.php?error=connection error");
            }
        }
        }
            // echo "<script type='text/javascript'> alert('Sucessfully Register')</script>";
    
        else
        {
            echo "<script type ='text/javascript> alert('please enter valid information')</script>";
        }
    }
    
?>
<html>
<head>
    <title> Register </title>
    <link rel="stylesheet" href="login.css">
</head>
    <body>
    <div class="box">
        <div class="inner">
            <div class="image">
                <img src="image/p5.jpg" alt="image">
            </div>
            <form action="register.php" method="POST">
                <h3>Register</h3>

                <div class="form-group">
                    <input type="text" placeholder="First Name" class="form-control" name="firstname">
                    <input type="text" placeholder="Last Name" class="form-control" name="lastname">
                </div>

                <div class="form-wrapper">
                <input type="text" placeholder="Username" class="form-control" name="username">
                </div>

                <div class="form-wrapper">
                <input type="text" placeholder="Email Address" class="form-control" name="email">
                </div>

                <div class="form-wrapper" name="gender">
                    <select name="" id="" class="form-control">
                        <option value="" disabled selected>Gender</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                        <option value="other">other</option>
                    </select>
                </div>

                <div class="form-wrapper">
                <input type="password" placeholder="Password" class="form-control" name="password">
                </div>

                <div class="form-wrapper">
                <input type="password" placeholder="Confirm Password" class="form-control" name="confirmpassword">
                </div>

                <button type="submit"  name="submit" class="button">register</button>
            </form>
        </div>
    </div>
</body>
</html>
