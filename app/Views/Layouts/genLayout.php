<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_ENV['APP_NAME']?> — <?=htmlspecialchars($View)?></title>
    <link rel="stylesheet" href="../public/src/output.css">
</head>
<body>
 
    <?php include __DIR__.'/src/header.php';?>
    <?php include __DIR__."/../{$View}.php";?>
    <?php include __DIR__.'/src/footer.php';?>
</body>
</html>
