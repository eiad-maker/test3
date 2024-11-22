<?php $username="Eyad" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page | <?php echo $username ?></title>
</head>
<body>
    <div>Welcome <?php echo $username ?></div>
    <div><?php echo $username ?> You sored 1000 points</div>
    <div>
        <?php include("score.php") ?>
    </div>
</body>
</html>