<?php
//Controllare che la mail passata in GET sia ben formata e contenga un punto e una @. Se è corretta stampare un div che contenga 'OK', altrimenti che contenga "KO"
$emailUrl = $GET['email'];
echo strpos($emailUrl, '@');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if( strpos($emailUrl, '@') == true && strpos($emailUrl, '.') == true){ ?>
    <div>
        <?php echo 'ok'; ?>
    </div>
<?php } else{ ?>
    <div>
        <?php echo 'ko'; ?>
    </div>
<?php } ?>
</body>
</html>


