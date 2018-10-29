<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stat[]|\Cake\Collection\CollectionInterface $stats
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Stat'), ['action' => 'add']) ?></li>

    </ul>
</nav>
<div class="stats index large-9 medium-8 columns content">
    <h3><?= __('Stats') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               <!--  <th scope="col"><?= $this->Paginator->sort('s_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stats') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stats as $stat): ?>
            <tr>
               <!--  <td><?= $this->Number->format($stat->s_id) ?></td> -->
                <td><?= h($stat->user) ?></td>
                <td><?= h($stat->stats) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stat->s_id]) ?>
                   <!--  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $stat->s_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stat->s_id], ['confirm' => __('Are you sure you want to delete # {0}?', $stat->s_id)]) ?> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
