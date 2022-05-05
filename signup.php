<?php include 'includes/header.php';?>

<div class= "container">
    <div id = "landing_logo_header">
        <img src="includes/resources/img/clarEX.png" alt="logo.png" id= "company_logo">
    </div>
    <form class="sign_in_form" method="post" action=" <?php echo $_SERVER['PHP_SELF']?>">
        <div class = "sign_elements">
            <div id = sign_header>Sign up to get started</div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="login_email">
            <label for="username">Username:</label>
            <input type="text" name="username" id="login_email">
            <label for="register_password">Password:</label>
            <input type="password" name="register_password" id="login_password">
            <label for="reister_con_password">Confirm Password:</label>
            <input type="password" name="register_con_password" id="login_password">
            <input type="button" value="register" id = "btn_login">
            <div id = "already_have">
                <a href="signin.php">Already have an account?</a>   
            </div>
        </div> 
       

    </form>
</div>


<?php include 'includes/footer.php';?>