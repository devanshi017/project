<?php
    session_start();
// diya chu me
    include("database.php");

    if($_SERVER['REQUEST_METHOD'] =="POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "select * from user where email = '$email' limit 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0);
                {
                    $user_data = mysqli_fetch_assoc($result);
                    if($user_data['password'] == $password)
                    {
                        header("location: index.php");
                        die;
                    }
                }

            }
            echo "<script type='text/javascript'> alert('wrong username or password')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
    }
}
?>

<html>
<head>
    <title> login </title>
    <link rel="stylesheet" href="login.css">
</head>
    <body>
    <div class="box">
        <div class="inner">
            <div class="image">
                <img src="image/p5.jpg" alt="image">
            </div>
            <form action="login.php" method="POST">
                <h3>Login</h3>

                <div class="form-wrapper">
                <input type="text" placeholder="email" class="form-control" name="email">
                </div>

                <div class="form-wrapper">
                <input type="password" placeholder="Password" class="form-control" name="password">
                </div>

                <button type="submit"  name="submit" class="button">login</button>
            </form>
        </div>
    </div>
</body>
</html>