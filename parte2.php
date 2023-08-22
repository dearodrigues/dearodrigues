<?php 
     $opcao = filter_input(INPUT_POST, 'btnquero');
     session_start();
     if ($opcao == "Não quero informar meus dados"){
        $_SESSION["informa"]='0';
        header("Location: parte3.php");
        exit();
     }else{
        $_SESSION["informa"]='1';
     }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOUTDAH - Escolha como deseja continuar</title>
</head>
<body>
    <form action="parte3.php" method="post">
        <label for="txtnome">Nome Completo</label>
        <input type="text" name="txtnome" id="txtnome" maxlength="50" required><br>
        <label for="txtdtnascimento">Data de Nascimento</label>
        <input type="date" name="txtdtnascimento" id="txtdtnascimento" required><br>
        <label for="txtemail">E-mail</label>
        <input type="email" name="txtemail" id="txtemail" maxlength="150" required><br>
        <label for="txtcidade">Cidade</label>
        <input type="text" name="txtcidade" id="txtcidade" maxlength="150"><br>
        <label for="txtuf">UF</label>
        <select name="txtuf" id="txtuf" required>
            <option value="">Selecione</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espirito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MT">Mato Grosso</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
        </select><br>
        <label for="txtescola">Escola</label>
        <input type="text" name="txtescola" id="txtescola" maxlength="50" required><br>
        <label for="txtserie">Série</label>
        <input type="text" name="txtserie" id="txtserie" maxlength="50" required><br>
        
        <input type="submit" value="Enviar informações" name="btnenviar">
    </form>
</body>
</html>