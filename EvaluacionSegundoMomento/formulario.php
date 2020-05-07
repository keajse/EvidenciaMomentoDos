<?php include_once('layouts\header.php') ?>



<section>
    <form action="save_user.php" method="post" onsubmit="return validate()">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="nameuser" placeholder="Nombres" id="nameuser">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Apellido" id="lastname" name="lastname">
            </div>
        </div>

        <br>
        <br>


        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Número de identificación" id="identification" name="identification">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Fecha de nacimiento (dd/mm/aaaa)" id="age" maxlength="10" name="age">
            </div>
        </div>


        <br>
        <br>

        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Ciudad de Residencia" id="city" name="city">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Barrio" id="place" name="place">
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="Teléfono"  id="phone" name="phone">
            </div>
        </div>

        <br>
        <br>


        <div class="row">
            <div class="col">
               
                <input type="text" class="form-control" placeholder="Motivo de la consulta" id="reason" name="reason">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Fecha de la cita (dd/mm/aaaa)" id="date" maxlength="10" name="date">
            </div>

        </div>


        <br>
        <br>


        <!-- <button type="submit">Submit</button> -->

        <button type="submit" class="btn btn-success">
            Submit
        </button>
    </form>
</section>




<?php include_once('layouts\footer.php') ?>