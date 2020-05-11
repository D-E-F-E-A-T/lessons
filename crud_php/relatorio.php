<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Relatorio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Relatório dos Estudantes</h2>
                    </div>
                    <?php
                    // Incluir arquivo de configuração
                    require_once "config.php";
                    
                    // Tentativa de selecionar a execução da consulta
                    $sql = "SELECT * FROM empregados";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>CODIGO</th>";
                                        echo "<th>NOME</th>";
                                        echo "<th>DISCIPLINA</th>";
                                        echo "<th>AV1</th>";
                                        echo "<th>AV2</th>";
                                        echo "<th>AV3</th>";
                                        echo "<th>MÉDIA</th>";
                                        echo "<th>CONCEITO</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['nome'] . "</td>";
                                        echo "<td>" . $row['disciplina'] . "</td>";
                                        echo "<td>" . $row['av1'] . "</td>";
                                        echo "<td>" . $row['av2'] . "</td>";
                                        echo "<td>" . $row['av3'] . "</td>";
                                        echo "<td>" . $row['media'] . "</td>";
                                        echo "<td>" . $row['conceito'] . "</td>";
                                        
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>Não há dados para serem apresentados.</em></p>";
                        }
                    } else{
                        echo "ERRO: Não foi possível executar $sql. " . mysqli_error($link);
                    }
 
                    // Fecha conexão
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>