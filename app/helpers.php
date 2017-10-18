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
        //print_r($php_object[0]);
         //DB::table('divisions')
        foreach($php_object as $divisionObject) {
             $divId = DB::table('divisions')->insertGetId(
            ['division_name' => $divisionObject->name]
             );
            foreach($divisionObject as $titleObject) {
                $titleId = DB::table('titles')->insertGetId(
                    ['division_id' => $divId, 'title_name' => $titleObject->name]
                );
                foreach($titleObject as $chapterObject) {
                    $statuteId = DB::table('statutes')->insertGetId(
                        ['title_id' => $titleId,
                            'statute_number' => $chapterObject->number,
                            'repealed' => $chapterObject->repealed,
                            'statute_text' => $chapterObject->text]
                    );
                    foreach($chapterObject as $sectionObject){
                        DB::table('sections')->insert(
                            ['statute_id' => $statuteId,
                                'section_name' => $sectionObject->name,
                                'section_number' => $sectionObject->number,
                                'text' => $sectionObject->text]
                        );
                    }
                }
            }
        }
        # should insert everything in the database?
        # return true;
    }
?>