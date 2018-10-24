<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Market M171 - Clientes</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Clientes</h1>
        
        <br><br><br>
        
        <a href="frmCliente.php">
            <button>Cadastrar novo cliente</button></a>
        
        <br><br>
        
        <table border="1">
            <tr>
                <th>Código</th>
                <th>Nome do Cliente</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Cidade</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            
            <tr>
                <td>01</td>
                <td>João da Silva</td>
                <td>111.222.333-44</td>
                <td>(51) 98765-4321</td>
                <td>Porto Alegre</td>
                <td> <button>Editar</button> </td>
                <td> <button>Excluir</button> </td>
            </tr>
        </table>
        
    </body>
</html>




