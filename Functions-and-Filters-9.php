<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $games = [
                [
                    'name' => 'Spider-Man',
                    'releaseDate' => '2015',
                    'rating' => '9.3',
                    'purchaseLink' => 'http://Spider-Man.com',
                ],
                [
                    'name' => 'Resident-Evil',
                    'releaseDate' => '2019',
                    'rating' => '9.8',
                    'purchaseLink' => 'http://Resident-Evil.com',
                ],
                [
                    'name' => 'Control',
                    'releaseDate' => '2021',
                    'rating' => '8.5',
                    'purchaseLink' => 'http://Control.com',
                ],
            ];
            function filterByReleaseDate($games , $releaseDate) {
                foreach($games as $game) {
                    if ($game['releaseDate'] === $releaseDate) {
                        $filteredGames[] = $game;
                    };
                };
                return $filteredGames;
            };
        ?>

            <h2>
                <?php foreach(filterByReleaseDate($games,'2019') as $game): ?>
                    <ul>
                        <li>
                            <?= $game['name'] .' '. $game['releaseDate'] ?>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </h2>
    </body>
</html>