<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq $faq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $faq->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Faq'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="faq form large-9 medium-8 columns content">
    <?= $this->Form->create($faq) ?>
    <fieldset>
        <legend><?= __('Edit Faq') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('message');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
