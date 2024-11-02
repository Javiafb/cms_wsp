<?php


class controller_grup
{
    public function grupos()
    {
        $modelo = new model_grup();
        $resultado = $modelo->query_grupos();

        $grupos = [];

        // Guardar todas las filas en el array
        while ($row = mysqli_fetch_assoc($resultado)) {
            $grupos[] = $row;
        }

        // Iterar sobre el array con foreach
        foreach ($grupos as $grupo) {
            echo '
            <!-- grups -->
            <div class="single-products-catagory clearfix">
                <a href="#">
                    <img src="./public/img/grupo-img/' . $grupo['img_grupo'] . '" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p style="color:yellow;">' . htmlspecialchars($grupo['nombre_grupo']) . '</p>
                        <h4>' . htmlspecialchars($grupo['pclave_grupo']) . '</h4>
                    </div>
                </a>
            </div> 
            ';
        }
    }

    public function guardar_grupos()
    {
        if (isset($_POST['nombre'])) {

            $nombre = $_POST['nombre'];
            $palabraclave = $_POST['palabraclave'];
            $descripcion = $_POST['descripcion'];
            $enlace = $_POST['enlace'];
            $idcate = $_POST['categoria'];
            $img = $_FILES['imagen'];
            $name = $img['name'];
            $tmpname = $img['tmp_name'];
            $fecha = date("YmdHis");
            $foto = $fecha . ".jpg";
            $directorio = "./public/img/grupo-img/" . $foto;

            // Mover el archivo subido al directorio de destino
            if (move_uploaded_file($tmpname, $directorio)) {
                // Si el archivo se movió correctamente, se guardan los datos en la base de datos
                $datos = array(
                    "nombre" => $nombre,
                    "palabraclave" => $palabraclave,
                    "descripcion" => $descripcion,
                    "enlace" => $enlace,
                    "idcate" => $idcate,
                    "foto" => $foto,
                );

                $respuesta = new model_grup();
                $resultado = $respuesta->guardarDatosGrupo($datos);

                // Verificar si los datos se guardaron correctamente
                if ($resultado === 'Datos guardados correctamente') {
                    echo "ok";
                } else {
                    echo "Error al guardar los datos en la base de datos";
                }
            } else {
                echo "Error al mover la imagen al directorio de destino";
            }
        }
    }
}
