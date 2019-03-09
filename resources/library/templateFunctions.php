<?php
    require_once(realpath(dirname(__FILE__) . "/../config.php"));
 
    function renderLayoutWithContentFile($contentFile, $variables = array())
    {
        $contentFileFullPath = TEMPLATES_PATH . "/" . $contentFile;
     
        // making sure passed in variables are in scope of the template
        // each key in the $variables array will become a variable
        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }
     
        require_once(TEMPLATES_PATH . "/fms-header.php");
     
        echo "<div id=\"container\">\n"
           . "\t<div id=\"content\">\n";
     
        if (file_exists($contentFileFullPath)) {
            require_once($contentFileFullPath);
        } else {
            /*
                If the file isn't found the error can be handled in lots of ways.
                In this case we will just include an error template.
            */
            require_once(TEMPLATES_PATH . "/error.php");
        }
     
        // close content div
        echo "\t</div>\n";
     
        //require_once(TEMPLATES_PATH . "/rightPanel.php");
     
        // close container div
        echo "</div>\n";
     
        require_once(TEMPLATES_PATH . "/fms-footer.php");
    }

    function getCompetitionSeasonList($compDir){
        $season_dirs = scandir($compDir);
        $seasons_list = '';
        foreach ($season_dirs as $season_dir) {
            if (is_dir($season_dir) and ((int)$season_dir = $season_dir) ) {
              $seasons_list = $seasons_list . '<li><a href="./' . $season_dir . '">' . $season_dir . '</a></li>';            
            }
        }
        $seasons = "<h2>Seasons</h2>
            <ul>". 
            $seasons_list . "
            </ul>
            ";
        return $seasons;
    }
?>