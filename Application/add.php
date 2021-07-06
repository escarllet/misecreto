<?php

include("../Tarea5/conn/bd.php") ;

if(isset($_POST['registra'])){


    $correo = $_POST['correoo'];
    $username = $_POST['username'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if($pass1==$pass2){

        $query="INSERT INTO usuarios(username, correo, pass) VALUES('$username','$correo','$pass1')";
        $result = mysqli_query($conn,$query);

        if(isset($result)){
            $_SESSION['username']= $username;
            $_SESSION['correo']= $correo;

            $query = "SELECT * FROM usuarios WHERE username = '$username'";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_array($result);
            $_SESSION['id']= $row['id'];

            echo '<meta http-equiv = "refresh" content = " 0; url = inicio.php"/>';

        }else{
            $_SESSION['mensaje2']= 'No se pudo registrar';
            echo '<meta http-equiv = "refresh" content = " 0; url = login.php"/>';
        }

    }else{

        $_SESSION['mensaje1']= 'Las contraseñas no coinciden';
        echo '<meta http-equiv = "refresh" content = " 0; url = login.php"/>';

    }
}

?>