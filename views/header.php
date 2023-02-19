<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav class="menu">
            <div>
                <img src="assets/images/goodNews2.pdf.png" alt="logo">
            </div>
            <ul>
                <?php foreach ($menu as $categorie) { ?>
                    <li>
                        <a href="?p=categorie&id=<?= $categorie['id_categories'] ?>"> <?= $categorie['nom'] ?></a>
                    </li>
                <?php } ?>
                <li>
                    <a href="?p=connexion" title='connexion'>Connexion</a>
                </li>
                <li>
                    <a href="?p=inscription" title='inscription'>Inscription</a>
                </li>
            </ul>
        </nav>
    </header>