<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Movimento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movimentos index large-9 medium-8 columns content">
    <h3><?= __('Movimentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('coordenador') ?></th>
                <th><?= $this->Paginator->sort('atividades') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movimentos as $movimento): ?>
            <tr>
                <td><?= $this->Number->format($movimento->id) ?></td>
                <td><?= h($movimento->nome) ?></td>
                <td><?= h($movimento->coordenador) ?></td>
                <td><?= h($movimento->atividades) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $movimento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movimento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimento->id)]) ?>
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
