<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageTitle; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet"> 
</head>
<body>
    <main>
        <img src="img/logga.svg" class="logga" alt="Du kan tyvärr inte se dänna magnifika loggan">
            <p>
                <?= $story['body'] ?>
            </p>

        <ul>
            <?php foreach ($links as $link): ?>
                <li>
                    <a href="?id=<?= $link['target_id'] ?>">
                        <?= $link['description'] ?></li>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </main>
</body>
</html>