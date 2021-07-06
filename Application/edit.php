<?php
include("../conn/bd.php") ;

if (isset($_POST['actualizar'])) {

    $idusuario = $_SESSION['id'];
    if (isset($_POST['foto'])) {
        $info = pathinfo($_FILES['foto']['name']);
        $avatar = "imagenes" ."/".$idusuario.$_POST["titulo"].".".$info['extension'];
        copy($_FILES['foto']['tmp_name'],$avatar);
    }

    $id = $_SESSION['idsecreto'] ;
    $fecha = $_POST['fecha'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $valor = $_POST['valor'];
    $comentario = $_POST['comentario'];


    if (isset($_POST['foto'])) {
        $query = "UPDATE secretos set foto='$avatar',fecha = '$fecha',titulo = '$titulo',descripcion = '$descripcion',valor = $valor,comentario = '$comentario' WHERE id = $id";
        $resultper = mysqli_query($conn,$query);

    }else{
        $query = "UPDATE secretos set fecha = '$fecha',titulo = '$titulo',descripcion = '$descripcion',valor = $valor,comentario = '$comentario' WHERE id = $id";
        $resultper = mysqli_query($conn,$query);
    }

    echo '<meta http-equiv = "refresh" content = " 0; url = inicio.php"/>';
}

?>
