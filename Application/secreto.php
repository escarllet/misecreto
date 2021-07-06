<?php
include("../conn/bd.php") ;


if (isset($_POST['guardar'])) {

    $idusuario = $_SESSION['id'];
    $info = pathinfo($_FILES['foto']['name']);
    $avatar = "imagenes" ."/".$idusuario.$_POST["titulo"].".".$info['extension'];
    copy($_FILES['foto']['tmp_name'],$avatar);


    $fecha = $_POST['fecha'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $valor = $_POST['valor'];
    $comentario = $_POST['comentario'];

    $query="INSERT INTO secretos(foto,idusuario,fecha,titulo,descripcion,valor,comentario) VALUES ('$avatar',$idusuario,'$fecha','$titulo','$descripcion',$valor,'$comentario')";
    $result = mysqli_query($conn,$query);
    if(isset($result)){
        echo '<meta http-equiv = "refresh" content = " 0; url = inicio.php"/>';
    }else{
        echo '<meta http-equiv = "refresh" content = " 0; url = crear.php"/>';
    }
}


?>
