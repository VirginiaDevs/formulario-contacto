<?php
    //Conexión
    $conn = mysqli_connect('localhost', 'root', '', 'contactos_db');

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    } 

    //Inserción de datos
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $asunto=$_POST['asunto'];
    $comentarios=$_POST['comentarios'];

    $sql= "INSERT INTO contactos(nombre, email, telefono, asunto, comentarios) 
            VALUES ('$nombre', '$email', '$telefono', '$asunto', '$comentarios')";

    echo mysqli_query($conn, $sql);
?>