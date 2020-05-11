
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Insere dados</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Lançar Notas</h2>
                    </div>
                    <p>Preencha os campos abaixo para inserir as notas das provas realizadas pelo aluno</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group ">
                            <label>Escolha o Aluno</label>
                            <select name="baluno"> <br><br>
                               
                            <option value="bdisciplina">Aluno</option>
    </select>                
                        </div>
                        
                        <div class="form-group ">
                            <label>Escolha a Disciplina</label>
                            <select name="disciplina"> <br><br>
                               
                            <option value="Disciplina">Escolha a Disciplina</option>
    </select>      
                        </div>
                        <div class="form-group">
                            <label>Atividade 1</label>
                            <input type="text" name="a1" class="form-control">
                            
                        </div>
                        <div class="form-group">
                            <label>Atividade 2</label>
                            <input type="text" name="a2" class="form-control">
                            
                        </div>
                        <div class="form-group">
                            <label>Atividade 3</label>
                            <input type="text" name="a3" class="form-control">
                            
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Salvar Notas">
                        <a href="index.php" class="btn btn-default">Voltar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>