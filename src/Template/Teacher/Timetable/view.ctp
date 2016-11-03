<nav class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Timetable'), ['action' => 'edit', $timetable->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Timetable'), ['action' => 'delete', $timetable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timetable->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Timetable'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Timetable'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="timetable view col-lg-12 col-md-12 columns content">
    <h3><?= h($timetable->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($timetable->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lesson Id') ?></th>
            <td><?= $this->Number->format($timetable->lesson_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Teacher Id') ?></th>
            <td><?= $this->Number->format($timetable->teacher_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Class Id') ?></th>
            <td><?= $this->Number->format($timetable->class_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Table') ?></th>
            <td><?= h($timetable->date_table) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Begin') ?></th>
            <td><?= h($timetable->date_begin) ?></td>
        </tr>
    </table>
</div>
