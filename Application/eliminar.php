<?php
include("conn/bd.php");

if(isset($_GET['idsecreto'])){
    $id = $_GET['idsecreto'];
    $query = "DELETE FROM secretos Where id = $id";
    $resul = mysqli_query($conn,$query);

}
echo'<meta http-equiv = "refresh" content = " 0; url = inicio.php"/>';

?>
