<?php

include("../Tarea5/conn/bd.php") ;

    if(isset($_POST['inicio'])){

        $pass = $_POST['pass'];
        $username = $_POST['usernamee'];
        $query = "SELECT * FROM usuarios WHERE username = '$username'";
        $result = mysqli_query($conn,$query);

        if(!empty($result)){
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_array($result);

                if($row['username']==$username && $row['pass']==$pass){

                        $_SESSION['username']= $username;
                        $_SESSION['id']= $row['id'];
                        $_SESSION['correo']= $row['correo'];
                        echo '<meta http-equiv = "refresh" content = " 0; url = inicio.php"/>';

                }else{
                        $_SESSION['mensaje4']= 'Usuario o Contraseña incorrecta';
                        echo '<meta http-equiv = "refresh" content = " 0; url = login.php"/>';
                }
            }else{
                $_SESSION['mensaje5']= 'Usuario no existe';
                echo '<meta http-equiv = "refresh" content = " 0; url = login.php"/>';
            }


        }else{
            $_SESSION['mensaje3']= 'Usuario vacio';

            echo '<meta http-equiv = "refresh" content = " 0; url = login.php"/>';

        }
    }

?>