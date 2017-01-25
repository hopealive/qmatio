<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pupil Schoolclass'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classes'), ['controller' => 'Classes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Class'), ['controller' => 'Classes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pupilSchoolclasses index large-9 medium-8 columns content">
    <h3><?= __('Pupil Schoolclasses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('class_id') ?></th>
                <th><?= $this->Paginator->sort('pupil_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pupilSchoolclasses as $pupilSchoolclass): ?>
            <tr>
                <td><?= $this->Number->format($pupilSchoolclass->id) ?></td>
                <td><?= $pupilSchoolclass->has('class') ? $this->Html->link($pupilSchoolclass->class->id, ['controller' => 'Classes', 'action' => 'view', $pupilSchoolclass->class->id]) : '' ?></td>
                <td><?= $this->Number->format($pupilSchoolclass->pupil_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pupilSchoolclass->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pupilSchoolclass->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pupilSchoolclass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pupilSchoolclass->id)]) ?>
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
