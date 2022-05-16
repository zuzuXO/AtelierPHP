<?php $chaine="enta eeeeihhhh mech kifeya alik tefra7ni";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/litera/bootstrap.css">
</head>
<body>
    <table class="table">
    <tr>
        <th>caractere</th>
        <th>nombre d'occurence</th>
    </tr>
    <?php
        foreach(count_chars($chaine,1) as $char=>$nbreOcc){?>
    <tr>
        <td><?= chr($char); ?></td>
        <td><?= $nbreOcc; ?></td>
        
    </tr><?php } ?> 
    </table>
</body>
</html>
