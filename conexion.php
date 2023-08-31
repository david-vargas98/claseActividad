<?php
    try{
        #Conexión
        $conexion = new PDO("mysql:host=localhost;dbname=formulariophp", "edgar", "servidores");
        #Establece el modo de manejo de errores en modo excepción, lo que significa que si ocurre algún error en las consultas, PDO lanzará una excepción que podrás capturar y manejar de manera adecuada.
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully!";
    } catch (PDOException $e){
        #Mensaje de error
        echo "Connection failed: ". $e->getMessage();
    }
?>