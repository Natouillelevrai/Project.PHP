<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <title>Project.PHP</title>
</head>

<body>
    <header>
        <?php echo "<div id='titre'><h1>Projects.</h1><img src='assets/img/PHP-logo.svg.png' alt='logo php' class='logo-php'></div>" ?>

        <p>Bienvenue sur Projects.php</p>

        <a href="project">Mes Projet PHP</a>

    </header>

    <main>
        <div class="projects-list">

            <?php
            $scandir = scandir("project");
            foreach($scandir as $fichier){
                if($fichier !== '.' && $fichier !== '..') {
                    echo "<div class='project'>";
                    echo "<div><h2>$fichier</h2></div>";
                    echo "<div class='button'><a href='project/$fichier'>Acceder</a></div>";
                    echo "</div>";
                }
            }
            ?>
            
        </div>
    </main>

</body>

</html>