<?php

class News extends Model{

    public function __construct(){

        $this->table = 'clubkit_news';
        parent::__construct();
    }

    public function getNews(){

        $allNews = array();

        $result = $this->db->query('SELECT * FROM clubkit_news');

        while($news = $result->fetch_assoc()){

            $allNews[] = $news;
        }

        return $allNews;
    }
}