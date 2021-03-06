<nav class="col-lg-12 col-sm-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Journal'), ['action' => 'edit', $journal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Journal'), ['action' => 'delete', $journal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $journal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Journal'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Journal'), ['action' => 'add']) ?> </li>
    </ul>
</nav>

<h1 class="page-header"><?= __('Pupil') ?> #<?= h($journal->id) ?></h1>
<div class="journal view col-lg-12 col-md-12 columns content">
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($journal->id) ?></td>
        </tr>
        <tr>
            <th><?= __('User Id') ?></th>
            <td><?= $this->Number->format($journal->user_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lesson Id') ?></th>
            <td><?= $this->Number->format($journal->lesson_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Mark Id') ?></th>
            <td><?= $this->Number->format($journal->mark_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status Id') ?></th>
            <td><?= $this->Number->format($journal->status_id) ?></td>
        </tr>
    </table>
</div>
