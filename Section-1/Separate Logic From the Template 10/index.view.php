<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>
            <?php foreach($filteredGames as $game): ?>
                <ul>
                    <li>
                        <a href="<?php $game['purchaseLink']?>"> <?= $game['name'] . ' - ' . $game['rating'] ?> </a>
                    </li>
                </ul>
            <?php endforeach; ?>
        </h2>
    </body>
</html>