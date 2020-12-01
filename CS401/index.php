<?php
session_start();
$_SESSION['signupErr'] = array();
$_SESSION['loginErr'] = array();
// echo "<pre>" . print_r($_COOKIE,1) . "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danny Apparels</title>
    <link rel="stylesheet" href="CSS/index.css">
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
                <li><a href="Accessories.php">
                        <h3>Accessories</h3>
                    </a></li>
                <li><a href="women.php">
                        <h3>Women</h3>
                    </a></li>
                <li><a href="men.php">
                        <h3>Men</h3>
                    </a></li>
                <li class="home"><a href="index.php">
                        <h3>Home</h3>
                    </a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <img src="Images/main.jpg" alt="main" class="main">
        <a href=""><img src="Images/logo.png" alt="logo" class="masterLogo"></a>
    </div>

    <section>
        <H1><q>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, animi!</q></H1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Sapiente illo tempore ipsum aperiam possimus ipsam voluptatibus atque numquam soluta et? Illum alias
            commodi
            odit pariatur praesentium eaque dolor nam velit, veritatis corporis totam assumenda id repellat beatae
            optio
            temporibus voluptas expedita suscipit!
            Laboriosam obcaecati, vero magni possimus laborum ut nobis quos veritatis veniam,
            svel explicabo optio est itaque iusto sed.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, optio est incidunt nostrum fugiat
            dolores
            non accusantium!
            incidunt?</p>

        <div class="mainSection">
            <div class="leftSection">
                <img src="/Images/user2.png" alt="user2" class="users">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis aperiam voluptatibus hic nemo
                    reprehenderit illo. Ea, vel ipsam. Excepturi accusamus unde tempore molestias obcaecati enim
                    voluptates atque illum soluta cupiditate repellendus vel libero placeat, necessitatibus quas
                    ullam
                    delectus dignissimos adipisci quibusdam laudantium quam alias autem! Sunt distinctio atque
                    repudiandae, qui ipsum blanditiis voluptates officia exercitationem perferendis natus ipsa nobis
                    deserunt, fugit ratione eum eveniet provident cumque quidem excepturi ut tenetur?
                </p>
            </div>

            <div class="rightSection">
                <img src="/Images/user1.png" alt="user1" class="users">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus in doloremque eos nulla, porro
                    magni
                    officiis perferendis, consectetur neque, expedita esse eaque rerum. Mollitia totam dolorem
                    suscipit
                    vero eveniet quaerat excepturi debitis, odio quia adipisci, voluptatem soluta odit. Labore,
                    impedit,
                    eum optio ut sapiente accusamus voluptatem vero id veniam saepe fugit, quidem architecto
                    blanditiis
                    quibusdam sint ducimus dolorum cumque aliquid quae. Ducimus, ipsam quae, repellendus molestias
                    qui
                    iure excepturi nam quos quas laudantium maiores doloribus ullam repudiandae magni quis nobis!
                </p>
            </div>
        </div>

    </section>

    <div class="buttonArea">
        <button class="orderButton"><a href="order.php">Order Now!</a></button>

    </div>

    <div class="footer">

        <img src="Images/facebook.svg" alt="facebook">
        <img src="Images/instagram.svg" alt="instagram">
        <img src="Images/youtube.svg" alt="youtube">

    </div>

    <ul class="footerFinal">
        <li><a href="#">
                <h4>Terms and Conditions</h4>
            </a> </li>
        <li><a href="#">
                <h4>Contact Us</h4>
            </a></li>
    </ul>

    </div>

</body>

</html>