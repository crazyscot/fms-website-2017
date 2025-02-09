<?php    
    // load up your config file
    //require_once("/Users/markogilvie/Documents/GitHub/fms-website/resources/config.php");
    require_once("../../resources/config.php");
     
    // require_once(TEMPLATES_PATH . "/fms-header.php");

    require_once(LIBRARY_PATH . "/templateFunctions.php");

    $content = file_get_contents('MidSouthU20.php');
    $seasons = getCompetitionSeasonList(realpath(dirname(__FILE__)));
     
    // Must pass in variables (as an array) to use in template
    $variables = array(
        'content' => $content,
        'seasons' => $seasons
    );
     
    renderLayoutWithContentFile("competition-body.php", $variables);
 
?>
