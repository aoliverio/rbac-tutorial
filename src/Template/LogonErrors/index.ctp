<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Logon Error'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logonErrors index large-9 medium-8 columns content">
    <h3><?= __('Logon Errors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('ip_address') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logonErrors as $logonError): ?>
            <tr>
                <td><?= $this->Number->format($logonError->id) ?></td>
                <td><?= h($logonError->ip_address) ?></td>
                <td><?= h($logonError->username) ?></td>
                <td><?= h($logonError->password) ?></td>
                <td><?= h($logonError->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $logonError->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logonError->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $logonError->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logonError->id)]) ?>
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
