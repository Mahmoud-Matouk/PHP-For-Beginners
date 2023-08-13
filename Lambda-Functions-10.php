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
        
            /*
            function filter($items , $fn) {
                $filteredItems = [];
                foreach($items as $item) {
                    if ($fn($item)) {
                        $filteredItems[] = $item;
                    };
                };
                return $filteredItems;
            };
            */
        
            //? in this case we can use array_***** instead of creating a function that passes across the array
                $filteredGames = array_filter ($games , function ($game) {
                    return $game['releaseDate'] >= 1950 && $game['releaseDate'] <= 2020;
                });
            ?>

            <h2>
                <?php foreach($filteredGames as $game): ?>
                    <ul>
                        <li>
                            <?= $game['name'] . ' - ' . $game['rating'] ?>
                        </li>
                    </ul>
                <?php endforeach; ?>
            </h2>
    </body>
</html>