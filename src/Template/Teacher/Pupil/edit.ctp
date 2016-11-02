<nav class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pupil->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pupil->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pupil'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pupil form col-lg-12 col-md-12 columns content">
    <?= $this->Form->create($pupil) ?>
    <fieldset>
        <legend><?= __('Edit Pupil') ?></legend>
        <?php
            echo $this->Form->text('name', ['placeholder' => __('Name'),'class' => 'form-control']);
            echo $this->Form->text('surname', ['placeholder' => __('Surname'),'class' => 'form-control']);
            echo $this->Form->text('patronymic', ['placeholder' => __('Patronymic'), 'class' => 'form-control']);
            echo $this->Form->select('gender', [1=>'Male' , 2 => 'Female'], ['placeholder' => __('Gender'), 'empty' => __('Choose gender'), 'class' => 'form-control' ]);
            echo $this->Form->text('date_birth',['placeholder' => __('Date Birth'), 'class' => 'date form-control']);


//            echo $this->Form->input('name');
//            echo $this->Form->input('surname');
//            echo $this->Form->input('patronymic');
//            echo $this->Form->input('gender');
//            echo $this->Form->input('date_birth');
//            echo $this->Form->input('date_register');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
