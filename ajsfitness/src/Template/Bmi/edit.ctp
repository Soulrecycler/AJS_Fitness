<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bmi $bmi
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bmi->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bmi->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bmi'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bmi form large-9 medium-8 columns content">
    <?= $this->Form->create($bmi) ?>
    <fieldset>
        <legend><?= __('Edit Bmi') ?></legend>
        <?php
            echo $this->Form->control('result');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
