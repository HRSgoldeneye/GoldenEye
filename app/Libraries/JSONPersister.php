<?php

namespace App\Libraries;

use Illuminate\Support\Facades\DB;


class JSONPersister {


    public static function persist() {

        $jsonFile = file_get_contents('resources/hrscurrent.json');
                $php_object = json_decode($jsonFile);
                //print_r($php_object[0]);
                 //DB::table('divisions')
                foreach($php_object as $divisionObject) {
                     $divId = DB::table('divisions')->insertGetId(
                    ['division_name' => $divisionObject->name]
                     );
                    foreach($divisionObject->titles as $titleObject) {
                        $titleId = DB::table('titles')->insertGetId(
                            ['division_id' => $divId, 'title_name' => $titleObject->name]
                        );
                        foreach($titleObject->chapters as $chapterObject) {
                            $statuteId = DB::table('statutes')->insertGetId(
                                ['title_id' => $titleId,
                                    'statute_number' => $chapterObject->number,
                                    'repealed' => $chapterObject->repealed,
                                    'statute_text' => $chapterObject->text]
                            );
                            if (property_exists($chapterObject, 'sections')) {
                                foreach($chapterObject->sections as $sectionObject){
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
                }

    }
}

?>