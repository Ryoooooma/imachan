<?php
class BaPost extends AppModel {
    public $validate = array(
        'body' => array(
            'rule' => 'notEmpty'
        )

    );
}
?>