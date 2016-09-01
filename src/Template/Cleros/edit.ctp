<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clero->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clero->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cleros'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cleros form large-9 medium-8 columns content">
    <?= $this->Form->create($clero) ?>
    <fieldset>
        <legend><?= __('Edit Clero') ?></legend>
        <?php
            echo $this->Form->input('imagem');
            echo $this->Form->input('nome');
            echo $this->Form->input('funcao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
