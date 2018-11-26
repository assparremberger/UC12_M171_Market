<?php
    session_start();
    include_once 'dao/clsConexao.php';
    include_once 'dao/clsProdutoDAO.php';
    include_once 'model/clsProduto.php';
    include_once 'model/clsCategoria.php';

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Market M171 - Carrinho de Compras</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
        <h1 align="center">Carrinho de Compras</h1>
        
        <?php
            if( !isset($_SESSION['carrinho']) || 
                    count( $_SESSION['carrinho'] ) == 0  ){
                echo '<h3>Seu carrinho está vazio!</h3>';
            } else {
                
            }
            
        
        ?>
    </body>
</html>








