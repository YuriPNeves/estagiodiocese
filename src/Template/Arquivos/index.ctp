<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Arquivo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="arquivos index large-9 medium-8 columns content">
    <h3><?= __('Arquivos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('caminho') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arquivos as $arquivo): ?>
            <tr>
                <td><?= $this->Number->format($arquivo->id) ?></td>
                <td><?= h($arquivo->caminho) ?></td>
                <td><?= h($arquivo->descricao) ?></td>
                <td><?= h($arquivo->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $arquivo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $arquivo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $arquivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $arquivo->id)]) ?>
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
