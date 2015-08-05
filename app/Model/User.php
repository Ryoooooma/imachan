<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
	public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new BlowfishPasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
}
	
    public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'お名前を入力してください'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'パスワードを入力してください'
            )
        ),
        'user_type' => array(
            'valid' => array(
                'rule' => array('inList', array('model', 'stylist')),
                'message' => '正しいユーザーを選択してください',
                'allowEmpty' => false
            )
        ),
        'phone' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => '電話番号を入力してください'
            )
        ),
        'email' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'メールアドレスを入力してください'
            )
        ),
        'address' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'ご住所を入力してください'
            )
        )
    );
}
?>