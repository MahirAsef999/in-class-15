<?php

require_once 'Model.php';

class Controller {
    public function index() {
        $postModel = new Model();
        $posts = $postModel->getPosts();
        header('Content-Type: application/json');
        echo json_encode($posts);
    }
}
