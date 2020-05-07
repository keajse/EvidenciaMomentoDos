<?php


    if(!isset($_POST['nameuser']))
    {
        die("Error");
    }    

        
        $nameuser = $_POST['nameuser'];   
        $lastname = $_POST['lastname'];
        $identification = $_POST['identification'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $place = $_POST['place'];
        $phone = $_POST['phone'];
        $reason = $_POST['reason'];
        $date = $_POST['date'];
        
           

        try
        {
            include_once('db_connection.php');
            $sql = "INSERT INTO user (name, lastname,identification, age, city, place, phone, reason,date) VALUES ('{$nameuser}','{$lastname}',{$identification},'{$age}','{$city}','{$place}',{$phone},'{$reason}','{$date}')" ;
            $result = $conn -> query($sql);

            header("location: assignment.php");

        }
        catch(Exception $ex)
        {
            echo "DB connection error";
        }

?>
