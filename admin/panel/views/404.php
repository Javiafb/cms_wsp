<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página no encontrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./src/assets/images/logos/logot.png" type="image/x-icon">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #f8b511, #003add);
            color: white;
            text-align: center;

        }

        .error-container {
            max-width: 600px;
            padding: 40px;
            border-radius: 15px;
            background: rgba(0, 0, 0, 0.6);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .error-code {
            font-size: 8rem;
            font-weight: bold;
            color: #ff4757;
        }

        .error-message {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .btn-custom {
            background: #ff4757;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background: #e84118;
        }
    </style>
</head>

<script>
    function atras() {
        window.history.back();
    }
</script>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 error-container">
                <div class="error-code">404</div>
                <p class="error-message">Lo sentimos, la página que buscas no existe.</p>
                <button onclick="atras()" class="btn btn-custom text-white">Volver al inicio</button>
            </div>
        </div>
    </div>
</body>

</html>