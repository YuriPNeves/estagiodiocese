<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Clero'), ['action' => 'edit', $clero->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clero'), ['action' => 'delete', $clero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clero->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cleros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clero'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cleros view large-9 medium-8 columns content">
    <h3><?= h($clero->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Imagem') ?></th>
            <td><?= h($clero->imagem) ?></td>
        </tr>
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($clero->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Funcao') ?></th>
            <td><?= h($clero->funcao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($clero->id) ?></td>
        </tr>
    </table>
</div>
