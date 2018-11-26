<?php


/**
 * Description of clsCliente
 *
 * @author assparremberger
 * 25/10/2018
 */
class Produto {
    private $id, $nome, $preco, $quantidade, $categoria, $foto;
    
    function __construct(){
    }
    
    

        
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getPreco() {
        return $this->preco;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getCategoria() {
        return $this->categoria;
    }

   

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

   
    function getFoto() {
        return $this->foto;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }



    

}











