<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
    $names = [
        [
            "name" => "Face",
            "role" => "actor"
        ],
        [
            "name" => "Sapura",
            "role" => "actress"
        ]
      ];
    ?>

    <?php foreach ($names as $name):?>
        <h4><?php echo $name["name"]; ?></h4>-
        <p><?php echo $name["role"]; ?></p><br>
    <?php endforeach;?>



</body>
</html>