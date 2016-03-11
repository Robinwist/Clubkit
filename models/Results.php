<?php

class News extends Model{

    public function __construct(){

        $this->table = 'clubkit_results';
        parent::__construct();
    }

    public function getResults(){

        $allResults = array();

        $result = $this->db->query('SELECT * FROM clubkit_results');

        while($results = $result->fetch_assoc()){

            $allResults[] = $results;
        }

        return $allResults;
    }
}