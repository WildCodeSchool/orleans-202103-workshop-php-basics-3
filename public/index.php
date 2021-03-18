<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once "../src/function.php"; ?>
    <h1><?php echo sayHello(); ?></h1>
    <p><?php echo whoAmI("Ozymandias", $watchmen); ?></p>
    <p><?php echo whoAmI("Bibi", $watchmen); ?></p>
</body>
</html>
