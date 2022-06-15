<?php
    session_start();
    include_once "../../login/Cl/DBclass.php";
    $outgoing_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM usuarios WHERE NOT id_usuario = {$outgoing_id} ORDER BY id_usuario DESC";
    $query = mysqli_query($con, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No hay usuarios disponibles para chatear.";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>