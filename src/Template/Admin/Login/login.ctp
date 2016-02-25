<div class="login-box">
    <div class="login-logo">
        <p><strong><?= __('Admin Panel'); ?></strong></p>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg"><?= __('Sign in to start your session'); ?></p>

        <?= $this->Flash->render() ?>

        <?= $this->Form->create(); ?>

        <div class="form-group has-feedback">
            <?= $this->Form->input('email', ['class' => 'form-control', 'placeholder' => 'Email', 'label' => false]); ?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <?= $this->Form->input('password', ['class' => 'form-control', 'placeholder' => 'Password', 'label' => false]); ?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="row">
            <div class="col-xs-8">
                <div class="form-group iCheck-input">
                    <?= $this->Form->input('remember_me', ['type' => 'checkbox', 'class' => 'form-control']); ?>
                </div>
            </div>

            <div class="col-xs-4">
                <?= $this->Form->button('Sign In', ['class' => 'btn btn-primary btn-block btn-flat']); ?>
            </div>
        </div>

        <?= $this->Form->end(); ?>

        <?= $this->Html->link(__('I forgot my password'), []); ?>
    </div>
</div>
