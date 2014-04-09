<?php
/**
 * Created by PhpStorm.
 * User: Austin
 * Date: 4/9/14
 * Time: 12:41 AM
 */

class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }

} 