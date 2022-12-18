<?php
session_start();
if (isset($_SESSION["login"])){
    header("location: index.php");
    exit;
}
require 'connect.php';
if( isset($_POST["Login"])){

    $username = $_POST["Username"];
    $password = $_POST["Password"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE Username = '$username'");
    $result2 = mysqli_query($conn, "SELECT * FROM user WHERE Password = '$password'");

    //cek username dan pw
    if(mysqli_num_rows($result) ===1 ){
        if(mysqli_num_rows($result2) ===1){
            // set session
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }       
    }
    $error = true;
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman create account</title>
        <link rel="stylesheet" href="stylelogin.css">
        <script src="https://kit.fontawesome.com/c6114bcf54.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
          <h1>Login Akun</h1>
          <?php if( isset($error)):?>
                <p>Username atau Password salah</p>
            <?php endif;?>
            <form action="" method="post">
                <div class="Username">
                    <i class="fa-sharp fa-solid fa-user-plus"></i>
                    <label for="Username">Username</label><br>
                    <input type="text" name = "Username" id = "Password"><br>
                </div>
                <div class="Password">
                    <i class="fa-solid fa-lock-open"></i>
                    <label for="Password" >Password</label><br>
                    <input type="Password" name = "Password" id="Password"><br>
                </div>
				<br>
                <button type="Submit" name="Login">Login</button>
                <br>
                <br>
                <button type="submit"><a href="index.php">Kembali</a></button>
            </form>
        </div>     
    </body>
</html>