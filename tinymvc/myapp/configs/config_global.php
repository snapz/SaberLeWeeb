<?php
 /* define the name of the website */
define('NAME', 'SaberLeWeeb');

/* define the url of the website (for the assets and redirection) */
define('BASE_URL', 'http://manga-saber.local/');

/* define if you use rewrite url or not (TRUE if you use, FALSE otherwise) */
define('REWRITE', false);

/* define the informations for MySQL */
define('DBHOST', '127.0.0.1');
define('DBNAME', 'manga_saber');
define('DBUSER', 'root');
define('DBPASS', '');

/* define the number of ticket to display per page */
define('TICKETS_PER_PAGE', 6);

/* token for allow using the api (in url) */
define('TOKEN_API', 'azerty');

define('USE_EXTERNAL_API', true);
define('EXTERNAL_API_URL', "http://manga-saber.local/external_api.php");
define('EXTERNAL_API_TOKEN', "azerty2");
?>