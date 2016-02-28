<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Audit'), ['action' => 'edit', $audit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Audit'), ['action' => 'delete', $audit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $audit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Audits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Audit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="audits view large-9 medium-8 columns content">
    <h3><?= h($audit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $audit->has('user') ? $this->Html->link($audit->user->name, ['controller' => 'Users', 'action' => 'view', $audit->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Session Key') ?></th>
            <td><?= h($audit->session_key) ?></td>
        </tr>
        <tr>
            <th><?= __('Ip Address') ?></th>
            <td><?= h($audit->ip_address) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($audit->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($audit->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Request') ?></h4>
        <?= $this->Text->autoParagraph(h($audit->request)); ?>
    </div>
</div>
