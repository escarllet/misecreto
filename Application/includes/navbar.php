
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">

  <li class="divider"></li>
  <li><a href="../login.php?mevoy=true">Cerrar sesion</a></li>
</ul>
<nav>
  <div class="nav-wrapper amber darken-3">
      <div class="container">
      <a href="../inicio.php" class="brand-logo">Mis Secretos</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="../inicio.php">Inicio</a></li>
      <li><a href="../crear.php">Crear secreto</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo $_SESSION['correo'];?><i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
      </div>

  </div>
</nav>
