<?php
session_start();
if (isset($_SESSION["login"])){
    header("location: index.php");
    exit   ;
}
require 'connect.php';
if( isset($_POST["Create"])){
    if( signup($_POST)>0){
        echo "<script>
                alert('user baru berhasil ditambahkan');
            </script>";
            header("Location: login.php");
    }
    else{
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman create account</title>
        <link rel="stylesheet" href="stylesign.css">
        <script src="https://kit.fontawesome.com/c6114bcf54.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
          <h1>Sign Up Akun</h1>
            <form action="" method="post">
                <div class="Background-Name">  
                        <i class="fa-sharp fa-solid fa-user"></i>
                        <label for="Name">Name</label><br>
                        <input type="text" name="Name" id="Name"><br>
                    </i>
                </div>
                <div class="Background-Username">
                    <i class="fa-sharp fa-solid fa-user-plus"></i>
                    <label for="Username">Username</label><br>
                    <input type="text" name="Username" id="Username"><br>
                </div>
                <div class="Background-Email">
                    <i class="fa-sharp fa-solid fa-envelope"></i>
                    <label for="Email">Email</label><br>
                    <input type="text" name="Email" id="Email"><br>
                </div>
                <div class="Background-Password">
                    <i class="fa-sharp fa-solid fa-lock-open"></i>
                    <label for="Password">Password</label><br>
                    <input type="Password" name="Password" id="Password"><br>
                </div>
				<br>
                <button type="submit" name="Create">Create</button>
                <br>
                <br>
                <button type="submit"><a href="index.php">Kembali</a></button>
            </form>
        </div>     
    </body>
</html>