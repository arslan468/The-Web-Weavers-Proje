<?php
    include("connect.php");
    if (isset($_POST))
    {
        $name = trim($_POST['ad']);
        $tc = trim($_POST['tc']);
        $password = trim($_POST['password']);
        $sifre = md5($password);

        $veri = $connection->prepare("INSERT INTO user_data set name = ?, tc = ?, password = ?");

        $insert = $veri->execute(array($name, $tc, $password));

        if ($insert)
        {
            header("Location: log-in.html");
        }
        else
        {
            header("Location: newuser.html");
        }
    }
?>