<?php

class Home extends Controller {
    function index() {
        $data['page_title'] = "Home";
        $posts = $this->loadModel("posts");
        $data['posts'] = $posts->getAll();

        $this->view("a/index", $data);
    }
}
