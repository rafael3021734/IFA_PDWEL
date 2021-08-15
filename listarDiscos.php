<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sistema Crud</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="crud">
   <h3>Lista de Discos</h3>
    <?php
    require('../IFA/Database.php');
    $DataBase = new Database();
    $sql = "SELECT * FROM disco WHERE id > :id";
    $binds = ['id' =>2];
    $result = $DataBase->SELECT($sql, $binds);
    if($result ->rowCount() >0){
        $dados = $result ->fetchAll(PDO::FETCH_OBJ);
        foreach ($dados as $item){
            echo "<div class='result'>";
            echo "Id : {$item->id} <br>";
            echo "Tipo : {$item->tipo} <br>";
            echo "Cantor : {$item->cantor} <br>";
            echo "descrição : {$item->descricao} <br>";
            echo "</div>";
        }
    }
    ?>
</div>
</body>
</html>