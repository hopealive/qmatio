<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pupil'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pupil form large-9 medium-8 columns content">
    <?= $this->Form->create($pupil) ?>
    <fieldset>
        <legend><?= __('Add Pupil') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('surname');
            echo $this->Form->input('patronymic');
            echo $this->Form->input('gender');
            echo $this->Form->input('date_birth');
            echo $this->Form->input('date_register');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
