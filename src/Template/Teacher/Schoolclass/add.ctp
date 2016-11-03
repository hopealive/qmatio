<nav class="col-lg-12 col-sm-12 col-xs-12 columns" id="actions-sidebar"> 
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Schoolclass'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="schoolclass form col-lg-12 col-md-12 columns content">
    <?= $this->Form->create($schoolclas) ?>
    <fieldset>
        <legend><?= __('Add Schoolclas') ?></legend>
        <?php
            echo $this->Form->input('prefix');
            echo $this->Form->input('class_number');
            echo $this->Form->input('suffix');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
