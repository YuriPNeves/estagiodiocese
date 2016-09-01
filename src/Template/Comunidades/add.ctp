<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Comunidades'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="comunidades form large-9 medium-8 columns content">
    <?= $this->Form->create($comunidade) ?>
    <fieldset>
        <legend><?= __('Add Comunidade') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('endereco');
            echo $this->Form->input('telefone');
            echo $this->Form->input('imagem');
            echo $this->Form->input('responsavel');
            echo $this->Form->input('matriz');
            echo $this->Form->input('id_clero');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
