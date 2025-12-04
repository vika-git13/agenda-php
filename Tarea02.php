<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tarea Unidad 2</title>
</head>
<body>

  <?php 
    session_start();
    if(!isset($_SESSION['agenda'])){ //Creamos una agenda vacía dentro de sesión.
            $_SESSION['agenda'] = array();
        }
        
        echo '<h1 style="text-align: center;">Agenda</h1>';

        if(isset($_POST['save'])){ //¿Se ha enviado el formulario?
            $nombre = trim($_POST['nombre']); //Tomamos los valores introducidos por usuario en formulario
            $telef = trim($_POST['telef']);

            if($nombre == ""){
                echo '<h2 style="text-align: center;">Introduce el nombre!</h2>';
            } elseif($nombre != "" && empty($telef)){
                if( array_key_exists($nombre,$_SESSION['agenda']) ){
                    unset($_SESSION['agenda'][$nombre]);
                    echo '<h2 style="text-align: center;">Contacto eliminado.</h2>';
                }
            } elseif( array_key_exists($nombre,$_SESSION['agenda']) && !empty($telef) ){
                $_SESSION['agenda'][$nombre] = $telef;
                echo '<h2 style="text-align: center;">Teléfono actualizado</h2>';
            } else {
                $_SESSION['agenda'][$nombre] = $telef;
            }
        }

        if (isset($_GET['vaciar'])) {
            $_SESSION['agenda'] = array(); // Vacía todo contenido de agenda
        }


        if(count($_SESSION['agenda']) > 0){
            echo "<fieldset>";
            echo "<h2>Contenido:</h2>";
            echo "<table>";
            echo "<tr><th>Nombre</th><th>   </th><th>Telefono</th></tr>";
            foreach ($_SESSION['agenda'] as $nombre => $telef) {
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>   </td>";
                echo "<td>$telef</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</fieldset>";
            echo '<fieldset><form method="GET"><button name="vaciar" value="1">Vaciar agenda</button></form></fieldset>';
        } 
  ?>

<fieldset>
    <label>Nuevo contacto: </label>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!--Al hacer clic en el botón de enviar, los datos se enviarán a la misma página.-->
        <table>
            <tr>
                <td><label for = name>Nombre: </label></td>
                <td><input type ="text" name="nombre" id="name"/></td>
            </tr>
            <tr>
                <td><label for = Telef>Telefono: </label></td>
                <td><input type ="text" name="telef" id="telef"/></td>
            </tr>
        </table>
        <button type="submit" name="save" id="save">Guardar</button>
        <button type="reset" name="delete">Limpiar</button>
    </form>
</fieldset>
</body>
</html>