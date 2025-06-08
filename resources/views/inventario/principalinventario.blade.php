<!-- resources/views/inventario.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventario</title>
    <!-- Bootstrap y FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            cursor: pointer;
            transition: transform 0.2s ease;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Gestión de Inventario</h1>

        <div class="row">
            <!-- Bloque de Agregar Producto -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center" onclick="window.location.href='/inventario/agregar'">
                    <div class="card-body">
                        <i class="fas fa-plus-circle"></i>
                        <h5 class="card-title">Agregar Producto</h5>
                        <p class="card-text">Añade nuevos productos al inventario.</p>
                    </div>
                </div>
            </div>

            <!-- Bloque de Rebajar Producto -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center" onclick="window.location.href='/inventario/rebajar'">
                    <div class="card-body">
                        <i class="fas fa-minus-circle"></i>
                        <h5 class="card-title">Rebajar Producto</h5>
                        <p class="card-text">Descuenta stock de productos.</p>
                    </div>
                </div>
            </div>

            <!-- Bloque de Reporte de Inventario -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card text-center" onclick="window.location.href='/inventario/reporte'">
                    <div class="card-body">
                        <i class="fas fa-file-alt"></i>
                        <h5 class="card-title">Reporte de Inventario</h5>
                        <p class="card-text">Genera reportes detallados del inventario.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
