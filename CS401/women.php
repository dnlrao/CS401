<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danny Apparels</title>
    <link rel="stylesheet" href="CSS/men.css">
    <link rel="icon" sizes="57x57" href="Images/logo.png" />
</head>

<body>

    <header>
        <a href="index.php"><img src="Images/logo.png" alt="logo" class="logo"></a>
        <nav>
            <ul>
                <li>
                    <?php
                        if(count($_COOKIE)>1){
                        echo "
                        <div class = 'complexNav'
                            <ul>
                                <li><button>
                                        <img src='Images/user.png' alt='user' class='user'>
                                    </button> 
                                    <div class='dropdown-content'>
                                        <a href='logout.php'>Logout</a>
                                    </div>
                                </li>
                                <li>
                                    <strong><h3>Welcome!
                                    </strong></h3>
                                </li>
                            </ul>
                        </div>";

                        }

                        else {
                            echo "
                            <button>
                                <a href=login.php>
                                    <img src='Images/user.png' alt='user' class='user'>
                                </a>
                            </button> 
                            <div class='dropdown-content'>
                                <a href='login.php'>Login</a>
                                <a href='signUp.php'>Sign Up</a>
                            </div>";
                        }
                    ?>

                </li>
                <li><a href="#">
                        <h3>Accessories</h3>
                    </a></li>
                <li><a href="women.php">
                        <h3>Women</h3>
                    </a></li>
                <li><a href="men.php">
                        <h3>Men</h3>
                    </a></li>
                <li><a href="index.php">
                        <h3>Home</h3>
                    </a></li>
            </ul>
        </nav>
    </header>

    <div class="leatherMen">
        <ul>
            <li><a href="index.php">Home</a> </li>
            <li>/</li>
            <li><a href="women.php">Women</a></li>
        </ul>

        <h1>Leather Jackets for Women</h1>

    </div>
    </header>

    <div class="container">
        <div class="row">

            <div class="column">
                <img src="/Images_3/1.jpg" alt="">
                <img src="/Images_3/2.jpg" alt="">
                <img src="/Images_3/3.jpg" alt="">
                <img src="/Images_3/4.jpg" alt="">
            </div>

            <div class="column">
                <img src="/Images_3/5.jpg" alt="">
                <img src="/Images_3/6.jpg" alt="">
                <img src="/Images_3/7.jpg" alt="">

            </div>

            <div class="column">
                <img src="/Images_3/9.jpg" alt="">
                <img src="/Images_3/10.jpg" alt="">
                <img src="/Images_3/11.jpg" alt="">
                <img src="/Images_3/12.jpg" alt="">
            </div>

        </div>

    </div>

</body>

</html>