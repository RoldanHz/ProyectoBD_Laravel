<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Servicios Extra</h2>
            
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Dueño</th>
                    <th>Teléfono</th>
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Horarios</th>
                    <th>Precios</th>  
                </thead>
                <tbody>
                <?php foreach ($servicios as $servicio): ?>
                    <tr>
                        <td><?= $servicio->name?></td>
                        <td><?= $servicio->typese?></td>
                        <td><?= $servicio->owner?></td>
                        <td><?= $servicio->phone?></td>
                        <td><?= $servicio->street?></td>
                        <td><?= $servicio->neighborhood?></td>
                        <td><?= $servicio->hours?></td>
                        <td><?= $servicio->price?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
