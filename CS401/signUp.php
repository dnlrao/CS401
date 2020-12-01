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
    <link rel="stylesheet" href="CSS/passValidator.css">
    <link rel="icon" sizes="57x57" href="Images/logo.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="JS/passValidator.js"></script>
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
                    echo "<input id = 'email' type='text' placeholder='Enter Email' name='email' value='{$temp}' required><br><br>";
                    echo "
                    <div id='pswd_info3'>
                    <h4>Email requirement not met:</h4>
                    <ul>
                        <li class='invalid'><strong>Invalid Email Address</strong></li>
                    </ul>
                </div>";
                }
                else {
                    echo "<input id = 'email' type='text' placeholder='Enter Email' name='email' value='' required><br><br>";
                    echo "<div id='pswd_info3'>
                    <h4>Email requirement not met:</h4>
                    <ul>
                        <li class='invalid'><strong>Invalid Email Address</strong></li>
                    </ul>
                </div>"; 
                }

                ?>


            <label for="psw"><b>Password</b></label><br>
            <input id="psw" type="password" placeholder="Enter Password" name="psw" required><br><br>

            <div id="pswd_info">
                <h4>Password must meet the following requirements:</h4>
                <ul>
                    <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                    <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                    <li id="number" class="invalid">At least <strong>one number</strong></li>
                    <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                </ul>
            </div>

            <label for="psw-repeat"><b>Repeat Password</b></label><br>
            <input id="psw-repeat" type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
            <br>

            <div id="pswd_info2">
                <h4>Password requirement not met:</h4>
                <ul>
                    <li id="letter" class="invalid"><strong>Password does not match</strong></li>
                </ul>
            </div>


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
