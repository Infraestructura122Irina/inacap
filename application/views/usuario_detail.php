
<h1>Lista de usuarios</h1> <br> <br>
<a href="usuario">Ver detalle</a></>
    <br>
    <br>
<table border="1">
    <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Acciones</th>
    </thead>
 
    <tbody>
        <?php foreach ($usuario as $data) { ?>
        <tr>
            <td> <?php echo $data->nombre;?> </td>
            <td> <?php echo $data->apepat;?> </td>
            
        </tr>
            <?php } ?>
    </tbody>
</table>

