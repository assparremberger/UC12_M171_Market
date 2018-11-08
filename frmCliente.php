<?php
    include_once 'model/clsCidade.php';
    include_once 'dao/clsCidadeDAO.php';
    include_once 'dao/clsConexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Market M171 - Cadastrar Cliente</title>
    </head>
    <body>
        <?php
            require_once 'menu.php';
        ?>
        
         <h1 align="center">Cadastrar Cliente</h1>
        
        <br><br><br>
        
        <form action="controller/salvarCliente.php?inserir" method="POST" 
              enctype="multipart/form-data">
            <label>Nome: </label>
            <input type="text" name="txtNome" required maxlength="100" /> <br><br>
            <label>Telefone: </label>
            <input type="text" name="txtTelefone" maxlength="30" /> <br><br>
            <label>E-mail: </label>
            <input type="email" name="txtEmail" required /> <br><br>
            
            <label>CPF: </label>
            <input type="text" name="txtCPF" required /> <br><br>
            
            <label>Cidade: </label>
            <select name="cidade" >
                <option value="0">Selecione...</option>
                
                <?php
                    $lista = CidadeDAO::getCidades();
                    
                    foreach ($lista as $cid){
                        echo '<option value="'.$cid->getId().'" >'.
                                $cid->getNome().'</option>';
                    }
                ?>
                
            </select>
            
            <br><br>
            <label>Sexo: </label>
            <input type="radio" name="rbSexo" value="f" required /> Feminino 
            <input type="radio" name="rbSexo" value="m" /> Masculino <br><br>
            <input type="checkbox" name="cbFilhos" /> Tem Filhos <br><br>
            <label>Foto: </label>
            <input type="file" name="foto" /> <br><br>
            
            <label>Senha: </label>
            <input type="password" name="txtSenha" required maxlength="100"  /> <br><br>
            <label>Confirme sua Senha: </label>
            <input type="password" name="txtSenhaConfirma" required maxlength="100" /> <br>
            <br><br>
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
            
            
        </form>
        
        
    </body>
</html>
