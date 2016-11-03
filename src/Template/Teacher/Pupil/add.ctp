<nav class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pupil'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pupil form col-lg-12 col-md-12 columns content">
    <?= $this->Form->create($pupil) ?>
    <fieldset>
        <legend><?= __('Add Pupil') ?></legend>

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
            $this->Form->select('gender', [1 => 'Male', 2 => 'Female'],
                ['placeholder' => __('Gender'), 'empty' => __('Choose gender'), 'class' => 'form-control']);
            ?>
        </div>
        <div class="form-group">
            <label for="date_birth"><?= __('Date Birth') ?></label>
            <?=
            $this->Form->text('date_birth',
                ['placeholder' => __('Date Birth'), 
                    'value' =>  date('Y-01-01', strtotime('-7 year')),
                    'class' => 'date-month-year form-control']);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'form-control']) ?>
    <?= $this->Form->end() ?>
</div>

