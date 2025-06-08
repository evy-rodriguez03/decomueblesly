<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Enlace a Bootstrap y FontAwesome -->
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
        <h1 class="text-center mb-5">DecomueblesLy</h1>

        <div class="row">
            <!-- Bloque de Inventario -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center" onclick="window.location.href='/inventario'">
                    <div class="card-body">
                        <i class="fas fa-boxes"></i>
                        <h5 class="card-title">Inventario</h5>
                        <p class="card-text">Consulta y gestiona el stock disponible de productos.</p>
                    </div>
                </div>
            </div>

            <!-- Bloque de Compra -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center" onclick="window.location.href='/compras'">
                    <div class="card-body">
                        <i class="fas fa-shopping-cart"></i>
                        <h5 class="card-title">Compra</h5>
                        <p class="card-text">Registra nuevas compras y actualiza el inventario.</p>
                    </div>
                </div>
            </div>

            <!-- Bloque de Ventas -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center" onclick="window.location.href='/ventas'">
                    <div class="card-body">
                        <i class="fas fa-chart-line"></i>
                        <h5 class="card-title">Ventas</h5>
                        <p class="card-text">Consulta ventas realizadas y genera reportes.</p>
                    </div>
                </div>
            </div>

            <!-- Bloque de Clientes -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-center" onclick="window.location.href='/clientes'">
                    <div class="card-body">
                        <i class="fas fa-users"></i>
                        <h5 class="card-title">Clientes</h5>
                        <p class="card-text">Administra la información de tus clientes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts de Bootstrap y FontAwesome -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
