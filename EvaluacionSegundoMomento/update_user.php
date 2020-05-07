

<?php
     if(isset($_GET['id']))
     {
         include_once('db_connection.php');
 
         $id = $_GET['id'];

            $nameuser = $_POST['nameuser'];   
            $lastname = $_POST['lastname'];
            $identification = $_POST['identification'];
            $age = $_POST['age'];
            $city = $_POST['city'];
            $place = $_POST['place'];
            $phone = $_POST['phone'];
            $reason = $_POST['reason'];
            $date = $_POST['date'];

     $sql = "UPDATE user SET  name = '{$nameuser}', lastname = '{$lastname}',identification = {$identification}, age = '{$age}', city = '{$city}' , place = '{$place}', phone = {$phone}, reason = '{$reason}', date = '{$date}' WHERE id = {$id}" ;
         $result = $conn -> query($sql);
 
         header("location: assignment.php");


         
            
     }

?>

