<?php
class UserRecruitPost extends AppModel{


	public $actsAs = array('Search.Searchable');

	public $filterArgs = array(
			'keyword' => array('type'=>'like','field'=>array('UserRecruitPost.cut_content')),
		);


    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}
