
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <?php echo __('スタイリストの方は以下の情報を登録してください。'); ?>
        
        <?php echo '<br>'; ?>

        <?php 

        	$options = array('男性','女性');
        	$attributes = array("legend" => false, 'label'=> true);
        	echo $this->Form->radio('User.sex', $options, $attributes);

        	echo '<br>';

	        echo $this->Form->input('電話番号');
	        echo $this->Form->input('メールアドレス');
	        echo $this->Form->input('23区', array(
	            'options' => array('sibuya' => '渋谷', 'sinjuku' => '新宿')
	        ));
	        echo $this->Form->input('詳細住所');
    	?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>