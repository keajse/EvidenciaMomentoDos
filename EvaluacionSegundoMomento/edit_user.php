<?php include_once('layouts\header.php') ?>


<?php 
     if(isset($_GET['id']))
     {
         include_once('db_connection.php');
 
         $id = $_GET['id'];
         $sql = "SELECT * FROM user WHERE id = {$id}";
         $result = $conn -> query($sql);
 
        if($result->num_rows>0)
        {
            $row = $result ->fetch_assoc();            
        }
     }

?>


<section>
    <form action="update_user.php?id= <?php echo $row['id'] ?>" method="post" onsubmit="return validate()">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="nameuser" placeholder="Nombres" id="nameuser" value="<?php echo $row['name']?>">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Apellido" id="lastname" name="lastname"value="<?php echo $row['lastname']?>">
            </div>
        </div>

        <br>
        <br>


        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Número de identificación" id="identification" name="identification" value="<?php echo $row['identification']?>">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Fecha de nacimiento" id="age" maxlength="10" name="age" value="<?php echo $row['age']?>">
            </div>
        </div>


        <br>
        <br>

        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Ciudad de Residencia" id="city" name="city" value="<?php echo $row['city']?>">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Barrio" id="place" name="place" value="<?php echo $row['place']?>">
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="Teléfono"  id="phone" name="phone" value="<?php echo $row['phone']?>">
            </div>
        </div>

        <br>
        <br>


        <div class="row">
            <div class="col">
               
                <input type="text" class="form-control" placeholder="Motivo de la consulta" id="reason" name="reason" value="<?php echo $row['reason']?>">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Fecha de la cita" id="date" maxlength="10" name="date" value="<?php echo $row['date']?>">
            </div>

        </div>


        <br>
        <br>


        <!-- <button type="submit">Submit</button> -->

        <button type="submit">
            Submit
        </button>
    </form>
</section>


<?php include_once('layouts\footer.php') ?>