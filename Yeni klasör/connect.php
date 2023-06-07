<?php
    try {
        $connection = new PDO("mysql:host=localhost;dbname=insider","root", "");
    } catch (\Throwable $th) {
        echo "<h1>Bağlanamadı hata: ".$th."</h1>";
    }
?>