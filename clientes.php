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
        
        <?php
        
        $lista = ClienteDAO::getClientes();
         
        if( $lista->count() == 0 ){
            echo '<h2><b>Nenhum cliente cadastrado</b></h2>';
        }  else {
            

          
        ?>
        
        <table border="1">
            <tr>
                <th>Código</th>
                <th>Foto</th>
                <th>Nome do Cliente</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Cidade</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            
           <?php
            
            foreach ($lista as $cliente) {  
            ?>
            <tr>
                <td><?php echo $cliente->getId();?></td>
                <td> 
                    <img src="fotos_clientes/<?php echo $cliente->getFoto(); ?>" 
                         width="50px"  /> </td>
                <td><?php echo $cliente->getNome(); ?></td>
                <td><?php echo $cliente->getCpf(); ?></td>
                <td><?php echo $cliente->getTelefone(); ?></td>
                <td><?php echo $cliente->getEmail(); ?></td>
                <td><?php echo $cliente->getCidade()->getNome(); ?></td>
                <td> <a href="frmCliente.php?editar&idCliente=<?php echo $cliente->getId(); ?>"><button>Editar</button></a>  </td>
                <td> <a href="controller/salvarCliente.php?excluir&idCliente=<?php echo $cliente->getId(); ?>"><button>Excluir</button></a> </td>
            </tr>
            <?php  
            }
            ?>
           
            
            
        </table>
        
       
        <?php
        }
        ?>
        
    </body>
</html>




