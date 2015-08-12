<?php
class UserRecruitPostsController extends AppController {

    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session', 'Search.Prg');


    public function index() {
        $this->set('userrecruitposts', $this->UserRecruitPost->find('all'));

        $this->Prg->commonProcess();
        $conditions = $this->UserRecruitPost->parseCriteria($this->passedArgs);
        
        $posts = $this->UserRecruitPost->find('all',array('conditions'=>$conditions));
        $this->set(compact('posts'));


        // passedArgsは引数とか全部とってくる関数

        // parseCriteriaがやっていることはモデルの
        // public $filterArgs = array(
        //             'keyword' => array('type'=>'like','field'=>array('Post.title','Post.body')),
        //         );の$filterArgsを使って、where句を使って最終的な文を作っている
        // →keyword = テスト（検索ワード）って文字がきた場合に、

        // コントローラーでまず処理をする
        // そのあとモデルで処理をする
        // そのあとSQLに変換して、最終的に表示する。


        // 簡単にゆうと
        // 要はフォームに入力された内容がGETでキャッチされて
        // その内容が、


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

    	$this->set('userrecruitposts', $UserRecruitPost);
        if ($this->request->is('post')) {

            
            $this->request->data['UserRecruitPost']['cut_content'] = $UserRecruitPost['cut_content'];

            $this->UserRecruitPost->create();
            if ($this->UserRecruitPost->save($UserRecruitPost)) {
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
         if ($this->request->is('post')) {

            $this->Session->write('UserRecruitPost',$this->request->data['UserRecruitPost']);
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