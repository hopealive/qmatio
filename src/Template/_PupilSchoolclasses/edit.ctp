<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pupilSchoolclass->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pupilSchoolclass->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pupil Schoolclasses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Classes'), ['controller' => 'Classes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Class'), ['controller' => 'Classes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pupilSchoolclasses form large-9 medium-8 columns content">
    <?= $this->Form->create($pupilSchoolclass) ?>
    <fieldset>
        <legend><?= __('Edit Pupil Schoolclass') ?></legend>
        <?php
            echo $this->Form->input('class_id', ['options' => $classes]);
            echo $this->Form->input('pupil_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
