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
        foreach ($scandir as $fichier) {
            if ($fichier !== '.' && $fichier !== '..' && is_dir("project/$fichier")) {
                echo "<div class='project'>";
                echo "<div><h2>$fichier</h2></div>";
                echo "<div class='button'><a href='project/$fichier'>Acceder</a></div>";
                echo "</div>";
            }
        }
        ?>
    </div>

    <hr>

    <h2>Sites enregistrés</h2>

    <div class="registered-sites">
        <?php
        $jsonFile = 'assets/data/data.json';
        if (file_exists($jsonFile)) {
            $jsonData = file_get_contents($jsonFile);
            $data = json_decode($jsonData, true);
            if (!empty($data)) {
                foreach ($data as $site) {
                    echo "<div class='site'>";
                    echo "<h2>" . htmlspecialchars($site['name']) . "</h2>";
                    echo "<a href='" . htmlspecialchars($site['url']) . "'>" . htmlspecialchars($site['url']) . "</a>";
                    echo "</div>";
                }
            } else {
                echo "<p>Aucun site enregistré.</p>";
            }
        } else {
            echo "<p>Le fichier de données n'existe pas.</p>";
        }
        ?>
    </div>

    <hr class="form-hr">

    <form action="" method="POST">
        <h2>Ajouté un site</h2>
        <input type="text" name="name" placeholder="Nom" required>
        <input type="text" name="url" placeholder="URL" required>
        <input type="submit" value="Ajouté">
    </form>

    <hr class="form-hr">

</main>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $url = $_POST['url'];
    $formData = array(
        'name' => $name,
        'url' => $url
    );
    if (file_exists($jsonFile)) {
        $jsonData = file_get_contents($jsonFile);
        $data = json_decode($jsonData, true);
    } else {
        $data = array();
    }
    $data[] = $formData;
    $newJsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($jsonFile, $newJsonData);
}
?>
</body>

</html>
