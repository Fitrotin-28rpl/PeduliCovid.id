<!DOCTYPE html>
<html>
 <head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
     <div id="card"> 
        <div class="container">
            <div class="img">
                <img src="img/medical.svg">
            </div>
            <div class="login-content">
            <form action="logen.php" method="post" class="form">
                    <img src="img/avatar.svg">
                    <h2 class="title">Login</h2>
                    <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input id="user-username" type="text" name="username" required class="input"/>
                    </div>
                    </div>
                    <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input id="user-password" type="password" name="password" required class="input"/>
                    </div>
                    </div>
                    <a href="registrasi.php">Don't have an account?</a>
                    <input type="submit" class="btn" value="Login">
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>