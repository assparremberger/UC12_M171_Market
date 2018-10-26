<?php
include_once '../model/clsCidade.php';
include_once '../dao/clsCidadeDAO.php';
include_once '../dao/clsConexao.php';


if( isset( $_REQUEST['inserir'] ) ){
    $cidade = new Cidade();
    $cidade->setNome( $_POST['txtNome']  );
    
    CidadeDAO::inserir($cidade);
    
    header("Location: ../cidades.php");
}

