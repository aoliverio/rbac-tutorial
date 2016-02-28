<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $logonError->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $logonError->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Logon Errors'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="logonErrors form large-9 medium-8 columns content">
    <?= $this->Form->create($logonError) ?>
    <fieldset>
        <legend><?= __('Edit Logon Error') ?></legend>
        <?php
            echo $this->Form->input('ip_address');
            echo $this->Form->input('request');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
