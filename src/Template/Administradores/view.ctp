<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administradore'), ['action' => 'edit', $administradore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administradore'), ['action' => 'delete', $administradore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Administradores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administradore'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administradores view large-9 medium-8 columns content">
    <h3><?= h($administradore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($administradore->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($administradore->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($administradore->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($administradore->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nivel Acesso') ?></h4>
        <?= $this->Text->autoParagraph(h($administradore->nivel_acesso)); ?>
    </div>
</div>
