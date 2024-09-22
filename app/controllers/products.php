<?php

class Products extends Controller {
    function index() {
        $data['page_title'] = "Products";
        $uploader = $this->loadModel("posts");
        $data['posts'] = $uploader->getAll();

        $this->view("a/products", $data);
    }

    function image() {
        $user = $this->loadModel("user");
        if (!$result = $user->checklogin()) {
            header("Location: " . ROOT . "signin");
            die;
        }
        if (isset($_POST["title"]) && isset($_FILES['file'])) {
            $uploader = $this->loadModel("upload");
            $uploader->upload($_POST, $_FILES);
        }
    }
}

