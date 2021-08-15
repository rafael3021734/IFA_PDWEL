<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sistema Crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="crud">
   <h3>Atualização de Disco</h3>    
    <?php
     require('../IFA/Database.php');
     $DataBase = new Database();
     $sql = "UPDATE disco SET descricao = :descricao WHERE id = :id";
     $binds = ['descricao'=>'Sertanejo e Forro', 'id'=>6];
     $result = $DataBase->update($sql, $binds);
     if($result){
     	echo"<div class='sucess'> Atualizado com sucesso </div>";
     }else{
     	echo "Não foi possivel fazer a atualização";
     }
    ?>
</div>
</body>
</html>