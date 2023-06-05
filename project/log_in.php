<?php
    include("connect.php");

    if (isset($_POST))
    {
        $name = trim($_POST['name']);
        $tc = trim($_POST['tc']);
        $password = trim($_POST['password']);

        $datacek = $connection->prepare("SELECT * FROM user_data");

        $datacek->execute();

        while($kontrol = $datacek->fetch(PDO::FETCH_ASSOC))
        {
            if ($kontrol["name"] == $name && $kontrol["tc"] == $tc && $kontrol["password"] == $password) 
            {
                header("Location: anasayfa.html");
                break;
            }
            else
            {
                echo"Hatalı Giriş Yaptınız";
            }
        }
        header("Refresh: 1; url=log-in.html");

    }
?>