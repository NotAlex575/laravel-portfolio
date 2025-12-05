<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4 p-md-5 text-center" style="max-width: 600px;">
            <div class="card-body">
                <h1 class="card-title display-4 mb-3 text-primary">Benvenuto Admin!</h1>
                <p class="card-text fs-5 mb-4">
                    Qui puoi <strong>visualizzare</strong>, <strong>modificare</strong>, <strong>aggiungere</strong> e <strong>eliminare</strong> i progetti presenti nella tua piattaforma!
                </p>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-success btn-lg px-5">
                    Vai alla tabella dei Progetti
                </a>
            </div>
            <div class="card-footer text-muted mt-4">
                <small>Gestione completa dei contenuti</small>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
