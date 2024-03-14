<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



        //Recojo variables
        $canciones = $_POST['seleccionar'];
        $usuario = $_POST['dni'];
        $fecha = $_POST['fecha'];

        //Me conecto
			$host = "localhost";
			$user = "phpmyadmin";
			$pass = "phpmyadmin";
			$database = "panaderia";

        //Conectando
        $con = new mysqli($host, $user, $pass, $database);

        //Verificar conexion
        if (!$con) {
            die("Conexion fallida" . $con->connect_error);
        }
        
        //Selecciono la base de datos
        mysqli_select_db($con, "panaderia");

        //Preparo las consultas para obtener los id de pan y cliente
        $ususarios = "SELECT id_usuarios FROM usuario WHERE nombre = '$usuario'";
        $consultacanciones = "SELECT id_canciones FROM canciones WHERE nombre = '$canciones'";
        
        //Consulto y recojo el valor del array de consulta, en una variable
        $usuario = mysqli_query($con, $consupan);
        if (!$usuario) {
            die("Error al ejecutar la consulta de canciones: " . mysqli_error($con));
        }
        while ($id = mysqli_fetch_row($canciones)) {
            $canciones = $id_canciones[0];
        }

        $clientes = mysqli_query($con, $consucliente);
        if (!$clientes) {
            die("Error al ejecutar la consulta de usuarios: " . mysqli_error($con));
        }
        while ($id_usuarios = mysqli_fetch_row($usuario)) {
            $cliente_id = $id_cliente[0];
        }
        
        //Preparo la variable de fecha para que tenga el formato adecuado
        $fecha = date('Y-m-d', strtotime($fecha));

        //Inserto en la base de datos
        $insert_pedido = "INSERT INTO compras
                        (id_usuario, id_canciones, fecha)
                        VALUES($usuario $id_canciones '$fecha');";

        //Verifico
        if ($result = mysqli_query($con, $insert_pedido)) {
            echo "<h3 class='center'>Pedido de " . $compras ." insertado correctamente."."<br/>"."</h3>";
                    
        } else {
            echo ("No ha sido posible registrar el pedido -> ". mysqli_error($con))."<br/>"."<br/>";
        }
    ?>


</body>
</html>