
    <div class="users form">
    <?php echo $this->Form->create('User'); ?>
        <fieldset>
            <legend><?php echo __('ユーザー登録をしよう！'); ?></legend>
            <?php
                echo $this->Form->input('username');
                echo $this->Form->input('password');
                echo $this->Form->input('user_type', array(
                    'options' => array('model' => 'カットモデル', 'stylist' => 'スタイリスト')
                ));
            ?>
        </fieldset>
    <?php echo $this->Form->end(__('登録')); ?>
    </div>