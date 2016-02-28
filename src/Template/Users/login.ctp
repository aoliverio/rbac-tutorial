<div class="content">
    <div class="users form large-4 medium-6">
        <?= $this->Flash->render('auth') ?>
        <?= $this->Form->create() ?>
        <fieldset>
            <legend><?= __('Please enter your username and password') ?></legend>
            <?= $this->Form->input('email') ?>
            <?= $this->Form->input('password') ?>
            <hr/>
            <?= $this->Form->button(__('Login')); ?>
        </fieldset>
        <?= $this->Form->end() ?>
    </div>
</div>