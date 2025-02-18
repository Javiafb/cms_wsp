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
                  <th>Rol</th> 
                  <th>opciones</th> 
                </tr>
            </thead>
         <tbody>';

        foreach ($infor as $row) {

            echo ' <tr>
                     <td>' . $row['id_usu'] . '</td> 
                     <td>' . $row['nombre'] . '</td>
                     <td>' . $row['correo'] . '</td>';

            if ($row["rol_usu"] == 1) {
                echo ' <td>  <button type="button" class="btn btn-warning m-1">Admin</button></td>';
            } else {
                echo ' <td>  <button type="button" class="btn btn-secondary m-1">Usuario</button></td>';
            }
            echo ' <td>
                   <button class="btn btn-danger btn-delete" title="borrar" data-id="' . $row["id_usu"] .  ' " data-type="usuarios"><i class="ti ti-trash-x fs-4"></i>Eliminar</button>
                   <button type="button" title="editar" class="btn btn-outline-primary m-1"><i class="ti ti-edit fs-4"></i>Editar</button>

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
                  <th>Eliminar</th>
                  <th>Editar</th>
                </tr>
            </thead>
         <tbody>';

        foreach ($grupos as $row) {

            echo ' <tr>
                     <td>' . $row['grupo_id'] . '</td>
                     <td>' . $row['nombre_grupo'] . '</td>
                     <td>' . $row['nombre_categoria'] . '</td>
                     <td>' . $row['pclave_grupo'] . '</td>
                     <td> 
                     <img style="width:80px"; src="http://localhost/cms_wsp/public/img/grupo-img/' . $row['img_grupo'] . ' " >
                     </td>
                     <td>
                        <button class="btn btn-danger btn-delete" data-id="' . $row["grupo_id"] .  ' " data-type="grupos"><i class="ti ti-trash-x fs-4"></i>Eliminar</button>
                    </td>  
                    <td>
                       <button class="btn btn-success btn-edit" data-type="editar"  data-gru="' . $row["grupo_id"] . '" data-nombre="' . $row["nombre_grupo"] . '  " data-enlace="' . $row["enlace_grupo"] . ' " data-categoria="' . $row["nombre_categoria"] . '" data-pclave="' . $row["pclave_grupo"] . '" data-img="' . $row["img_grupo"] . '"><i class="ti ti-edit fs-4"></i>Editar</button>
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
                <button class='btn btn-danger btn-delete' data-id='" . $row['id_cate'] .  " ' data-type='categorias'><i class='ti ti-trash-x fs-4'></i>Eliminar</button>
            </td>";
            echo "</tr>";
        };
        echo ' 
        </tbody>
    </table>';
    }
}
