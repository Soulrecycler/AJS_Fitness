<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq $faq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
       <!--  <li><?= $this->Html->link(__('Edit Faq'), ['action' => 'edit', $faq->id]) ?> </li> -->
       <!--  <li><?= $this->Form->postLink(__('Delete Faq'), ['action' => 'delete', $faq->id], ['confirm' => __('Are you sure you want to delete # {0}?', $faq->id)]) ?> </li> -->
        <li><?= $this->Html->link(__('List Faq'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Faq'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="faq view large-9 medium-8 columns content">
    <h3><?= h($faq->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($faq->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Message') ?></th>
            <td><?= h($faq->message) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($faq->id) ?></td>
        </tr>
    </table>
</div>
