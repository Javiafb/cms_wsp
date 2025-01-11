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
                  <th>Apellido</th>
                  <th>Correo</th> 
                </tr>
            </thead>
         <tbody>';

        foreach ($infor as $row) {

            echo ' <tr>
                     <td>' . $row['id_usu'] . '</td>
                     <td>Juan Pérez</td>
                     <td>juan@example.com</td>
                     <td>555-1234</td>
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
}
