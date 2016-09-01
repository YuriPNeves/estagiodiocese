<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administradore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administradore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Administradores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="administradores form large-9 medium-8 columns content">
    <?= $this->Form->create($administradore) ?>
    <fieldset>
        <legend><?= __('Edit Administradore') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('nivel_acesso',['options' => ['admin' => 'Admin', 'redator' => 'Redator']
        ]);
            echo $this->Form->input('password');
            echo $this->Form->input('username');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
