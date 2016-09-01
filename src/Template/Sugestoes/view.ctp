<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sugesto'), ['action' => 'edit', $sugesto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sugesto'), ['action' => 'delete', $sugesto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sugesto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sugestoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sugesto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sugestoes view large-9 medium-8 columns content">
    <h3><?= h($sugesto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Sugestao') ?></th>
            <td><?= h($sugesto->sugestao) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($sugesto->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($sugesto->id) ?></td>
        </tr>
    </table>
</div>
