<?php include_once('layouts\header.php') ?>



<section>
    <div class="table-responsive">
        <table class="table">
            <table class="table">
                <thead>
                    <tr >
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Identificación</th>
                        <th scope="col">Fch_Nacimiento</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Barrio</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha de la cita</th>
                    </tr>
                </thead>
                <tbody>

                    <?php


                    try {
                        include_once('db_connection.php');
                        $sql = "SELECT * FROM user";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $rowTemplate = "<tr>      
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['lastname']}</td>
                                    <td>{$row['identification']}</td>
                                    <td>{$row['age']}</td>
                                    <td>{$row['city']}</td>
                                    <td>{$row['place']}</td>
                                    <td>{$row['phone']}</td>
                                    <td>{$row['reason']}</td>
                                    <td>{$row['date']}</td>
                                    <td>
                                        <a href='edit_user.php?id={$row['id']}' class='badge badge-primary'>Edit</a>
                                        <a href='delete_user.php?id={$row['id']}' class='badge badge-danger'>Delete</a>
                                    </td>
                                    </tr>";
                                echo $rowTemplate;
                            }
                        }
                    } catch (Exception $ex) {
                        echo "error";
                    }
                        
                    ?>


                </tbody>
            </table>
        </table>
    </div>
</section>

<?php include_once('layouts\footer.php') ?>