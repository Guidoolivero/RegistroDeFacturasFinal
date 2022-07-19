<?php
include("con_db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['Fact_Numero']) >= 1 && strlen($_POST['cliente']) >= 1) {
        $Numero_cliente = trim($_POST['cliente']);
        $name = trim($_POST['name']);
        $lastname = trim($_POST['lastname']);
        $Fact_Numero = trim($_POST['Fact_Numero']);
        $Fecha_Reg = date("d / m / y");
        $consulta = "INSERT INTO datos(Numero_Cliente, nombre, apellido, Fact_Numero, Fecha_Reg) VALUES ('$Numero_cliente ','$name','$lastname','$Fact_Numero','$Fecha_Reg')";
        $resultado = mysqli_query($conex, $consulta);
        
        if ($resultado) {
        ?>
            <h3 class="ok">Agregado</h3>
        <?php
        } else {
        ?>
            <h3 class="bad">Ups, ha ocurrido un error</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="bad">Por favor complete los campos</h3>
        <?php
    }
}
?>