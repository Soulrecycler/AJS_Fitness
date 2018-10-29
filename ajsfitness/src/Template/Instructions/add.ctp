<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Instruction $instruction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Instructions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="instructions form large-9 medium-8 columns content">
    <?= $this->Form->create($instruction) ?>
    <fieldset>
        <legend><?= __('Add Instruction') ?></legend>
        <?php
            echo $this->Form->control('message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
