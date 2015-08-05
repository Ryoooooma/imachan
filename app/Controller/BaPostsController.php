<?php
class BaPostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');

    public function index() {
        $this->set('baposts', $this->BaPost->find('all'));
    }

    public function view($id) {
 if (!$id) {
    throw new NotFoundException(__('Invalid bapost'));
    }

    $bapost = $this->BaPost->findById($id);
    if (!$bapost) {
         throw new NotFoundException(__('Invalid bapost'));
    }
     $this->set('bapost', $bapost);
    }

    public function add() {
    if ($this->request->is('post')) {
    $this->BaPost->create();
    if ($this->BaPost->save($this->request->data)) {
        $this->Session->setFlash(__('Your post has been saved.'));
        return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to add your post.'));
        }
        }

    public function edit($id = null) {
    if (!$id) {
    throw new NotFoundException(__('Invalid bapost'));
    }

    $bapost = $this->BaPost->findById($id);
    if (!$post) {
    throw new NotFoundException(__('Invalid bapost'));
    }

    if ($this->request->is(array('bapost', 'baput'))) {
    $this->BaPost->id = $id;
    if ($this->BaPost->save($this->request->data)) {
        $this->Session->setFlash(__('Your post has been updated.'));
        return $this->redirect(array('action' => 'index'));
    }
    $this->Session->setFlash(__('Unable to update your post.'));
    }

     if (!$this->request->data) {
    $this->request->data = $bapost;
    }
    }

    public function delete($id) {
      if ($this->request->is('get')) {
      throw new MethodNotAllowedException();
    }

    if ($this->BaPost->delete($id)) {
    $this->Session->setFlash(
               __('The post with id: %s has been deleted.', h($id))
     );
 } else {
    $this->Session->setFlash(
                __('The post with id: %s could not be deleted.', h($id))
    );
    }

    return $this->redirect(array('action' => 'index'));
}
}

?>