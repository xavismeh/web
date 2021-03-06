<?php

// Initialisation
ob_start();
session_start();

require_once dirname(__FILE__).'/../../sources/Afup/fonctions.php';

// Configuration
require_once dirname(__FILE__).'/../../sources/Afup/AFUP_Configuration.php';
$conf = new AFUP_Configuration(dirname(__FILE__).'/../../configs/application/config.php');
$GLOBALS['AFUP_CONF'] = $conf;
error_reporting($conf->obtenir('divers|niveau_erreur'));
ini_set('display_errors', $conf->obtenir('divers|afficher_erreurs'));
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . dirname(__FILE__).'/../../dependencies/PEAR/' . PATH_SEPARATOR . dirname(__FILE__).'/../../dependencies/');
header('Content-type: text/html; charset=UTF-8');

// On détermine sur quel sous-site on est
$serveur   = "";
$url = $_SERVER['REQUEST_URI'];
if (strrpos($url, '?') !== false) {
	$position = strrpos($url, '?');
	$url      = substr($url, 0, $position);
}
$position  = strrpos($url, '/');
$url       = substr($_SERVER['REQUEST_URI'], 0, $position);
$parties   = explode('/', $url);
$sous_site = array_pop($parties);
if (empty($sous_site) and strpos($_SERVER['HTTP_HOST'], "planete") !== false) {
	$sous_site = "planete";
	$serveur = "http://afup.org";
}

// Initialisation de Smarty
require_once dirname(__FILE__).'/../../dependencies/smarty/Smarty.class.php';
$smarty = new Smarty;
$smarty->template_dir  = array(dirname(__FILE__).'/../../htdocs/templates/' . $sous_site . '/',
                               dirname(__FILE__).'/../../htdocs/templates/commun/');
$smarty->compile_dir   = dirname(__FILE__).'/../../htdocs/cache/templates';
$smarty->compile_id    = $sous_site;
$smarty->use_sub_dirs  = true;
$smarty->check_compile = true;
$smarty->php_handling  = SMARTY_PHP_ALLOW;
$smarty->assign('url_base', 'http://' . $_SERVER['HTTP_HOST'] . '/');
$smarty->assign('chemin_template', $serveur.$conf->obtenir('web|path').'templates/' . $sous_site . '/');
$smarty->assign('chemin_javascript', $serveur.$conf->obtenir('web|path').'javascript/');

// Initialisation de la couche d'abstraction de la base de données
require_once dirname(__FILE__).'/../../sources/Afup/AFUP_Base_De_Donnees.php';
$bdd = new AFUP_Base_De_Donnees($conf->obtenir('bdd|hote'),
                                $conf->obtenir('bdd|base'),
                                $conf->obtenir('bdd|utilisateur'),
                                $conf->obtenir('bdd|mot_de_passe'));
$bdd->executer("SET NAMES 'utf8'");

// Inclusion de la classe permettant l envoi de mail
require_once dirname(__FILE__).'/../../sources/Afup/AFUP_Mailing.php';