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
        <h2>Departamentos y arrendatarios</h2>
        <h3>Vista de apartamentos con información de sus arrendatarios</h3>
        <div class="row justify-content-center">
            <br><br>
            <div class="col-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>ID del Departamento</th>
                        <th>Número de cuartos</th>
                        <th>Número de baños</th>
                        <th>Número de piso</th>
                        <th>ID del Arrendatario</th>
                        <th>Nombre del Usuario</th>
                    </thead>
                    <tbody>
                        <?php foreach ($infoapartments as $infoapartment) : ?>
                            <tr>
                                <td><?= $infoapartment->id ?></td>
                                <td><?= $infoapartment->rooms ?></td>
                                <td><?= $infoapartment->bathrooms ?></td>
                                <td><?= $infoapartment->floor_p ?></td>
                                <td><?= $infoapartment->tenant ?></td>
                                <td><?= $infoapartment->username ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>