<?php
/**
 * Description of clsCidadeDAO
 *
 * @author assparremberger
 * 26/10/2018
 */

class CategoriaDAO {
    
    public static function inserir( $cidade ){
        $sql = "INSERT INTO categorias ( nome ) VALUES "
                . " ( '".$cidade->getNome()."' ); ";
        Conexao::executar($sql);
        
    }
    
    public static function editar( $cidade ){
        $sql =    "UPDATE categorias SET "
                . " nome = '".$cidade->getNome()."' "
                . " WHERE id = ".$cidade->getId();
        Conexao::executar($sql);
        
    }
    public static function excluir( $idCidade ){
        $sql =    "DELETE FROM categorias "
                . " WHERE id = ".$idCidade;
        Conexao::executar($sql);
        
    }
    
    public static function getCategorias(){
        $sql = "SELECT id, nome FROM categorias ORDER BY nome";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if( $result != NULL ){
            while( list($_id, $_nome) = mysqli_fetch_row($result) ){
                $categoria = new Categoria();
                $categoria->setId($_id);
                $categoria->setNome($_nome);
                $lista->append($categoria);
            }
        }
        return $lista;
    }
    
    
}











