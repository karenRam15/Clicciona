<?php
    while($row = mysqli_fetch_assoc($query)){
        echo $sql2 = "SELECT * FROM messages WHERE (incoming_message = {$row['id_usuario']}
                OR outgoing_message = {$row['id_usuario']}) AND (outgoing_message = {$outgoing_id} 
                OR incoming_message = {$outgoing_id}) ORDER BY id_messages DESC LIMIT 1";
        $query2 = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['message'] : $result ="No hay mensajes disponibles";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_message'])){
            ($outgoing_id == $row2['outgoing_message']) ? $you = "Tú: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] == "Desconectado ahora") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['id_usuario']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat.php?user_id='. $row['id_usuario'] .'">
                    <div class="content">
                    <img src="vistas/imagen.php?id='. $row['id_usuario'].'" width="20">
                    <div class="details">
                        <span>'. $row['primer_nombre']. " " . $row['apellido_p'] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
    }
?>