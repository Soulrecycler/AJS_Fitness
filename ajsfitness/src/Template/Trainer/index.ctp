<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trainer[]|\Cake\Collection\CollectionInterface $trainer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Trainer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trainer index large-9 medium-8 columns content">
    <h3><?= __('Trainer') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Trainer as $trainer): ?>
            <tr>
                <td><?= $this->Number->format($trainer->id) ?></td>
                <td><?= h($trainer->name) ?></td>
                <td><?= h($trainer->email) ?></td>
                <td><?= h($trainer->password) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trainer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trainer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trainer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
