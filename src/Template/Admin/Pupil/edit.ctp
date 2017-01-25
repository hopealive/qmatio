<nav class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns breadcrumb" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?=
            $this->Form->postLink(
                __('Delete'), ['action' => 'delete', $pupil->id],
                ['confirm' => __('Are you sure you want to delete # {0}?',
                    $pupil->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Pupil'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pupil form col-lg-12 col-md-12 columns content">
    <?= $this->Form->create($pupil) ?>
    <fieldset>
        <legend><?= __('Edit Pupil') ?></legend>
        <div class="form-group">
            <label for="name"><?= __('Name') ?></label>
            <?=
            $this->Form->text('name',
                ['placeholder' => __('Name'), 'class' => 'form-control']);
            ?>
        </div>
        <div class="form-group">
            <label for="surname"><?= __('Surname') ?></label>
            <?=
            $this->Form->text('surname',
                ['placeholder' => __('Surname'), 'class' => 'form-control']);
            ?>
        </div>
        <div class="form-group">
            <label for="patronymic"><?= __('Patronymic') ?></label>
            <?=
            $this->Form->text('patronymic',
                ['placeholder' => __('Patronymic'), 'class' => 'form-control']);
            ?>
        </div>
        <div class="form-group">
            <label for="gender"><?= __('Gender') ?></label>
            <?=
            $this->Form->select('gender', [1 => __('Male'), 2 => __('Female')],
                ['placeholder' => __('Gender'), 'empty' => __('Choose gender'), 'class' => 'form-control']);
            ?>
        </div>
        <div class="form-group">
            <label for="date_birth"><?= __('Date Birth') ?></label>
            <?=
            $this->Form->text('date_birth',
                ['placeholder' => __('Date Birth'), 'class' => 'date-month-year form-control']);
            ?>
        </div>
        <?= $this->Form->hidden('date_register'); ?>

        <div class="form-group">
            <label for="gender"><?= __('Schoolclas') ?></label>
            <?=
            $this->Form->select('schoolclas', $classNames,
                ['value'   =>  $classId,
                    'placeholder' => __('Schoolclas'), 'empty' => __('Choose schoolclas'), 'class' => 'form-control']);
            ?>
        </div>

        
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'form-control']) ?>
    <?= $this->Form->end() ?>
</div>
