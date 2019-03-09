<?php    
    // load up your config file
    //require_once("/Users/markogilvie/Documents/GitHub/fms-website/resources/config.php");
    require_once("./resources/config.php");
     
    require_once(LIBRARY_PATH . "/templateFunctions.php");

    $content = file_get_contents('home_page.html');
     
    // Must pass in variables (as an array) to use in template
    $variables = array(
        'content' => $content
    );
     
    renderLayoutWithContentFile("home-body.php", $variables);
 
?>
