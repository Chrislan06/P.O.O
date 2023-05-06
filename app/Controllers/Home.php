<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $teste = $db->query('SELECT * FROM teste')->getResultObject();

        foreach($teste as $t){
            echo $t->id . '<br>';
            echo $t->nome . '<br>';
            echo $t->email . '<br>';
        }
    }
}
