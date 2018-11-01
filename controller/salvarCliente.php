<?php
include_once '../model/clsCliente.php';
include_once '../model/clsCidade.php';
include_once '../dao/clsClienteDAO.php';
include_once '../dao/clsConexao.php';

if( isset($_REQUEST['inserir']) ){
    $senha = $_POST['txtSenha'];
    $senhaConfirma = $_POST['txtSenhaConfirma'];
    
    if( $senha != $senhaConfirma){
        echo "<body onload='window.history.back();'>";
    }else{
    
        $cliente = new Cliente();
        $cliente->setNome( $_POST['txtNome'] );
        $cliente->setTelefone( $_POST['txtTelefone'] );
        $cliente->setEmail( $_POST['txtEmail'] );
        $cliente->setCpf( $_POST['txtCPF'] );
    }
    
}

