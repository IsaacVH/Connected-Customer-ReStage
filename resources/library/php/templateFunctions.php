<?php
    require_once(realpath(dirname(__FILE__) . "/../../config.php"));

    function renderLayoutWithContentFile($pagesetup = array(), $variables = array())
    {
        // First, get modules
        $allmodules = json_decode(file_get_contents(MODULES_PATH."/../modules.json"), true);
        $modules = array();
        foreach($pagesetup["modules"] as $modulename => $module) {
            $modules[$modulename] = $allmodules[$modulename];
        }

        //$contentFileFullPath = PUBLIC_PATH . "/views/" . $pagesetup["file"];

        // making sure passed in variables are in scope of the template
        // each key in the $variables array will become a variable
        if (count($variables) > 0) {
            foreach ($variables as $key => $value) {
                if (strlen($key) > 0) {
                    ${$key} = $value;
                }
            }
        }

        // Load module functions.
        require_once(MODULES_PATH . "/../modules.php");

        // Load template data.
        $template = json_decode(file_get_contents(TEMPLATES_PATH."/".$pagesetup["template"]."/data.json"), true);

        // Put up header
        require_once(TEMPLATES_PATH . "/" . $pagesetup["template"] . "/layout/" . $pagesetup["header"] . ".php");

        echo "<div id=\"container\">\n"
           . "\t<div id=\"content\">\n";

           foreach($modules as $modname => $mod) {
                $modpath = MODULES_PATH . "/" . $mod["render"];
                if (file_exists($modpath)) {
                    $moduleFunctions[$modname]($pagesetup["modules"][$modname]);
                } else {
                    //  If the file isn't found the error can be handled in lots of ways.
                    //  In this case we will just include an error template.
                    require_once(TEMPLATES_PATH . "/" . $pagesetup["template"] . "/error.php");
                }
           }

        /*
        if (file_exists($contentFileFullPath)) {
            require_once($contentFileFullPath);
        } else {
            //  If the file isn't found the error can be handled in lots of ways.
            //  In this case we will just include an error template.
            require_once(TEMPLATES_PATH . "/" . $pagesetup["template"] . "/error.php");
        }
        */
     
        // close content div
        echo "\t</div>\n";
     
        // close container div
        echo "</div>\n";
     
        // Put up footer
        require_once(TEMPLATES_PATH . "/" . $pagesetup["template"] . "/layout/" . $pagesetup["footer"] . ".php");
    }
?>


