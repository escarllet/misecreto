
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">

  <li class="divider"></li>
  <li><a href="../Tarea5/login.php?mevoy=true">Cerrar sesion</a></li>
</ul>
<nav>
  <div class="nav-wrapper amber darken-3">
      <div class="container">
      <a href="../Tarea5/inicio.php" class="brand-logo">Mis Secretos</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="../Tarea5/inicio.php">Inicio</a></li>
      <li><a href="../Tarea5/crear.php">Crear secreto</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo $_SESSION['correo'];?><i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
      </div>

  </div>
</nav>