<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo do Bilhão</title>
</head>
<body>
    <p>Este é meu primeiro site me php</p>

    <?php
        $arq = fopen('Perguntas.txt', 'r');
        while ($linha = fgets($arq)){
            if ()
        }
        $conteudo = fread($arq, filesize('Perguntas.txt'));
        fclose($arq);
        echo $conteudo;
        echo "Este é o meu site";
    ?>
</body>
</html>