<?php
if(isset($_POST["cpfValidateSubmit"])) {
    //print_r($_POST);
    $message = "Mensagem de validação";
    header('Refresh:1');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida CPF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.1/css/bulma.min.css">
    <style>
        h1 {
            margin-top: 5%;
        }
        figure {
            margin: 5% auto;
        }
    </style>
</head>

<body>
    <div class="columns is-mobile">
        <div class="column is-half is-offset-one-quarter">
            <h1 class="title">Validar CPF</h1>
            <figure class="image is-128x128">
                <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
            </figure>
            <?php
                if (isset($message)) {
                    echo '<div class="notification">'.$message.'</div>';
                }
            ?>
            <form action="cpf.php" method="post">
                <div class="field">
                    <label class="label">Digite o CPF</label>
                    <div class="control">
                        <input name="cpf" class="input" type="number" placeholder="CPF (somente números)">
                    </div>
                    <br>
                    <div class="control">
                        <button name="cpfValidateSubmit" type="submit"
                            class="button is-primary is-fullwidth">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
