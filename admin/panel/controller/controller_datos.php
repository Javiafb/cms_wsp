<?php


class dataTables
{

    public function tables_user()
    {

        $datos = new usuarios_tabla();
        $obtdatos = $datos->usu();

        $infor = [];


        while ($data = mysqli_fetch_assoc($obtdatos)) {

            $infor[] = $data;
        }

        echo '

        <table id="miTabla" class="table table-striped table-bordered" style="width:100%">
             <thead>
                 <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Clave</th> 
                  <th>Rol</th> 
                  <th>opciones</th> 
                </tr>
            </thead>
         <tbody>';

        foreach ($infor as $row) {

            echo ' <tr>
                     <td>' . $row['id_usu'] . '</td> 
                     <td>' . $row['nombre'] . '</td>
                     <td>' . $row['correo'] . '</td>
                     <td>' . $row['clave'] . '</td>';

            if ($row["rol_usu"] == 1) {
                echo ' <td>  <button type="button" class="btn btn-warning m-1">Admin</button></td>';
            } else {
                echo ' <td>  <button type="button" class="btn btn-secondary m-1">Usuario</button></td>';
            }
            echo '
                     <td>
                  <button type="button" title="borrar" class="btn btn-outline-danger m-1">✖️</button>
                  <button type="button" title="editar" class="btn btn-outline-primary m-1">✔️</button>

                     </td>
                  
                     </tr>';
        };
        echo ' 
        </tbody>
    </table>';
    }

    public function table_grup()
    {

        $obtenerinfo = new model_grupo();
        $resultado = $obtenerinfo->grupos_info();


        $grupos = [];

        while ($datos = mysqli_fetch_assoc($resultado)) {
            $grupos[] = $datos;
        }

        echo '

        <table id="miTabla" class="table table-striped table-bordered" style="width:100%">
             <thead>
                 <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Categoria</th>
                  <th>Pclave</th>
                  <th>Imagen</th>
                </tr>
            </thead>
         <tbody>';

        foreach ($grupos as $row) {

            echo ' <tr>
                     <td>' . $row['grupo_id'] . '</td>
                     <td>' . $row['id_usu'] . '</td>
                     <td>' . $row['nombre_grupo'] . '</td>
                     <td>' . $row['pclave_grupo'] . '</td>
                     <td> 
                     <img style="width:80px"; src="http://localhost/cms_wsp/public/img/grupo-img/' . $row['img_grupo'] . ' " >
                     </td>
                  </tr>';
        };
        echo ' 
        </tbody>
    </table>';
    }

    public function table_categorias()
    {

        $datos = new Model_categorias();
        $obtdatos = $datos->obte_categorias();

        $infor = [];


        while ($data = mysqli_fetch_assoc($obtdatos)) {

            $infor[] = $data;
        }

        echo '

        <table id="miTabla" class="table table-striped table-bordered" style="width:100%">
             <thead>
                 <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>opciones</th> 
                </tr>
            </thead>
         <tbody>';

        foreach ($infor as $row) {

            echo "<tr>";
            echo "<td>" . $row['id_cate'] . "</td>";
            echo "<td>" . $row['nombre_categoria'] . "</td>";
            echo "<td>
                <button class='btn btn-danger btn-delete' data-id='" . $row['id_cate'] . "'>Eliminar</button>
            </td>";
            echo "</tr>";
        };
        echo ' 
        </tbody>
    </table>';
    }

}
