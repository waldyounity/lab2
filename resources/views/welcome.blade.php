<!-- resources/views/perfil.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Mi Perfil</h3>
                    </div>
                    <div class="card-body text-center">
                        <!-- Foto -->
                        <img src="{{ asset('images/foto de perfil.jpg') }}" alt="Mi Foto" class="rounded-circle mb-3" style="width:150px; height:150px; object-fit:cover;">

                        <!-- Datos personales -->
                        <h4>Waldo Hurtado</h4>
                        <p class="text-muted">Tecnologías de Internet</p>

                        <ul class="list-group list-group-flush text-start mt-4">
                            <li class="list-group-item"><strong>Correo:</strong> waldo@example.com</li>
                            <li class="list-group-item"><strong>Teléfono:</strong> +591 12345678</li>
                            <li class="list-group-item"><strong>Dirección:</strong> Oruro, Bolivia</li>
                        </ul>
                    </div>
                    <div class="card-footer text-center">
                        <small>© 2025 Waldo Hurtado</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
