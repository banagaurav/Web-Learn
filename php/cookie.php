<!-- Create a cookie -->
<!-- example of php script to illustrate handling of cookies  -->

<?php
$cookie_name = "user";
$cookie_value = "Bana";

//syntax to set cookie : setcookie(name,value,expire,path,domain..);
//  Only name parameter is required.All other parameters are optional.
setcookie($cookie_name, time() + (86400 * 30), "/");
if (!isset($_COOKIE[$cookie_name])) {
    echo $cookie_name . "is not set.";
} else {
    echo $cookie_name . "is set.";
}
?>