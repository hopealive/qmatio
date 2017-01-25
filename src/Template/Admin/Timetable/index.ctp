<nav class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Timetable'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class="timetable index col-lg-12 col-md-12 columns content">
    <h3 class="page-header"><?= __('Timetable') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('lesson_id') ?></th>
                <th><?= $this->Paginator->sort('teacher_id') ?></th>
                <th><?= $this->Paginator->sort('class_id') ?></th>
                <th><?= $this->Paginator->sort('date_table') ?></th>
                <th><?= $this->Paginator->sort('date_begin') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($timetable as $timetable): ?>
            <tr>
                <td><?= $this->Number->format($timetable->id) ?></td>
                <td><?= $this->Number->format($timetable->lesson_id) ?></td>
                <td><?= $this->Number->format($timetable->teacher_id) ?></td>
                <td><?= $this->Number->format($timetable->class_id) ?></td>
                <td><?= h($timetable->date_table) ?></td>
                <td><?= h($timetable->date_begin) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $timetable->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $timetable->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $timetable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timetable->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
