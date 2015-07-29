<?php
class UserRecruitPostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('userrecruitposts', $this->UserRecruitPost->find('all'));
    }
    public function check() { 
    	$this->set('userrecruitposts', $this->UserRecruitPost->find('all'));
    }

    public function posting() {  
        $this->set('userrecruitposts', $this->UserRecruitPost->find('all'));
    }    
    }


?>