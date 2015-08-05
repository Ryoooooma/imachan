<?php
class UserRecruitPostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('userrecruitposts', $this->UserRecruitPost->find('all'));
    }
    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid userrecruitposts'));
        }

        $post = $this->UserRecruitPost->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Invalid userrecruitposts'));
        }
        $this->set('userrecruitposts', $post);
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->UserRecruitPost->create();
            if ($this->UserRecruitPost->save($this->request->data)) {
                $this->Session->setFlash(__('Your userrecruitposts has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your userrecruitposts.'));
        }
    }
    
    public function check() { 
    	$this->set('userrecruitposts', $this->UserRecruitPost->find('all'));
    }
    
    public function sake() { 
        $this->set('userrecruitposts', $this->UserRecruitPost->find('all'));
    }
    

    public function posting() {  
        $this->set('userrecruitposts', $this->UserRecruitPost->find('all'));


    }    
}


?>