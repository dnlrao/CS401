<?php
session_start();
//resetting the cookie
foreach ($_COOKIE as $name => $value) {
    setcookie($name, "", time() - 3600);
}
session_destroy();
 header("Location: login.php");
exit();
?>
    
