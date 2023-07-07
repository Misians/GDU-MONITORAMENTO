<?php
require 'config.php';
$lista = [];
$sql = $pdo->query("SELECT * FROM post");
if($sql->rowCount() > 0)
{
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<?php 

?>
<head>
    <link href="./style.css" rel="stylesheet">
</head>
<body>
    <h2>DEMANDAS - UERN</h2>
    <div class="dashboard">
        <?php foreach($lista as $demanda):
            ?>
        <a href="">
        <div class="quadrado">
            <p class="tittle"><?=$demanda['responsavel'] ?></p>
            <p class="duvida"><?=$demanda['conteudo']?></p>
            <label class="check">Concluido
                <input type="checkbox" id="mycheck">
                </label>
                <div class="infos">
                    <div class="setor">
                        <p>Setor Eventos</p>
                        
                    </div>
                    <div class="responsavel">
                            <p>AK</p>
                        </div>
                </div>
                
            
            
        </div>
    </a>
        <?php endforeach; ?>
    </div>
</body>