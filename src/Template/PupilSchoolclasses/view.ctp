<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pupil Schoolclass'), ['action' => 'edit', $pupilSchoolclass->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pupil Schoolclass'), ['action' => 'delete', $pupilSchoolclass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pupilSchoolclass->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pupil Schoolclasses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pupil Schoolclass'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classes'), ['controller' => 'Classes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Class'), ['controller' => 'Classes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pupilSchoolclasses view large-9 medium-8 columns content">
    <h3><?= h($pupilSchoolclass->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Class') ?></th>
            <td><?= $pupilSchoolclass->has('class') ? $this->Html->link($pupilSchoolclass->class->id, ['controller' => 'Classes', 'action' => 'view', $pupilSchoolclass->class->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pupilSchoolclass->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Pupil Id') ?></th>
            <td><?= $this->Number->format($pupilSchoolclass->pupil_id) ?></td>
        </tr>
    </table>
</div>
