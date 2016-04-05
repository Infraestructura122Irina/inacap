
<h1>Lista de usuarios</h1>
<a href="nuevo">Nuevo usuario</a></>
    <br>
    <br>
<table border="1">
    <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    </thead>
 
    <tbody>
        <?php foreach ($usuario as $data) { ?>
        <tr>
            <td> <?php echo $data->nombre;?> </td>
                <td> <?php echo $data->apepat;?> </td>
                <td><a href="<?php echo'delete/'.$data->usuario_id;?>">Eliminar</a></td>
                <td><a href="<?php echo'usuario_detail/'.$data->usuario_id;?>">Ver Detalle</a></td>
           
        </tr>
            <?php } ?>
    </tbody>
</table>

