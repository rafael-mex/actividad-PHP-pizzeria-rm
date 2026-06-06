<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>PizzaPlaneta | Confirmación</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-left">
            <?php
                $imgs = [
                    "it" => "img/banderas/it.png",
                    "mx" => "img/banderas/mx.png",  
                    "fr" => "img/banderas/fr.png",
                    "ar" => "img/banderas/ar.png",
                ];
                $pais = $_POST ["pais"];
                echo "<img src='" . $imgs[$pais] . "' class='flag-icon'> " ;
            ?>  
            <!--<img src="img/banderas/mx.png" class="flag-icon">-->
            <h1>PizzaPlaneta</h1>
        </div>
        <div class="nav-right">
            <div class="profile-section">
                <img src="img/perfil_default.jpg" alt="Perfil" class="profile-pic">
                <label for="foto_perfil" class="btn-editar">Editar Perfil</label>
                <input type="file" name="foto_perfil" id="ipt-foto_perfil" accept="image/png, image/jpeg" class="hidden-input">
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 50px;">
        <header class="form-header">
            <h2>¡Pedido Recibido!</h2>
        </header>

        <div class="resumen-pedido" style="background: #f8f9fa; padding: 20px; border-left: 5px solid #e63946; border-radius: 5px;">
            <h3>Resumen de tu Orden:</h3>
            
            <!-- Aquí va el PHP para mostrar los datos recibidos -->
            <?php
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $cantidad_pizzas = $_POST['cantidad_pizzas'];
            $tipo_pizza = $_POST['tipo_pizza'];
            $picante = $_POST['picante'];
            $fecha = $_POST['fecha_entrega'];
            $color = $_POST['color_caja'];
            $tamano = $_POST["tamano"];
            $extras = $_POST['extras'];
            $instrucciones_de_entrega = $_POST['instrucciones']; 
            $pais = $_POST['pais']; 
            
            echo "<p>Pais: $pais</p>";
            echo "<p>Tu nombre: $nombre</p>";
            echo "<p>Correo: $correo</p>";
            echo "<p>Cantidad de Pizzas: $cantidad_pizzas</p>";     
            echo "<p>Tipo de Pizza: $tipo_pizza</p>";
            echo "<p>Nivel de picante: $picante</p>";
            echo "<p>Fecha de Entrega: $fecha</p>";
            echo "<p>Color de la caja de entrega: $color</p>";
            echo "<p>Tamaño de pizza: $tamano</p>";
            //ar_dump ($extras);
            echo "<p>Extras:</p>";
            echo "<ul>";
            foreach($extras as $extra) {
                echo "
                <li>$extra</li>";
            }
            echo "</ul>";
            echo "<p>Instrucciones de Entrega: $instrucciones_de_entrega</p>";        
            
            ?>
        </div>
        
        <br>
        <a href="index.html" class="btn-submit" style="text-align: center; display: block; text-decoration: none; margin-top: 20px;">Hacer otro pedido</a>
    </div>
</body>
</html>