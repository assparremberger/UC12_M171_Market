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
        
        <form action="controller/salvarCidade.php?inserir" method="POST" >
            <label>Nome: </label>
            <input type="text" name="txtNome" />
            <input type="submit" value="Salvar" />
        </form>
        
        <hr>
        
        <table border="1">
            <tr>
                <th>Código</th>
                <th>Nome da Cidade</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            
            <tr>
                <td>01</td>
                <td>Porto Alegre</td>
                <td> <button>Editar</button> </td>
                <td> <button>Excluir</button> </td>
            </tr>
            
            <tr>
                <td>02</td>
                <td>Viamão</td>
                <td> <button>Editar</button> </td>
                <td> <button>Excluir</button> </td>
            </tr>
            
        </table>
        
    </body>
</html>
