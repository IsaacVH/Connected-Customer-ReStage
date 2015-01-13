<?php
    require_once(realpath(dirname(__FILE__) . "/../../config.php"));

    function renderLayoutWithContentFile($pagesetup = array(), $variables = array())
    {
        $allmodules = json_decode(file_get_contents(TEMPLATES_PATH."/../modules.json"), true);
        $modules = array();
        foreach($pagesetup["modules"] as $module) {
            array_push($modules, $allmodules[$module]);
        }

        $contentFileFullPath = PUBLIC_PATH . "/views/" . $pagesetup["file"];
             
        // making sure passed in variables are in scope of the template
        // each key in the $variables array will become a variable
        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }
     
        require_once(TEMPLATES_PATH . "/" . $pagesetup["template"] . "/header.php");
     
        echo "<div id=\"container\">\n"
           . "\t<div id=\"content\">\n";
     
        if (file_exists($contentFileFullPath)) {
            require_once($contentFileFullPath);
        } else {
            /*
                If the file isn't found the error can be handled in lots of ways.
                In this case we will just include an error template.
            */
            require_once(TEMPLATES_PATH . "/" . $pagesetup["template"] . "/error.php");
        }
     
        // close content div
        echo "\t</div>\n";
     
        // close container div
        echo "</div>\n";
     
        require_once(TEMPLATES_PATH . "/" . $pagesetup["template"] . "/footer.php");
    }
?>