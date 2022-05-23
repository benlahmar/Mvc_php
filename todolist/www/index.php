<?php

// Exemple d'architecture MVC très simple en PHP

// Pour faire fonctionner ce projet chez vous, vous devez le placer sur
// sur un serveur Apache+PHP et éditer éventuellement la ligne "RewriteBase"
// du fichier .htaccess
//


// Ce fichier est le point d'entrée unique du projet
// La requête client se trouve dans le paramètre query
//
// echo $_GET["query"]; die();
//

define("ROOT", realpath(__dir__."/.."));

require_once(ROOT . "/app/kernel/Kernel.php");

Kernel::run();
