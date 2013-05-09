<div class="users login">
    <?php
        echo $this->Form->create();
        echo $this->Form->input('user_name', array('default' => 'Username'));
        echo $this->Form->input('password', array('default' => 'Password'));
        echo $this->Form->end(array('label' => 'Login' , 'div' => array('class' => 'btn btn-info login-submit clear-submit')));
    ?>
</div>