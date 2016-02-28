<div class="content">
    <h4>Role-Based Access Controll</h4>
    <ul>
        <li><a href="<?= $this->Url->build('/users') ?>"><?= __('Users') ?></a></li>
        <li><a href="<?= $this->Url->build('/roles') ?>"><?= __('Roles') ?></a></li>
        <li><a href="<?= $this->Url->build('/permissions') ?>"><?= __('Permissions') ?></a></li>
        <li><a href="<?= $this->Url->build('/objects') ?>"><?= __('Objectes') ?></a></li>
        <li><a href="<?= $this->Url->build('/operations') ?>"><?= __('Operations') ?></a></li>
    </ul>
    <h4>Audit</h4>
    <ul>
        <li><a href="<?= $this->Url->build('/audits') ?>"><?= __('Audits') ?></a></li>
        <li><a href="<?= $this->Url->build('/logon-errors') ?>"><?= __('Logon errors') ?></a></li>
    </ul>
</div>
