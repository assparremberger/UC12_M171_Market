<?php

/**
 * Description of clsClienteDAO
 *
 * @author assparremberger
 */

class ProdutoDAO {
    
    public static function inserir($produto){
        $sql = "INSERT INTO produtos "
                . " ( nome, foto, preco, quantidade, codCategoria ) VALUES "
                . " ( '".$produto->getNome()."' , "
                . "   '".$produto->getFoto()."' , "
                . "    ".$produto->getPreco()." , "
                . "    ".$produto->getQuantidade()." , "
                . "    ".$produto->getCategoria()->getId()."  "
                . "  ); ";
        
        Conexao::executar( $sql );
    }
    
    public static function editar($produto){
        $sql = "UPDATE produtos SET " 
                . " nome =      '".$produto->getNome()."' , "
                . " foto =      '".$produto->getFoto()."' , "
                . " preco =      ".$produto->getPreco()." , "
                . " quantidade = ".$produto->getQuantidade()." , "
                . " codCategoria =    ".$produto->getCategoria()->getId()."  "
                . " WHERE id = ".$produto->getId();
        
        Conexao::executar( $sql );
    }
    
    
    public static function excluir($cliente){
        $sql = "DELETE FROM produtos "
             . " WHERE id =  ".$cliente->getId();
        
        Conexao::executar( $sql );
    }
    
    public static function getProdutos(){
        $sql = " SELECT p.id, p.nome, p.foto, p.preco, p.quantidade, c.id, c.nome "
             . " FROM produtos p "
             . " INNER JOIN categorias c "
             . " ON p.codCategoria = c.id "
             . " ORDER BY p.nome ";
        
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        while( list( $cod, $nome, $foto, $preco, $qtd,$codCat, $nomeCat) = mysqli_fetch_row($result) ){
            $categoria = new Categoria();
            $categoria->setId( $codCat );
            $categoria->setNome( $nomeCat );
            
            $produto = new Produto();
            $produto->setId($cod);
            $produto->setNome($nome);
            $produto->setFoto($foto);
            $produto->setPreco($preco);
            $produto->setQuantidade($qtd);
            $produto->setCategoria($categoria);
           
  
            $lista->append($produto);
        }
        
        return $lista;
    }
    
    
   public static function getProdutoById( $id ){
         $sql = " SELECT p.id, p.nome, p.foto, p.preco, p.quantidade, c.id, c.nome "
             . " FROM produtos p "
             . " INNER JOIN categorias c "
             . " ON p.codCategoria = c.id "
             . " WHERE p.id = ".$id ;
        
        $result = Conexao::consultar($sql);
      
        list( $cod, $nome, $foto, $preco, $qtd,$codCat, $nomeCat) = mysqli_fetch_row($result);
            $categoria = new Categoria();
            $categoria->setId( $codCat );
            $categoria->setNome( $nomeCat );
            
            $produto = new Produto();
            $produto->setId($cod);
            $produto->setNome($nome);
            $produto->setFoto($foto);
            $produto->setPreco($preco);
            $produto->setQuantidade($qtd);
            $produto->setCategoria($categoria);
            
        return $produto;
    }
  
    
   
    
}












