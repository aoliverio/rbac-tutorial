<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Audit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="audits index large-9 medium-8 columns content">
    <h3><?= __('Audits') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('session_key') ?></th>
                <th><?= $this->Paginator->sort('ip_address') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($audits as $audit): ?>
            <tr>
                <td><?= $this->Number->format($audit->id) ?></td>
                <td><?= $audit->has('user') ? $this->Html->link($audit->user->name, ['controller' => 'Users', 'action' => 'view', $audit->user->id]) : '' ?></td>
                <td><?= h($audit->session_key) ?></td>
                <td><?= h($audit->ip_address) ?></td>
                <td><?= h($audit->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $audit->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $audit->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $audit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $audit->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
