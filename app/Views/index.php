<?php
$name = $name ?? null;
$age = $age ?? null;
$v = $v ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enter name</title>
</head>
<body>
    <form method="post" action="/s">
        name : <input type="text" name="t1" value="<?= $name;?>">
        age : <input type="number" name="t2"  value="<?= $age;?>">
        <input type="hidden" name="v" type="number" value = "<?= $v; ?>">

        
        <button type="submit">ENTER</button>
    </form>

    <h1>name : <?= $name; ?></h1>
   <h2>age : <?= $age; ?> </h2>
   <h3>visits : <?= $v; ?> </h3>

</body>
</html>