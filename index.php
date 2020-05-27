<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_REQUEST["email"];


    function checkValidEmail($string)
    {
        $pattern = '/^[a-zA-Z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
        if (preg_match($pattern, $string))
        {
            echo "This email is valid";
        } else {
            echo "This email is not valid";
        }
    }
    checkValidEmail($email);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>Email: </label>
    <input type="email" name="email">
    <br>
    <button type="submit">Register</button>
</form>
</body>
</html>
