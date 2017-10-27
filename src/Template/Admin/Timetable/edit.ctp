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
        <legend><?= __('Add Timetable') ?></legend>
        <div class="form-group">
            <label for="lesson_id"><?= __('Lessons') ?></label>
            <?=
            $this->Form->select('lesson_id', $lessons,
                ['placeholder' => __('Lessons'), 'empty' => __('Choose lesson'), 'class' => 'form-control']);
            ?>
        </div>

        <div class="form-group">
            <label for="teacher_id"><?= __('Teachers') ?></label>
            <?=
            $this->Form->select('teacher_id', $teachers,
                ['placeholder' => __('Teachers'), 'empty' => __('Choose teacher'), 'class' => 'form-control']);
            ?>
        </div>

        <div class="form-group">
            <label for="class_id"><?= __('Schoolclass') ?></label>
            <?=
            $this->Form->select('class_id', $classNames,
                ['placeholder' => __('Gender'), 'empty' => __('Choose school class'), 'class' => 'form-control']);
            ?>
        </div>

        <div class="form-group">
            <label for="date_birth"><?= __('Date and time begin') ?></label>
            <?=
            $this->Form->datetime('date_begin',
                [h($timetable->date_begin),
                    'class' => 'date-month-year-hour-minute form-control']);
            ?>
        </div>

            <div class="form-group">
            <label for="date_birth"><?= __('Date and time table') ?></label>
            <?=
            $this->Form->datetime ('date_table',
                [h($timetable->date_table),
                    'class' => 'date-month-year-hour-minute form-control']);
            ?>
        </div>








    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
