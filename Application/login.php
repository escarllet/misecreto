<?php
if(isset($_GET['mevoy'])){
    session_unset();
}
if(isset($_SESSION['correo'])){
    echo '<meta http-equiv = "refresh" content = " 0; url = inicio.php"/>';
}
include("../conn/bd.php") ;
include("../includes/head.php") ;
?>
    <nav>
    <div class="nav-wrapper  amber darken-3">
    <div class="container">
      <a href="#" class="brand-logo">Mis Secretos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

      </ul>
    </div>
</div>
  </nav>
  <?php if(isset($_SESSION['mensaje1'])):?>
    <a onclick="M.toast({html: 'Error: Contraseñas no coinciden'})" class="btn red">Mensaje! click aqui!</a>
    <?php unset($_SESSION['mensaje1']); endif;?>
    <?php if(isset($_SESSION['mensaje2'])):?>
    <a onclick="M.toast({html: 'Error: No se pudo registrar'})" class="btn red">Mensaje! click aqui!</a>
    <?php unset($_SESSION['mensaje2']); endif;?>
    <?php if(isset($_SESSION['mensaje3'])):?>
    <a onclick="M.toast({html: 'Error: Usuario vacio'})" class="btn red">Mensaje! click aqui!</a>
    <?php unset($_SESSION['mensaje3']); endif;?>
    <?php if(isset($_SESSION['mensaje4'])):?>
    <a onclick="M.toast({html: 'Error: Usuario o Contraseña incorrecta'})" class="btn red">Mensaje! click aqui!</a>
    <?php unset($_SESSION['mensaje4']); endif;?>
    <?php if(isset($_SESSION['mensaje5'])):?>
    <a onclick="M.toast({html: 'Error: Usuario no existe'})" class="btn red">Mensaje! click aqui!</a>
    <?php unset($_SESSION['mensaje5']); endif;?>
        <div class="container">
        <div class="container">
        <p class="z-depth-3">
            <div class="row">
                <div class="col s12">
                <div class="card-panel white">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs">
                                <li class="tab col s6"><a class="active" href="#test1"> Inicia Sesion</a></li>
                                <li class="tab col s6"><a href="#test2">Registrate</a></li>

                            </ul>
                            </div>
                            <div id="test1" class="col s12 center">
                                <h5 >Bienvenido de vuelta!</h5>
                                <form action="log.php" method="POST" autocomplete="on">
                                    <div class="row">
                                        <span class="col s1"></span>
                                        <div class="input-field col s10">
                                        <input id="first_name" type="text" name="usernamee" class="validate">
                                        <label for="first_name">Nombre de usuario</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span class="col s1"></span>
                                        <div class="input-field col s10">
                                            <input id="password" type="password" name="pass" class="validate">
                                            <label for="password">Contraseña</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <button class="btn waves-effect waves-light amber darken-2" type="submit" name="inicio">Inicia sesion

                                        </button>

                                        </div>
                                    </div>

                              </form>
                            </div>
                            <div id="test2" class="col s12 center">
                                <h5>Te hemos estado esperando!</h5>
                                <form action="add.php" method="POST" autocomplete="off">
                                    <div class="row">
                                    <span class="col s1"></span>
                                        <div class="input-field col s10">
                                        <input id="first_name" type="text" name="username" class="validate">
                                        <label for="first_name">Nombre de usuario</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span class="col s1"></span>
                                        <div class="input-field col s10">
                                            <input id="email" type="email" name="correoo" class="validate">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span class="col s1"></span>
                                        <div class="input-field col s10">
                                            <input id="password" type="password" name="pass1" class="validate">
                                            <label for="password">Contraseña</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span class="col s1"></span>
                                        <div class="input-field col s10">
                                            <input id="password" type="password" name="pass2" class="validate">
                                            <label for="password">Repetir Contraseña</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <button class="btn waves-effect waves-light amber darken-2" type="submit" name="registra">Registrate

                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </p>
        </div>
    </div>

    <?php include("../includes/footer.php") ;?>
