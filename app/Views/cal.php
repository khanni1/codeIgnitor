<?php
$a = $a ?? null;
$b = $b ?? null;
$ans = $ans ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/cal" method="post">
        
       a :  <input type="number" step="0.1" name="a" value="<?= $a; ?>"><br>
       b :  <input type="number" step="0.1" name="b" value="<?= $b; ?>"><br>
       <button type="submit" name="sub" value="+">+</button><br>
       <button type="submit" name="sub" value="-">-</button><br>
       <button type="submit" name="sub" value="*">*</button><br>
       <button type="submit" name="sub" value="/">/</button><br>
    </form>

    <?= $ans; ?>

</body>
</html>