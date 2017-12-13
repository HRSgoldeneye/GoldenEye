<?php

namespace App;

class UserActivityManager{


    public static function viewPage($page_name){
        UserActivityManager::activity('Viewed Page: ' . $page_name, 'URL: ' . url()->current());
    }

}

