<?php

App::uses('Controller', 'Controller');

/**
 * Class AppController
 */
class PostsController extends AppController {


    public function index() {
        $Posts = $this->Post->find('all');
        $this->set(compact('Posts'));
    }

}
