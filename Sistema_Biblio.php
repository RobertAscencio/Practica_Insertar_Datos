<html>
    <body>
        <div>
          <center>
            <h1>Sistema Biblioteca</h1>
            <form action="procesa.php" method="POST">
                <label for="autor">Autor</label></br>
                <input type="text" maxlength="100" name="autor" id="autor">
                </br>
                </br>
                <label for="titulo">Titulo</label></br>
                <input type="text" maxlength="100" name="titulo" id="titulo">
                </br>
                </br>
                <label for="editorial">Editorial</label></br>
                <input type="text" maxlength="256" name="editorial" id="editorial">
                </br>
                </br>
                <label for="fecha">Fecha edicion</label></br>
                <input type="text" maxlength="256" name="fecha" id="fecha">
                </br>
                </br>
                <input type="submit" name="enviar" Value="Entrar">
              </center>
            </form>
        </div>
    </body>
</html>
