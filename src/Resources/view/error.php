<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$type;?> :: Metallike Exception Handler</title>
</head>
<body>
    <pre>
        <?=$type;?>: <strong>"<?=$message;?>"</strong> in <em><?=$file;?></em> on line <strong><?=$line;?></strong>
    </pre>

    <?php

    foreach ($trace as $debug) {
        echo $debug['file'] . '<br><br>';
    }

    ?>
</body>
</html>