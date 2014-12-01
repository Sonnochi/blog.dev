
<!DOCTYPE html>
<html>
<head>
    <title>Go! Dice Roll!</title>
</head>
<body>
    <h1>Roll Dice</h1>
    <p>You guessed a <?=$guess?> </p>
    <p>You rolled a <?=$roll?> </p>
    
    <? if ($roll == $guess): ?>
        <p>Good job! Great guess!</p>
    <?endif;?>
</body>
</html>
