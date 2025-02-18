<?php

require './model/model_catego.php';

class categoria
{

    function  ver_categorias()
    {

        $categorias = new model_categorias();
        $ver = $categorias->obte_categorias();

        $infor = [];


        while ($data = mysqli_fetch_assoc($ver)) {

            $infor[] = $data;
        }

        echo '<div class="mb-3">
              <label for="categorias" class="col-form-label">Categoría:</label>
            <select class="form-select" name="categorias" id="categorias" required>';

        foreach ($infor as $row) {
            echo '<option value='. $row['id_cate'] .'>'. $row['nombre_categoria'] .'</option>';
        };
            echo '</select>
            </div>';
        }
    }

