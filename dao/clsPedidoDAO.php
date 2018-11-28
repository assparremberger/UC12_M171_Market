<?php

/**
 * Description of clsPedidoDAO
 *
 * @author assparremberger
 */
class PedidoDAO {
    
    public static function inserir( $pedido ){
        $sql = " INSERT INTO pedidos "
             . " (pagamento, endereco, horario, codCliente) "
             . " VALUES ( "
             . " '".$pedido->getPagamento()       ."' , "
             . " '".$pedido->getEndereco()        ."' , "
             . " '".$pedido->getHorario()         ."' , "
             . "  ".$pedido->getCliente()->getId()."  ) ";
        
        $idPedido = Conexao::executarComRetornoId($sql);
        return $idPedido;
    }
            
    
    
}





