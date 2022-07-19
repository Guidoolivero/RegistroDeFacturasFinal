<?php
    include("con_db.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM datos WHERE id = $id";
        $result = mysqli_query($conex, $query);
        if (!$result) {
            die("Error");
        }
        header("Location: index.php");
    }

?>