
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <?php echo __('ユーザー登録をしてください。'); ?>
        <?php 
	        echo $this->Form->input('username');
	        echo $this->Form->input('password');
	        echo $this->Form->input('user_type', array(
	            'options' => array('model' => 'Model', 'stylist' => 'Stylist')
	        ));
    	?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>