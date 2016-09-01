<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Comunidade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comunidades index large-9 medium-8 columns content">
    <h3><?= __('Comunidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('endereco') ?></th>
                <th><?= $this->Paginator->sort('telefone') ?></th>
                <th><?= $this->Paginator->sort('imagem') ?></th>
                <th><?= $this->Paginator->sort('responsavel') ?></th>
                <th><?= $this->Paginator->sort('matriz') ?></th>
                <th><?= $this->Paginator->sort('id_clero') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comunidades as $comunidade): ?>
            <tr>
                <td><?= $this->Number->format($comunidade->id) ?></td>
                <td><?= h($comunidade->nome) ?></td>
                <td><?= h($comunidade->endereco) ?></td>
                <td><?= h($comunidade->telefone) ?></td>
                <td><?= h($comunidade->imagem) ?></td>
                <td><?= h($comunidade->responsavel) ?></td>
                <td><?= h($comunidade->matriz) ?></td>
                <td><?= $this->Number->format($comunidade->id_clero) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comunidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comunidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comunidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comunidade->id)]) ?>
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
