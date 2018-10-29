<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Stat $stat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Stat'), ['action' => 'edit', $stat->s_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Stat'), ['action' => 'delete', $stat->s_id], ['confirm' => __('Are you sure you want to delete # {0}?', $stat->s_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Stats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Stat'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="stats view large-9 medium-8 columns content">
    <h3><?= h($stat->s_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= h($stat->user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stats') ?></th>
            <td><?= h($stat->stats) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S Id') ?></th>
            <td><?= $this->Number->format($stat->s_id) ?></td>
        </tr>
    </table>
</div>
