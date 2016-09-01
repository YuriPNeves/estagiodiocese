<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Noticia'), ['action' => 'edit', $noticia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Noticia'), ['action' => 'delete', $noticia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Noticias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Noticia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="noticias view large-9 medium-8 columns content">
    <h3><?= h($noticia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Conteudo') ?></th>
            <td><?= h($noticia->conteudo) ?></td>
        </tr>
        <tr>
            <th><?= __('Imagem') ?></th>
            <td><?= h($noticia->imagem) ?></td>
        </tr>
        <tr>
            <th><?= __('Palavras Chave') ?></th>
            <td><?= h($noticia->palavras_chave) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($noticia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data') ?></th>
            <td><?= h($noticia->data) ?></td>
        </tr>
    </table>
</div>
