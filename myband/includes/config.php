<?php 
// In dit bestand vind je alle instellingen, zoals databasegegevens.

// Voor de veiligheid zou dit bestand boven de webroot geplaatst moeten worden. 

// Definieer de status van het project
define('PROJECT_STATUS','development');

// Stel de instellingen in op Nederlands
setlocale(LC_ALL, 'nl_NL');

// databasegegevens
define('DB_HOST','127.0.0.1');
define('DB_NAME','18655_myband');
define('DB_USERNAME','18655_bandadm');
define('DB_PASSWORD','dbpass');


define('NR_ITEMS_PAGE',3);

?>
