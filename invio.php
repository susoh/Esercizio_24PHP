<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mittente = $_POST['sender'];
        $destinatario = $_POST['recipient'];
        $oggetto = $_POST['subject'];
        $corpo = $_POST['message'];
        echo "<h1> MAIL CREATA </h1><br><h3>Informazioni</h3><br>";
        echo "<div style='background-color: lightblue';>
            <p>$mittente</p>
            <p>$destinatario</p>
            <p>$oggetto</p></div>";
        echo "<h3>Corpo della mail:</h3><div style='background-color: orange; margin: 50% ';>
            <p>$corpo</p>
        </div>";
    ?>
</body>
</html>