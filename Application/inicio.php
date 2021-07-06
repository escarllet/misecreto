
<?php include("conn/bd.php") ;
 include("includes/head.php") ;
 include("includes/navbar.php") ;


?>

<div class="container">
    <br>
    <div class="row ">
        <div class="col s2 offset-s10">

    <a class="btn-floating btn-large waves-effect waves-light red tooltipped" href="crear.php" data-position="right" data-tooltip="Agregar secreto">
        <i class="material-icons">add</i></a>
        </div>

    </div>
    <div class="row ">
    <?php
        $idusuario = $_SESSION['id'];
        $query = "SELECT * FROM secretos WHERE idusuario= $idusuario";
        $resultper = mysqli_query($conn,$query);

        while ($row = mysqli_fetch_array($resultper)):
            ?>

                <div class="col s4 ">
                    <div class="card">
                        <div class="card-image">
                            <img src="<?php echo $row['foto']?>">
                            <span class="card-title"><?php echo $row['titulo']?></span>
                            <a class="btn-floating halfway-fab waves-effect waves-light red tooltipped modal-trigger" data-target="secreto<?php echo $row['id']?>" data-position="right" data-tooltip="Ver mas detalles"><i class="material-icons">add</i></a>
                        </div>
                        <div class="card-content">
                            <p><?php echo $row['descripcion']?></p>
                        </div>
                    </div>
                </div>


            <!-- Modal Structure -->
            <div id="secreto<?php echo $row['id']?>" class="modal modal-fixed-footer">
                <div class="row">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat col s1 offset-s11 center"> <i class="material-icons">close</i></a>
                    <div class="modal-content">
                        <h4><?php echo $row['titulo']?></h4>
                        <p><strong>Fecha en que ocurrio: </strong><?php echo $row['fecha']?> <strong>      Valor $ : </strong> <?php echo $row['valor']?></p>
                        <p><?php echo $row['descripcion']?></p>
                        <p> <strong>Comentario: </strong> <?php echo $row['comentario']?></p>

                    </div>
                    <div class="modal-footer">
                            <a class="waves-effect waves-green btn-flat" href="editar.php?idsecreto=<?php echo $row['id']?>">Editar</a>
                            <a class="waves-effect waves-red btn-flat" href="eliminar.php?idsecreto=<?php echo $row['id']?>">Eliminar</a>

                    </div>
                </div>
            </div>
        <?php endwhile;?>
        </div>

</div>
