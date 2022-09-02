<?php
class model
{
    public function connexion()
    {
        $servername = "localhost";
        $username = "amine";
        $password = "Superamine1@";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=PiePhp", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    //$conn->query("INSERT INTO user (email, password) VALUES('chocho@gmail.com','congrat')");//test
    }
}