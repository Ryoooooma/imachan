    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User', array('action' => 'login')); ?>

    <?php echo $this->Form->input('username', array('label' => 'お名前')); ?>
    <?php echo $this->Form->input('password', array('label' => 'パスワード')); ?>

    <?php echo $this->Form->end('Login'); ?>
