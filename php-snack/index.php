<?php
/*
EXERCISE FROM https://www.w3resource.com/php-exercises/php-basic-exercises.php
*/

//4. Create a simple HTML form and accept the user name and display the name thoiugh PHP echo statement.
$name = $_GET['name'];

// 5-Write a PHP script to get the client IP address
function getIPAddress()
{
    //whether ip is from the share internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from the remote address  
    else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$ip = getIPAddress();  
echo 'User Real IP Address - '.$ip;
echo "<br>";

// 6- Write a simple PHP browser detection script.
echo "Your User Agent is :" . $_SERVER ['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCISE PHP</title>
</head>
<body>
    <h1>Please input your name:</h1>
    <form name="form" action="" method="get">
        <input type="text" name="name" placeholder="Input your name here">
        <button type="submit">Submit Name</button>
    </form>
    
    <?php
    echo "<div>Hello $name </div>";
    $ip_address = gethostbyname("www.google.com");
    echo "IP Address of Google is - " . $ip_address;
    echo "</br>";
    ?>
</body>
</html>