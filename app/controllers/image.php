<?php

class Image extends Controller {
    function index($link = '') {
        if ($link == "") {
            $data['page_title'] = "Image not found!";
            $this->view("a/not_found", $data);
        } else {
            $posts = $this->loadModel("posts");
            $result = $posts->getOne($link);

            // Check if the post exists
            if ($result) {
                $data['posts'] = $result;
                $data['page_title'] = "Image";
                $this->view("a/image", $data);
            } else {
                $data['page_title'] = "Image not found!";
                $this->view("a/not_found", $data);
            }
        }
    }
}
