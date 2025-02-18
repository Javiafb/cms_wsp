<?php

session_start();

class RolController
{
    public function verificarRol()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'];
            $password = $_POST['contra'];

            require_once './controller/controller_conexion.php';

            $conexion = new conectar();
            $cone = $conexion->conexion();


            $stmt = $cone->prepare("SELECT id_usu, nombre, rol_usu, clave FROM usuarios_wsp WHERE correo = ?");
            $stmt->bind_param("s", $usuario);
            $stmt->execute();
            $result = $stmt->get_result();
            $filas = $result->fetch_assoc();

            if ($filas && password_verify($password, $filas['clave'])) {

                $_SESSION['user'] = $filas;
                $_SESSION['uid'] = $filas['id_usu'];
                $_SESSION['uname'] = $filas['nombre'];
                $_SESSION['rol'] = $filas['rol_usu'];

                switch ($_SESSION['rol']) {
                    case 1:
                    case 2:
                        header("Location: index");
                        break;
                    default:
                        header("Location: login");
                        break;
                }
                exit();
            } else {
                echo '
                <div class="alert alert-danger" role="alert" style="z-index: 1; text-align: center;position: absolute;margin: 5px 40%;">
                    Error: usuario o contraseña incorrectos.
                </div>
                ';
            }

            $stmt->close();
            $cone->close();
        }
    }
}

$login = new RolController();
$login->verificarRol();
