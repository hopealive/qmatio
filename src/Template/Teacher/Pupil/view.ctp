<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pupil'), ['action' => 'edit', $pupil->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pupil'), ['action' => 'delete', $pupil->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pupil->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pupil'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pupil'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pupil view large-9 medium-8 columns content">
    <h3><?= h($pupil->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pupil->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Gender') ?></th>
            <td><?= $this->Number->format($pupil->gender) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Birth') ?></th>
            <td><?= h($pupil->date_birth) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Register') ?></th>
            <td><?= h($pupil->date_register) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($pupil->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Surname') ?></h4>
        <?= $this->Text->autoParagraph(h($pupil->surname)); ?>
    </div>
    <div class="row">
        <h4><?= __('Patronymic') ?></h4>
        <?= $this->Text->autoParagraph(h($pupil->patronymic)); ?>
    </div>
</div>
