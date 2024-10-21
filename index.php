<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="assets/css/normalize.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Project.PHP</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <?php echo "<div id='titre'><h1>Projects.</h1><img src='assets/img/PHP-logo.svg.png' alt='logo php' class='logo-php'></div>" ?>

                <form action="" method="POST">
                    <h2>Enregister un site :</h2>
                    <input type="text" name="name" placeholder="Nom" required>
                    <input type="text" name="url" placeholder="URL" required>
                    <input type="submit" value="Ajouté">
                </form>
            </div>
        </nav>
    </header>

    <main>

        <h2>Vos Projets :</h2>

        <section name="projects-list" class="projects-list">

            <?php
            $scandir = scandir("project");
            foreach ($scandir as $fichier) {
                if ($fichier !== '.' && $fichier !== '..' && is_dir("project/$fichier")) {
                    echo "<div class='project container'>";
                    echo "<div><h2>$fichier</h2></div>";
                    echo "<div class='button'><a href='project/$fichier'>Acceder</a></div>";
                    echo "</div>";
                }
            }
            ?>
        </section>

        <hr>

        <h2>Sites enregistrés :</h2>

        <section name="registered-sites" class="registered-sites">

            <?php

            $jsonFile = 'assets/data/data.json';

            if (file_exists($jsonFile)) {
                $jsonData = file_get_contents($jsonFile);
                $data = json_decode($jsonData, true);
                if (!empty($data)) {
                    foreach ($data as $site) {
                        echo "<div class='site container'>";
                        echo "<h2>" . htmlspecialchars($site['name']) . "</h2>";
                        echo "<a href='" . htmlspecialchars($site['url']) . "'>Acceder</a>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Aucun site enregistré.</p>";
                }
            } else {
                echo "<p>Le fichier de données n'existe pas.</p>";
            }

            ?>
        </section>

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>