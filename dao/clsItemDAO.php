<?php

/**
 * Description of clsItemDAO
 *
 * @author assparremberger
 */
class ItemDAO {
    
    public static function inserir( $item ){
        $sql = " INSERT INTO itens "
             . " (codPedido, codProduto, preco, quantidade) "
             . " VALUES ( "
             . $item->getPedido()->getId()  . " , "
             . $item->getProduto()->getId() . " , "
             . $item->getPreco()            . " , "
             . $item->getQuantidade()       . "  ) ";
        Conexao::executar($sql);
    }
            
    
}
