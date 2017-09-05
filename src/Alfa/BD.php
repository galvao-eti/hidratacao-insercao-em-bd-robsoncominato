<?php

namespace Alfa;

class BD {

    public function dbConect() {
        $dsn = 'mysql:dbname=alfa_pos_2017;host=localhost';       
        $dbn = new \PDO($dsn, 'root', '');
        return $dbn;
    }

}