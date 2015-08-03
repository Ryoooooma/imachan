<?php
class Post extends AppModel {
    public $validate = array(
        'body' => array(
            'rule' => 'notEmpty'
        )

    );
}
?>