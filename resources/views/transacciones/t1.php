<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BD Proyect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <h1></h1>
    <div class="container text-center">
        <h2>Transacción 1</h2>
        <h3>Cambiar la contraseña del usario MariaGomez23 por: DesdeLaravel</h3>
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>Nombre de Usuario</th>
                        <th>Contraseña</th>
                        <th>Status</th>
                        <th>Tipo de perfil</th>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $user) : ?>
                            <tr>
                                <td><?= $user->username ?></td>
                                <td><?= $user->password ?></td>
                                <td><?= $user->status ?></td>
                                <td><?= $user->profile ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="row justify-content-around">
                <div class="col-4">
                    <h3>Realizar la transacción:</h3>
                    <a href="/t1" class="btn btn-primary">Realizar</a>
                </div>
            </div>
        </div>
    </div>
</body>