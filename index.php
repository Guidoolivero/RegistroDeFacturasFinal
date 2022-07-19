<?php
include("registrar.php");
?>
<?php
include("includes/header.php");
?>
<?php
include("includes/footer.php");
?>


<div class="col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Numero_Cliente</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Numero de Factura</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM datos";
            $result = mysqli_query($conex, $query);

            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td> <?php echo $row['id'] ?> </td>
                    <td> <?php echo $row['Numero_Cliente'] ?> </td>
                    <td> <?php echo $row['nombre'] ?> </td>
                    <td> <?php echo $row['apellido'] ?> </td>
                    <td> <?php echo $row['Fact_Numero'] ?> </td>
                    <td> <?php echo $row['Fecha_Reg'] ?> </td>
                    <td>
                        <a href="delete.php?id=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="4" y1="7" x2="20" y2="7" />
                                <line x1="10" y1="11" x2="10" y2="17" />
                                <line x1="14" y1="11" x2="14" y2="17" />
                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                            </svg></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>