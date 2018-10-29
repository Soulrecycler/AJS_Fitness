<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stat $stat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stat->s_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stat->s_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Stats'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="stats form large-9 medium-8 columns content">
    <?= $this->Form->create($stat) ?>
    <fieldset>
        <legend><?= __('Edit Stat') ?></legend>
        <?php
            echo $this->Form->control('user');
            echo $this->Form->control('stats');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
