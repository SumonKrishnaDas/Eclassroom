<?php 
require 'config/config.php';

require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EC</title>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    

    <link rel="shortcut icon" type="image/png" href="assets/images/background/graduation.png">

   <!-- Bootstrap 5 CDN-Import: -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Light-Theming: -->
    <link id="mainStyle" rel="stylesheet" href="asset/css/style.css">

    <!-- Dark-Theming: -->
    <!-- Uncomment the line below to use dark theming. Don't forget to comment the line above.-->
    <!-- <link rel="stylesheet" href="assets/css/style_dark.css"> -->
    <!-- this also works automatically by clicking the theme_button. -->



    
</head>

<body>



<form action="register.php" method="POST"  >



<input type="text" name="reg_fname" placeholder="First name" value="<?php 
                                                                        if (isset($_SESSION['reg_fname'])) {
                                                                            echo $_SESSION['reg_fname'];
                                                                        } ?>" required>

  
  

<?php if (in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; ?>



<input type="text" name="reg_lname" placeholder="Last name" value="<?php 
                                                                        if (isset($_SESSION['reg_lname'])) {
                                                                            echo $_SESSION['reg_lname'];
                                                                        } ?>" required>





<input type="email" name="reg_email" placeholder="Email" value="<?php 
                                                                    if (isset($_SESSION['reg_email'])) {
                                                                        echo $_SESSION['reg_email'];
                                                                    } ?>" required>
    
</div>


    


<input type="email" name="reg_email2" placeholder="Confirm email" value="<?php 
                                                                                if (isset($_SESSION['reg_email2'])) {
                                                                                    echo $_SESSION['reg_email2'];
                                                                                } ?>" required>
    

    

    <?php if (in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>";
    else if (in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
    else if (in_array("Email do not match<br>", $error_array)) echo "Email do not match<br>"; ?>




<input type="password" name="reg_password" placeholder="Password" required>
    

    





<input type="password" name="reg_password2" placeholder="Confirm password" required>  </div>

    
    <?php if (in_array("Your password do not match<br>", $error_array)) echo "Your password do not match<br>"; ?>

<input type="submit" name="register_button" id="button" value="Register">
   
    <?php if (in_array("<span style = 'color: #14C800;'> You're all set! Go ahead and login! </span> <br>", $error_array)) echo "<span style = 'color: #14C800;'> You're all set! Go ahead and login! </span> <br>"; ?>



    
    
    
    
    
    
    <button id="theme_button" class="btn btn-theme" onclick="onThemeChange()">
        <i id="theme_icon" class="fas fa-moon"></i>
    </button>

    <script type="text/javascript">
        function onThemeChange() {
            let cssStyleSheet = document.getElementById("mainStyle");
            let path = (cssStyleSheet.href).substring((cssStyleSheet.href).length-9, (cssStyleSheet.href).length);
            if(path === "style.css") {
                cssStyleSheet.href = "assets/css/style_dark.css";
                document.getElementById("header_logo").src = "assets/img/logo_dark.png";
                document.getElementById("theme_icon").className = "fas fa-sun";
            } else {
                cssStyleSheet.href = "assets/css/style.css";
                document.getElementById("header_logo").src = "assets/img/logo.png";
                document.getElementById("theme_icon").className = "fas fa-moon";
            }
        }
    </script>


    <!-- Bootstrap 5 JS-Bundle CDN import: -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html> 