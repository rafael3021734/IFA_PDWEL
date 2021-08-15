<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sistema Crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="crud">
   <h3>Cadastro de Disco</h3>
    <form method="post" action="">
        <input name="id" type="text" placeholder="Numero do Id">
        <input name="tipo" type="text" placeholder="Tipo">
        <input name="cantor" type="text" placeholder="Nome do Cantor">
        <textarea name="descricao" placeholder="Descreva-se"></textarea>
        <button type="submit">Cadastrar</button>
    </form>
    <?php
     require('../IFA/Database.php');
     $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
     $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
     $cantor = filter_input(INPUT_POST, 'cantor', FILTER_SANITIZE_STRING);
     $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
     if(!empty($id)&& !empty($tipo) && !empty($cantor) && !empty($descricao)){
         $DataBase = new Database();
         $sql = "INSERT INTO disco SET id = :id, tipo = :tipo, cantor = :cantor, descricao = :descricao";
         $binds = ['id' => $id, 'tipo' => $tipo, 'cantor' => $cantor, 'descricao' => $descricao];
         $result = $DataBase->insert($sql, $binds);
         if($result){
             echo "<div class='success'>Cadastro foi um sucesso</div>";
         }else{
             echo "Ops, houve um erro no cadastro";
         }
     }



    ?>
</div>
</body>
</html>