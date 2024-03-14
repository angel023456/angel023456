<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
    <body>
        <div class="container mt-5">
        <h1>Introduzca los datos del nuevo pedido</h1>
        <form action= "10_inserta_pedidos.php" method = "post">
            <div class="form-group">
                <?php
                    $host = "localhost";
                    $user = "phpmyadmin";
                    $pass = "phpmyadmin";
                    $database = "panaderia";
            
                    //Conectando
                    $con = new mysqli($host, $user, $pass, $database);
                    //Selecciono la base de datos
                    mysqli_select_db($con, "panaderia");
                    //Creo la sentencia
                    $consultar="SELECT id_canciones FROM panes";
                    //Ejecuto la sentencia
                    $registros=mysqli_query($con,$consultar);	
                    echo "<label for='seleccionar'>Elige un tipo:</label>";
                    echo "<select name='seleccionar' id='seleccionar' class='form-control'>";
                    while($registro=mysqli_fetch_row($registros)){
                        
                        echo "<option value='$registro[0]'>".$registro[0] ."</option>";
                        
                    }
                    echo "</select>";
                ?>
            </div>
            <div class="form-group">
                <label for="canciones">canciones</label>
                <input type ="text" class="form-control" name="cantidad" id="cantidad" placeholder="Introduzca un cantidad"/>
            </div>
            <div class="form-group">
                <label for="compositor">compositor:</label>
                <input type ="text" class="form-control" name="compositor" id="compositor" placeholder="compositor"/>
            </div>
            <button type="submit" class="btn btn-primary">Insertar</button>
            <button type ="reset" class="btn btn-primary">Restablecer</button>
        </form>
        </div>
    </body>
</html>