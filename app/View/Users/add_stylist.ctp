
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <?php echo __('スタイリストの方は引き続き以下の情報を登録してください。'); ?>
        
        <?php echo '<br>'; ?>

        <?php 
            echo $this->Form->input('gender', array(
                'options' => array('男性' => '男性', '女性' => '女性')
            ));
	        echo $this->Form->input('phone');
	        echo $this->Form->input('email');
	        echo $this->Form->input('area_id', array(
	            'options' => array('sibuya' => '渋谷', 'sinjuku' => '新宿')
	        ));
	        echo $this->Form->input('address');
    	?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>