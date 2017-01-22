<?php

include_once('modele/connection_sql.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'inscription')
{
    include_once('vue/espace_membres/inscription.php');
}
?>