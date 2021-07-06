
<?php include("../conn/bd.php") ;?>
<?php include("../includes/head.php") ;?>
<?php include("../includes/navbar.php") ;?>

<div class="container">

<div class="row">
    <div class="col s12 ">
        <div class="card-panel white">
        <form action="secreto.php" method="POST" autocomplete="off" enctype="multipart/form-data">

            <div class="center">
                <section>
                    <h5>Hablemos de tu secreto</h5>
                    <div class="profile profile-bigimg">
                        <div class="profile__image"><img src="https://s3.amazonaws.com/FringeBucket/default-user.png" id="imagen" alt="Doggo"></div>
                            <div class="profile__info">
                                <div class="custom-file">
                                    <div class="file-field input-field ">
                                        <div class="row">
                                            <div class="col s6 offset-s3">
                                                <div class="btn">
                                                    <span>Subir foto</span>
                                                    <input type="file"id="customFileLang"  name="foto">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input  class="file-path validate"  type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>
                <div class="row">
                    <span class="col s1"></span>
                    <div class="input-field col s10">
                        <input id="first_name" type="text" name="titulo" class="validate">
                        <label for="first_name">Titulo</label>
                    </div>
                </div>
                <div class="row">
                    <span class="col s1"></span>
                    <div class="input-field col s10">
                        <textarea id="textarea1" class="materialize-textarea" name="descripcion"></textarea>
                        <label for="textarea1">Descripcion</label>
                    </div>
                </div>
                <div class="row">
                    <span class="col s1"></span>
                    <div class="input-field col s10">
                        <input id="first_name" type="text" name="comentario" class="validate">
                        <label for="first_name">Comentario</label>
                    </div>
                </div>
                <div class="row">
                    <span class="col s1"></span>
                    <div class="input-field col s5">
                        <input id="first_name" type="date" name="fecha" value="<?= $row['fecha'];?>"  class="validate">
                        <label for="first_name">Fecha en la que Ocurrio</label>

                    </div>
                    <div class="input-field col s5">
                        <input id="first_name" type="number" name="valor" class="validate">
                        <label for="first_name">Valor en $ del secreto</label>
                    </div>

                </div>
                <div class="row">
                    <div class="col s6 offset-s5">
                        <button class="btn waves-effect waves-light amber darken-2 pulse" type="submit" name="guardar">Guardar
                        </button>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>



</div>

<script>
            // Obtener referencia al input y a la imagen
                const $seleccionArchivos = document.querySelector("#customFileLang"),
                $imagenPrevisualizacion = document.querySelector("#imagen");

                // Escuchar cuando cambie
                $seleccionArchivos.addEventListener("change", () => {
                // Los archivos seleccionados, pueden ser muchos o uno
                const archivos = $seleccionArchivos.files;
                // Si no hay archivos salimos de la función y quitamos la imagen
                if (!archivos || !archivos.length) {
                    $imagenPrevisualizacion.src = "https://s3.amazonaws.com/FringeBucket/default-user.png";
                    return;
                }
                // Ahora tomamos el primer archivo, el cual vamos a previsualizar
                const primerArchivo = archivos[0];
                // Lo convertimos a un objeto de tipo objectURL
                const objectURL = URL.createObjectURL(primerArchivo);
                // Y a la fuente de la imagen le ponemos el objectURL
                $imagenPrevisualizacion.src = objectURL;
                });
        </script>

<?php include("../includes/footer.php") ;?>
