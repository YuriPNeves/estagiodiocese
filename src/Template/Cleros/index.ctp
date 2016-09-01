<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Clero'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cleros index large-9 medium-8 columns content">
    <h3><?= __('Cleros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('imagem') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('funcao') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cleros as $clero): ?>
            <tr>
                <td><?= $this->Number->format($clero->id) ?></td>
                <td><?= h($clero->imagem) ?></td>
                <td><?= h($clero->nome) ?></td>
                <td><?= h($clero->funcao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $clero->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clero->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clero->id)]) ?>
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
