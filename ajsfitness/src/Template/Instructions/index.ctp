<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Instruction[]|\Cake\Collection\CollectionInterface $instructions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instruction'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instructions index large-9 medium-8 columns content">
    <h3><?= __('Instructions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               <!--  <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('message') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instructions as $instruction): ?>
            <tr>
                <!-- <td><?= $this->Number->format($instruction->id) ?></td> -->
                <td><?= h($instruction->message) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instruction->id]) ?>
                   <!--  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instruction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instruction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instruction->id)]) ?> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
