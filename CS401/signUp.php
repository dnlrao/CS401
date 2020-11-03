<?php
session_start();
$_SESSION['loginErr'] = array();

if(count($_COOKIE)>1){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/signUp.css">
    <link rel="icon" sizes="57x57" href="Images/logo.png" />
</head>

<body>

    
    <form action="signup_Handler.php" method="POST" name=myform>

        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="email"><b>Email</b></label><br>
            <?php
                
                if (count($_SESSION['signupErr'])>0){
                    $temp = $_SESSION['credentials'][0];
                    echo "<input type='text' placeholder='Enter Email' name='email' value='{$temp}' required><br><br>";
                }
                else {
                    echo "<input type='text' placeholder='Enter Email' name='email' value='' required><br><br>";;
                }

                ?>
            

            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="psw" required><br><br>

            <label for="psw-repeat"><b>Repeat Password</b></label><br>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <p>Already have an account? <a href="login.php">Login</a></p>

            <div class="clearfix">
                <input type="submit">
            </div>
        </div>

            <div class="message">
                <?php
                    if(count($_SESSION["signupErr"])>0) {
                        foreach ($_SESSION["signupErr"] as $errors) {
                            echo "<div class='errorMessage'><h2>{$errors}</h2></div>";
                        }
                    }
                    elseif(count($_SESSION["signupErr"])==0){
                        echo "<div id='signUpText'><h1>Our mission</h1>
                            <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, inventore. Earum molestiae explicabo laborum aliquid assumenda autem ducimus placeat reiciendis fugiat exercitationem, laboriosam eveniet, odit voluptate velit nemo aut porro tempora repellat id voluptas perspiciatis. Accusantium voluptas, blanditiis fugiat expedita distinctio mollitia rem, esse, officiis aut tempora aspernatur corrupti eos!
                            </p>
                        </div>";
                    }
                ?>

            </div>
    </form>

</body>

</html>



