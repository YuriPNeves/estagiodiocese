<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sugestoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sugestoes form large-9 medium-8 columns content">
    <?= $this->Form->create($sugesto) ?>
    <fieldset>
        <legend><?= __('Add Sugesto') ?></legend>
        <?php
            echo $this->Form->input('sugestao');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
