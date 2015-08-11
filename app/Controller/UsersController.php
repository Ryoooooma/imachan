<?php
class UsersController extends AppController {
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public $helpers = array('Html', 'Form','Session');
    public $uses = array('User');


    public function index() {
        // ログインできているか、ログアウトできているかを確認するDebugコード
    	debug($this->Auth->user('id'));
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->request->data['User']['user_type'] == 'stylist') {
                $this->Session->write('User', $this->request->data['User']);

                $this->redirect(array('action' => 'add_stylist'));
            } else {
                $this->User->create();
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('ユーザー登録が完了しました'));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('ユーザー登録が完了しておりません。再度、ご登録お願い致します。'));
                }                
            }
        }
    }

    public function add_stylist() {
        debug($this->Session->read('User'));

        if ($this->request->is('post')) {
            
            $user=$this->Session->read('User');

            $this->request->data['User']['username'] = $user['username'];
            $this->request->data['User']['password'] = $user['password'];
            $this->request->data['User']['user_type'] = $user['user_type'];

            if ($this->User->save($this->request->data)) {
                        $this->Session->setFlash(__('ユーザー登録が完了しました'));
                        $this->redirect(array('action' => 'index'));
            } else {
                        $this->Session->setFlash(__('ユーザー登録が完了しておりません。再度、ご登録お願い致します。'));
            }  
        }              
    }


    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('入力された内容が正しくありません。再度ご入力ください。'));
            }
        }
    }


    public function logout() {
        $this->Auth->logout();
        $this->redirect('index');
    }


}