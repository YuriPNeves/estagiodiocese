<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movimento'), ['action' => 'edit', $movimento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movimento'), ['action' => 'delete', $movimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movimentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movimento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="movimentos view large-9 medium-8 columns content">
    <h3><?= h($movimento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($movimento->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Coordenador') ?></th>
            <td><?= h($movimento->coordenador) ?></td>
        </tr>
        <tr>
            <th><?= __('Atividades') ?></th>
            <td><?= h($movimento->atividades) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($movimento->id) ?></td>
        </tr>
    </table>
</div>
