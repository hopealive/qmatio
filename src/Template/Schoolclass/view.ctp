<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Schoolclas'), ['action' => 'edit', $schoolclas->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Schoolclas'), ['action' => 'delete', $schoolclas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $schoolclas->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Schoolclass'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Schoolclas'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="schoolclass view large-9 medium-8 columns content">
    <h3><?= h($schoolclas->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($schoolclas->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Class Number') ?></th>
            <td><?= $this->Number->format($schoolclas->class_number) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Preifx') ?></h4>
        <?= $this->Text->autoParagraph(h($schoolclas->preifx)); ?>
    </div>
    <div class="row">
        <h4><?= __('Suffix') ?></h4>
        <?= $this->Text->autoParagraph(h($schoolclas->suffix)); ?>
    </div>
</div>
