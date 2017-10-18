<?php



    function current_page($uri = "/") {
        /* This is used to get the "active" page and highlight it properly in the sidebar */
        return strstr(request()->path(), $uri);
    }

    function persistObject($object) {
        return 0;

    }

     function getJson() {
        $jsonFile = file_get_contents('resources/hrscurrent.json');
        $php_object = json_decode($jsonFile);
        foreach($php_object as $object) {
            foreach( )
        }
        echo $php_object;
        //$jsonFile = file_get_contents('hrscurrent.json', true, true);
//
//        $php_object2 = json_decode($jsonFile, true);
//        return $php_object;
//        var_dump($php_object);
//       return print_r($php_object, true);

        //var_dump($php_object2);
    //        foreach($object as $php_object) {
    //            persistObject($object);
    //        }
    }
?>