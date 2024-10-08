<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="style.css" rel="stylesheet">

    <title>Init PHP</title>
</head>
<body>

<h1>PHP - SYNTAXE</h1>

<hr>

    <?php
    echo "<h2>Afficher du texte</h2>";
    ?>

    <p>L'affichage de texte en PHP ce fait avec les commande "echo" et "print"</p>

    <h3>Exemple : </h3>


<code class="single-line"><?php echo "&lt;?php echo 'hello world'?>"; ?></code>

     <p class="info">Retirer l'espace entre le "<" et le "?"</p>

<hr>

    <?php
    echo "<h2>Les variable</h2>";
    ?>

    <p>Les variables servent a stocker des données (du texte, des nombres, des liste, etc...) modifiables</p>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php 
    \$nomdevariable = 'ceci est une variable'
    echo '\$nomdevariable'
    ?>";
    ?>
</code>
</pre>

<p class="info">Retirer les espaces entre le "<", le "?" et le "$"</p>

<hr>

<?php
echo "<h2>Les Constantes et les Constantes Magique</h2>";
?>

<p>Les constante en PHP sont definis avec la fonction "DEFINE()", il faut specifié : </p>
<ul>
    <li>le nom de la constante</li>
    <li>la valeur de la constante</li>
</ul>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php 
    DEFINE('nomdelaconstante', 'valeur de la constantes')
    ?>";
    ?>
</code>
</pre>

<p class="info">Retirer l'espace entre le "<" et le "?"</p>

<p>Les constantes magiques sont des constantes prédéfinis, comme "__DIR__" qui donne le chemin vers le dossier ou se trouve la page</p>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php
    echo __DIR__;
    echo __FILE__;
    ?>"
    ?>
</code>
</pre>

<p class="info">Retirer l'espace entre le "<" et le "?"</p>

<hr>

<?php
echo "<h2>Les fonction</h2>";
?>

<p>Une fonction est un bout de code executable, definis par l'utilisateur </p>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php 
    function test(\$text) {
    echo '\$text;
    }
    
    test('hello world');
    ?>";
    ?>
</code>
</pre>

<p class="info">Retirer les espaces entre le "<", le "?" et le "$"</p>

<hr>


<?php
echo "<h2>Les Conditions</h2>";
?>

<p>Les varibles permete d'executer du code seulement si une condition est remplie, elle est declarée par la mot "if"</p>
<p>apres avoir declarée la conditions, on peut ajoutée un condition "else" qui s'execute si la condition n'est PAS remplie</p>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php 
    \$variable = 1;
    
    if(\$variable == 1) {
       echo 'la varible vaut 1';
    }
    
    else {
       echo 'la variable vaut autre choses que 1';
    };
    ?>";
    ?>
</code>
</pre>

<p class="info">Retirer les espaces entre le "<", le "?" et le "$"</p>

<hr>

<?php
echo "<h2>isset() et empty()</h2>";
?>

<p>"isset()" permet de verifier si une variable existe</p>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php 
    \$variable = 1;
    
    if(isset(\$variable)) {
       echo 'la varible existe';
    }
    
    else {
       echo 'la variable n'existe pas';
    };
    ?>";
    ?>
</code>
</pre>

<p class="info">Retirer les espaces entre le "<", le "?" et le "$"</p>

<p>"empty()" permet de verifier si une variable est vide</p>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php 
    \$variable = 1;
    
    if(empty(\$variable)) {
       echo 'la varible na aucune données';
    }
    
    else {
       echo 'la variable a des données';
    };
    ?>";
    ?>
</code>
</pre>

<p class="info">Retirer les espaces entre le "<", le "?" et le "$"</p>

<hr>

<?php
echo "<h2>Le switch</h2>";
?>

<p>le switch a la meme fonction qu'une variables mais est plus optimisée pour un choix entre plus de 2 options</p>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php

    \$couleur = 'rouge';
    
    switch (\$couleur) {
      case 'bleu':
        echo 'Vous aimez le bleu';
        break;
      case 'vert':
        echo 'Vous aimez le vert';
        break;
      case 'jaune':
        echo 'Vous aimez le jaune';
        break;
      default:
        echo 'Vous n\'aimez pas le bleu, le vert ni le jaune';
        break;
     }
     
     ?>";
    ?>
</code>
</pre>

<p class="info">Retirer les espaces entre le "<", le "?" et le "$"</p>

<hr>

<?php
echo "<h2>Les fonctions prédéfinies</h2>";
?>

<p>Les fonctions prédéfinie sont des fonction mis en place par le language</p>

<h4>strpos :</h4>
<p>strpos permet de chercher un caracteres préis dans une chaine de caracteres</p>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php
    \$email = 'merlin@edenschool.fr';
    echo strpos(\$email, '@');
    echo strpos(\$email, '@', 1);
    echo strpos(\$email, 'z');
    var_dump(strpos(\$email, 'z'));
    ?>";
    ?>
</code>
</pre>

<p class="info">Retirer les espaces entre le "<", le "?" et le "$"</p>

<h4>strlen :</h4>
<p>strlen permet de connaitre le nombre de caracteres du chaine de caracteres</p>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php
     \$phrase = 'Bonjour';
     echo strlen(\$phrase);
     echo strlen('€');
     echo mb_strlen('€', 'UTF-8');
    ?>";
    ?>
</code>
</pre>

<p class="info">Retirer les espaces entre le "<", le "?" et le "$"</p>

<h4>substr :</h4>
<p>substr permet de supprimer une partie d'une chaine de caractere, en specifiant la caractere de depare et le nombre a retirer</p>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php
     \$texte = 'Lorem ipsum, dolor sit amet.';
     echo substr(\$texte, 2, 3);
    ?>";
    ?>
</code>
</pre>

<p class="info">Retirer les espaces entre le "<", le "?" et le "$"</p>

<h4>trim :</h4>
<p>trim permet de supprimer les espace blanc d'une chaine de caractere</p>

<h3>Exemple : </h3>

<pre>
<code>
    <?php
    echo
    "&lt;?php
    \$msgAvecBlancs = '    Hello World    ';
    echo strlen(\$msgAvecBlancs);
    echo strlen(trim( msgAvecBlancs));
    echo \$msgAvecBlancs;
    ?>";
    ?>
</code>
</pre>

<p class="info">Retirer les espaces entre le "<", le "?" et le "$"</p>

<h4>die et exit :</h4>
<p>Die et Exit permete d'arreter un programme en renvoyant un message d'erreur</p>

<h3>Exemple : </h3>

<code class="single-line">
    <?php echo "&lt;?php die('Message d\'erreur'); ?>" ?>
</code>

<code class="single-line">
    <?php echo "&lt;?php exit('Message d\'erreur'); ?>" ?>
</code>


<p class="info">Retirer les espaces entre le "<", le "?" et le "$"</p>

<h4>date :</h4>
<p>date permet de recuperer la date actuel, cette fonction utilse des parametre pour choistir ce qui sera retourner</p>

<h3>Exemple : </h3>

<code class="single-line">
    <?php echo "&lt;?php echo date('D'); ?>" ?>
</code>

<code class="single-line">
    <?php echo "&lt;?php echo date('M'); ?>" ?>
</code>

<code class="single-line">
    <?php echo "&lt;?php echo date('Y'); ?>" ?>
</code>

<p class="info">Retirer l'espace entre le "<" et le "?"</p>

<hr>



</body>
</html>