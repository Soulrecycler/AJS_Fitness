<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bmi $bmi
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bmi'), ['action' => 'edit', $bmi->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bmi'), ['action' => 'delete', $bmi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bmi->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bmi'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bmi'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bmi view large-9 medium-8 columns content">
    <h3><?= h($bmi->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Result') ?></th>
            <td><?= h($bmi->result) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bmi->id) ?></td>
        </tr>
    </table>
</div>
