<nav class="col-lg-12 col-sm-12 col-xs-12 columns breadcrumb" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Journal') ?></li>
    </ul>
</nav>

<div class="row col-lg-12 col-xs-12 col-sm-12">
    <a class="btn btn-default" href="javascript:void(0)" role="button"><?= __('Give homework') ?></a>
</div>

<div class="journal index col-lg-12 col-xs-12 col-sm-12 columns content">
    <h3 class="page-header"><?= __('Journal') ?></h3>

    //chooser for getting journal ( select lesson and class )

    <?= $this->Form->create(null,['class' => 'form-horizontal']) ?>
    <div class="form-group col-lg-6 col-xs-6 col-sm-6">
        <label for="schoolclas"><?= __('Schoolclas') ?></label>
        <?=
        $this->Form->select('schoolclas', $classNames,
            ['value' => $classId,
            'placeholder' => __('Schoolclas'), 'empty' => __('Choose schoolclas'),
            'class' => 'form-control manual-journal-schoolclas']);
        ?>
    </div>
    <div class="form-group col-lg-6 col-xs-6 col-sm-6">
        <label for="lesson"><?= __('Lesson') ?></label>
        <?=
        $this->Form->select('lesson', $lessons,
            ['value' => $lessonId,
            'placeholder' => __('Lesson'), 'empty' => __('Choose lesson'), 'class' => 'form-control manual-journal-lesson']);
        ?>
    </div>
    <?= $this->Form->button(__('Change'), ['class' => 'btn btn-md btn-primary']) ?>
    <?= $this->Form->button(__('Add'), ['class' => 'btn btn-md btn-warning']) ?>
    <?= $this->Form->end() ?>




    Current Journal

</div>
