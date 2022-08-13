<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo"Dados obtidos:";
        echo "<br>";
        echo "<br>";
        echo "Nome: " . $_POST["nome"];
        echo "<br>";
        echo "E-mail: " . $_POST["email"];
        echo "<br>";
        echo "Assunto: " . $_POST["assunto"];
        echo "<br>";
        echo "Mensagem: " . $_POST["mensagem"];
    ?>
</body>
</html>