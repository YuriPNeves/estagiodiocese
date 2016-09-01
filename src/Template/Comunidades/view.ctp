<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comunidade'), ['action' => 'edit', $comunidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comunidade'), ['action' => 'delete', $comunidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comunidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comunidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comunidade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comunidades view large-9 medium-8 columns content">
    <h3><?= h($comunidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($comunidade->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($comunidade->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone') ?></th>
            <td><?= h($comunidade->telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Imagem') ?></th>
            <td><?= h($comunidade->imagem) ?></td>
        </tr>
        <tr>
            <th><?= __('Responsavel') ?></th>
            <td><?= h($comunidade->responsavel) ?></td>
        </tr>
        <tr>
            <th><?= __('Matriz') ?></th>
            <td><?= h($comunidade->matriz) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($comunidade->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id Clero') ?></th>
            <td><?= $this->Number->format($comunidade->id_clero) ?></td>
        </tr>
    </table>
</div>
