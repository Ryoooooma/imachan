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

        $UserRecruitPost = $this->Session->read('UserRecruitPost');
        $image = $this->Session->read('image');


    	$this->set('userrecruitposts', $UserRecruitPost);
        if ($this->request->is('post')) {

            $this->request->data['UserRecruitPost'] = $UserRecruitPost;

            $this->request->data['UserRecruitPost']['cut_content'] = $UserRecruitPost['cut_content'];
             $this->request->data['UserRecruitPost']['picture'] = $image;

            $this->UserRecruitPost->create();
            if ($this->UserRecruitPost->save($this->request->data)) {
                $this->Session->setFlash(__('Your userrecruitposts has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your userrecruitposts.'));
        }
    }

    
    public function sake() { 
        $this->set('userrecruitposts', $this->UserRecruitPost->find('all'));
    }
    

    public function posting() {  
        $this->set('userrecruitposts', $this->UserRecruitPost->find('all'));
         if ($this->request->is('post'))
          {
            $image =date('YmdHis') . $_FILES['data']['name']['UserRecruitPost']['picture'];
            move_uploaded_file($_FILES['data']['tmp_name']['UserRecruitPost']['picture'], '/var/www/html/imachan/app/webroot/img/post_thumbnail/'.$image);

            $this->Session->write('UserRecruitPost',$this->request->data['UserRecruitPost']);
             $this->Session->write('image',$image);
            // debug($image);
            // debug($_FILES['data']['tmp_name']['UserRecruitPost']['picture']);
            // debug($_FILES);
            return $this->redirect(array('action' => 'check'));
            // $this->UserRecruitPost->create();
            // if ($this->UserRecruitPost->save($this->request->data)) {
            //     $this->Session->setFlash(__('Your userrecruitposts has been saved.'));
            //     return $this->redirect(array('action' => 'check'));
            // }
            // $this->Session->setFlash(__('Unable to add your userrecruitposts.'));
        }


    }    
}


?>