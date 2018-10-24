<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Market M171 - Cidades</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Cidades</h1>
        
        <br><br><br>
        
        <form action="controller/salvarCidades.php" method="GET" >
            <label>Nome: </label>
            <input type="text" name="txtNome" />
            <input type="submit" value="Salvar"
        </form>
        
    </body>
</html>
