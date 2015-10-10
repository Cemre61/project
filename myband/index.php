<?php

include 'views/functions.php';
// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

$templateParser->display('head.tpl');

$templateParser->display('header.tpl');

$action = (empty($_GET['action'])) ? '' : $_GET['action'];

switch ($action) {

    case 'news':
        //leest page_nr uit
        $page_nr = isset($_GET['page_nr']) ? $_GET['page_nr'] : 1 ;
        
        require 'models/select_newsarticles.php';
        $templateParser->assign('data', $result);
        $templateParser->display('newsarticles.tpl');
        $templateParser->display('footer.tpl');
    
        break;
    
    case 'search':
        //read out search field
        $search_string = isset($_POST['search_string']) ? $_POST['search_string'] : "";

        //echo $search_string;
        //search database for search(model)
        
        require 'models/search_articles.php';
    
        //print_r($search_result);
        //display result
    
        $templateParser->assign('data', $search_result);
        $templateParser->display('search_result.tpl');
        $templateParser->display('footer.tpl');
    
         break;

    case 'calendar':
        include 'views/calendar.php';
        $templateParser->display('footer.tpl');
        break;
    case 'contact':

        include 'views/contact.php';
        $templateParser->display('footer.tpl');
        break;

    case 'about':

        include 'views/about.php';
        $templateParser->display('footer.tpl');
        break;
    
    default:
    
    include 'views/home.php';
    $templateParser->display('footer.tpl');  
}
?>

