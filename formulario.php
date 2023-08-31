<!-- Título: Práctica de HTML5 y CSS - Alumno: Edgar David Vargas Fuentes - Sección: D13 - Asignatura: Programación para internet -->
<!DOCTYPE html>
<html lang="es"> <!-- Idioma español -->
<head>
    <meta charset="UTF-8"> <!-- Codificación UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario.html</title> <!-- Título para mostrar en pestaña/ventana de navegador -->
    <link rel="stylesheet" href="style.css"> <!-- Archivo de css a utilizar -->
</head>
<body>
    <header> <!-- Encabezado principal-->
        <h1>Contacto</h1>
    </header>
    <main> <!-- Contenido principal-->
        <form action="" method="post"> <!-- action se puede dejar en blanco o pasar el nombre del mismo archivo-->
            <label for="nombrePersona">Nombre:</label> <!-- for debe coincidir con id del input-->
            <input type="text" name="nombrePersona" id="nombrePersona" placeholder="Nombre completo" required> <br>

            <label for="correo">Correo:</label> <!-- for debe coincidir con id del input-->
            <input type="email" name="correo" id="correo" placeholder="Correo electrónico" required> <br>

            <label for="genero">Género:</label> <!-- for debe coincidir con id del input--> <br>
            
            <div class="genero">
                <input type="radio" name="genero" id="masculino" value="masculino" required>
                <label for="masculino">Masculino</label>
                <input type="radio" name="genero" id="femenino" required>
                <label for="femenino">Femenino</label>
            </div>
            <br>
            <label for="contrasena">Contraseña:</label> <!-- for debe coincidir con id del input-->
            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required> <br>

            <label for="comentarios">Comentarios:</label> <br> <!-- for debe coincidir con id del input-->
            <textarea name="comentarios" id="comentarios" cols="30" rows="10" placeholder="Escribe un comentario..."></textarea> <br>

            <label for="ciudad">Ciudad:</label> <!-- for debe coincidir con id del input-->
            <select name="ciudad" id="ciudad" required> <!-- etiqueta para despliegue de opciones-->
                <option class="cursiva" value="" disabled selected>Seleccione una ciudad</option> <!-- Opciones en menú desplegable -->
                <option value="Guadalajara">Guadalajara</option> <!-- Opciones en el menú desplegable -->
                <option value="Tonala">Tonalá</option>
                <option value="Zapopan">Zapopan</option>
                <option value="Otro">Otro</option>
            </select> <br>

            <label for="">
                <input type="checkbox" name="contratar" id="contratar">Me interesa contratarte
            </label> <br>

            <button type="submit">Enviar formulario</button>
        </form>
    </main>
    <div class="nav">
        <a href="index.html">Index.html</a>
        <a href="formulario.html">Formulario.html</a>
        <a href="clase.html">Clase BootStrap</a>
    </div>
    <?php
	    echo "<h2> Hola mundo usando PHP </h2>";
    
	    if(!empty($_POST['nombrePersona']) && !empty($_POST['correo']))
	    {
	      echo "El nombre es: ". $_POST['nombrePersona']. "<br>";
	      echo "El correo es: ". $_POST['correo']. "<br>";
	    }
	    else
	    {
	      echo "<h3>Faltan datos, may</h3>";
	    }
    ?>
</body>
</html>