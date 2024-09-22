<?php
Class Posts{
	public function getAll() {
        $DB = new DataBase();
        $query = "SELECT * FROM images";
        $results = $DB->read($query);

        return $results;
 	}

    public function getOne($link) {
        $arr['link']=$link;
        $DB = new DataBase();
        $query = "SELECT * FROM images WHERE url_address=:link LIMIT 1";
        $results = $DB->read($query, $arr);

        return $results[0];
    }
}