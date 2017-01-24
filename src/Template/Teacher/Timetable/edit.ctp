<nav class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $timetable->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $timetable->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Timetable'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="timetable form col-lg-12 col-md-12 columns content">
    <?= $this->Form->create($timetable) ?>
    <fieldset>
        <legend><?= __('Edit Timetable') ?></legend>
        <?php
            echo $this->Form->input('lesson_id');
            echo $this->Form->input('teacher_id');
            echo $this->Form->input('class_id', $classNames ); 
            echo $this->Form->input('date_table',['class'=>'date']);
            echo $this->Form->input('date_begin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
