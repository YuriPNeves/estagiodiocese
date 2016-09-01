<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Movimentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="movimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($movimento) ?>
    <fieldset>
        <legend><?= __('Add Movimento') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('coordenador');
            echo $this->Form->input('atividades');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
