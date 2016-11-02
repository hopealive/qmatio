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
        <?php
            echo $this->Form->text('name', ['placeholder' => __('Name'),'class' => 'form-control']);
            echo $this->Form->text('surname', ['placeholder' => __('Surname'),'class' => 'form-control']);
            echo $this->Form->text('patronymic', ['placeholder' => __('Patronymic'), 'class' => 'form-control']);
            echo $this->Form->select('gender', [1=>'Male' , 2 => 'Female'], ['placeholder' => __('Gender'), 'empty' => __('Choose gender'), 'class' => 'form-control' ]);
            echo $this->Form->text('date_birth',['placeholder' => __('Date Birth'), 'class' => 'date form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class' => 'form-control']) ?>
    <?= $this->Form->end() ?>
</div>

