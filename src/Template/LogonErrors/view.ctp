<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Logon Error'), ['action' => 'edit', $logonError->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Logon Error'), ['action' => 'delete', $logonError->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logonError->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Logon Errors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Logon Error'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logonErrors view large-9 medium-8 columns content">
    <h3><?= h($logonError->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ip Address') ?></th>
            <td><?= h($logonError->ip_address) ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($logonError->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($logonError->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($logonError->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($logonError->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Request') ?></h4>
        <?= $this->Text->autoParagraph(h($logonError->request)); ?>
    </div>
</div>
