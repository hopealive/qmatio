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
</div>

//chooser for getting journal ( select lesson and class )

<?= $this->Form->create() ?>
<div class="form-group">
    <label for="schoolclas"><?= __('Schoolclas') ?></label>
    <?=
    $this->Form->select('schoolclas', $classNames,
        ['value' => $classId,
        'placeholder' => __('Schoolclas'), 'empty' => __('Choose schoolclas'), 'class' => 'form-control manual-journal-schoolclas']);
    ?>
</div>
<div class="form-group">
    <label for="lesson"><?= __('Lesson') ?></label>
    <?=
    $this->Form->select('lesson', $lessons,
        ['value' => $lessonId,
        'placeholder' => __('Lesson'), 'empty' => __('Choose lesson'), 'class' => 'form-control manual-journal-lesson']);
    ?>
</div>
<?= $this->Form->button(__('Change')) ?>
<?= $this->Form->button(__('Add')) ?>
<?= $this->Form->end() ?>




Current Journal

